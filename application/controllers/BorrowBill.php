<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * File: BorrowBill.php
 * User: Yuri
 * Date: 2017/12/16
 * Time: 20:41
 * Email: Yuri Young<yuri.young@qq.com>
 * @property BorrowBill $BorrowBill
 */
class BorrowBill extends Admin_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->m_data['page_title'] = 'View borrow bill';
    }

    public function index()
    {

    }

    public function add()
    {
        $this->load->model('BorrowBillModel');
        $bill = new BorrowBillModel();
        $bill->customer = 2;
        $bill->borrow_amount = '23.00';
        $bill->repay_amount = '23.00';
        $bill->borrow_on = date( $this->config->item( 'log_date_format' ) );
        $bill->repay_on = '2018-1-20';
        $bill->check_status = 0;
        $bill->borrow_status = 0;

        $row = $bill->save();
        if( $row >= 0 )
        {
            echo 'Add bill succeed.';
        }
        else
        {
            echo 'Add bill failed.';
        }
    }

    public function load()
    {
        $this->load->model('BorrowBillModel');
        $bills = $this->BorrowBillModel->get();
        foreach ($bills as $pk => $bill)
        {
            var_dump($bill);
        }
    }
}