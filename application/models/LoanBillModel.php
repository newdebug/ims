<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * File: LoanBillModel.php
 * User: Yuri
 * Date: 2017/12/16
 * Time: 20:42
 * Email: Yuri Young<yuri.young@qq.com>
 * @property LoanBillModel $LoanBillModel
 */
class LoanBillModel extends MY_Model
{
    const DB_TABLE = 'loan_bill';
    const DB_TABLE_PK = 'id';

    public $id;
    public $customer;
    public $borrow_amount;
    public $repay_amount;
    public $status;
    public $borrow_on;
    public $repay_on;
}