<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * File: MY_Model.php
 * User: Yuri
 * Date: 2017/12/16
 * Time: 15:46
 * Email: Yuri Young<yuri.young@qq.com>
 * @property MY_Model $MY_Model
 */
class MY_Model extends CI_Model
{
    const DB_TABLE = 'abstract';
    const DB_TABLE_PK = 'abstract';

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    protected function populate( $row )
    {
        foreach( $row as $key => $value )
        {
            $this->$key = $value;
        }
    }

    protected function update()
    {
        $this->db->where( $this::DB_TABLE_PK, $this->{$this::DB_TABLE_PK} );
        $this->db->update( $this::DB_TABLE, $this );
        return $this->db->affected_rows();
    }

    protected function add()
    {
        $query = $this->db->insert($this::DB_TABLE, $this);
        if( ! $query )
            return NULL;

        return $this->{$this::DB_TABLE_PK} = $this->db->insert_id();
    }

    public function save()
    {
        if( isset( $this->{$this::DB_TABLE_PK} ) )
        {
            return $this->update();
        }
        else
        {
            return $this->add();
        }
    }

    public function delete()
    {
        $this->db->delete( $this::DB_TABLE, array(
            $this::DB_TABLE_PK => $this->{$this::DB_TABLE_PK}
        ));

        unset($this->{$this::DB_TABLE_PK});
    }

    public function total()
    {
        return $this->db->count_all($this::DB_TABLE);
    }

    public function load( $id )
    {
        $query = $this->db->get_where( $this::DB_TABLE, array(
            $this::DB_TABLE_PK => $id,
        ) );
        if ( !$query)
            return false;
        $this->populate( $query->row() );
        return true;
    }

    public function get($limit = 0, $offset = 0)
    {
        $query = $limit ? $this->db->get($this::DB_TABLE, $limit, $offset) : $this->db->get($this::DB_TABLE);

        $ret_values = array();
        $class = get_class($this);
        foreach( $query->result() as $row )
        {
            $model = new $class;
            $model->populate( $row );
            $ret_values[$row->{$this::DB_TABLE_PK}] = $model;
        }

        return $ret_values;
    }

}