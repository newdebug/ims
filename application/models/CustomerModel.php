<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * File: Customer.php
 * User: Yuri
 * Date: 2017/12/16
 * Time: 17:36
 * Email: Yuri Young<yuri.young@qq.com>
 * @property CustomerModel $CustomerModel
 */
class CustomerModel extends MY_Model
{
    const DB_TABLE = 'customer';
    const DB_TABLE_PK = 'id';

    public $id;
    public $name;
    public $idcard;
    public $phone;
    public $phone_code;
    public $qq;
    public $weixin;
    public $career;
    public $father;
    public $father_phone;
    public $mother;
    public $mother_phone;
    public $teacher;
    public $teacher_phone;
    public $home_address;
    public $work_address;
    public $credit_level = 0;
    public $attachment;
    public $remark;
    public $status = 0;
    public $created_on;
    public $last_update;

    public function tableName()
    {
        return $this::DB_TABLE;
    }
}
