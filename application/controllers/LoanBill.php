<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * File: LoanBill.php
 * User: Yuri
 * Date: 2017/12/16
 * Time: 20:41
 * Email: Yuri Young<yuri.young@qq.com>
 * @property LoanBill $LoanBill
 */

class LoanBill extends Admin_Controller
{
    const STATUS_STRINGS = array(
        0 => 'Unknown',         /*未确定*/
        1 => 'HasLending',      /*已放款*/
        2 => 'HasRepay',        /*已还款*/
        3 => 'Renewal',         /*续期*/
        4 => 'Overdue',         /*逾期*/
        5 => 'UrgingPayment',   /*催收中*/
        6 => 'UrgeCompleted',   /*催收完成*/
        7 => 'Obsolete',        /*作废*/
    );

    private $status_selects = array();

    function __construct()
    {
        parent::__construct();

        $this->status_selects = array(
            0 => $this->lang->line('bill_status_unknown_label'),            /*未确定*/
            1 => $this->lang->line('bill_status_has_lending_label'),        /*已放款*/
            2 => $this->lang->line('bill_status_has_repay_label'),          /*已还款*/
            3 => $this->lang->line('bill_status_renewal_label'),            /*续期*/
            4 => $this->lang->line('bill_status_overdue_label'),            /*逾期*/
            5 => $this->lang->line('bill_status_urging_payment_label'),     /*催收中*/
            6 => $this->lang->line('bill_status_urge_completed_label'),     /*催收完成*/
            7 => $this->lang->line('bill_status_obsolete_label'),           /*作废*/
        );
    }

    public function index()
    {
        parent::index();
        $this->data['page_title'] = $this->lang->line('bill_heading');
        $this->load();
        $this->render('bill_list', 'layout');
    }

    public function create()
    {
        if (!$this->ion_auth->logged_in())
        {
            redirect('auth/login', 'refresh');
        }
        $this->data['page_title'] = $this->lang->line('bill_create_heading');

        if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin())
        {
            redirect('auth', 'refresh');
            return;
        }

        // validate form input
        $this->form_validation->set_rules('borrow_customer', $this->lang->line('bill_customer_label'),
            'trim|required');
        $this->form_validation->set_rules('borrow_amount', $this->lang->line('bill_borrow_amount_label'),
            'trim|required');
        $this->form_validation->set_rules('repay_amount', $this->lang->line('bill_repay_amount_label'),
            'trim|required');
        $this->form_validation->set_rules('borrow_on', $this->lang->line('bill_repay_amount_label'),
            'trim|required');
        $this->form_validation->set_rules('repay_on', $this->lang->line('bill_repay_amount_label'),
            'trim|required');

        if ($this->form_validation->run() === TRUE && $this->add() )
        {
            redirect(base_url('loanbill'), 'refresh');
        }
        else
        {
            // display the create user form
            // set the flash data error message if there is one
            $this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));

            $this->data['borrow_customer'] = array(
                'name' => 'borrow_customer',
                'id' => 'borrow_customer',
                'type' => 'text',
                'autofocus' => '',
                'class' => 'form-control',
                'value' => $this->form_validation->set_value('borrow_customer'),
                'placeholder' => $this->lang->line('bill_create_borrow_customer_placeholder'),
            );
            $this->data['borrow_amount'] = array(
                'name' => 'borrow_amount',
                'id' => 'borrow_amount',
                'type' => 'text',
                'class' => 'form-control',
                'autofocus' => '',
                'value' => $this->form_validation->set_value('borrow_amount'),
                'placeholder' => $this->lang->line('bill_create_borrow_amount_placeholder'),
            );
            $this->data['repay_amount'] = array(
                'name' => 'repay_amount',
                'id' => 'repay_amount',
                'type' => 'text',
                'class' => 'form-control',
                'value' => $this->form_validation->set_value('repay_amount'),
                'placeholder' => $this->lang->line('bill_create_repay_amount_placeholder'),
            );

            $this->data['borrow_on'] = array(
                'name' => 'borrow_on',
                'id' => 'borrow_on',
                'type' => 'text',
                'class' => 'form-control',
                'value' => $this->form_validation->set_value('borrow_on'),
                'placeholder' => $this->lang->line('bill_create_borrow_on_placeholder'),
                'readonly' => 'true',
            );
            $this->data['repay_on'] = array(
                'name' => 'repay_on',
                'id' => 'repay_on',
                'type' => 'text',
                'class' => 'form-control',
                'value' => $this->form_validation->set_value('repay_on'),
                'placeholder' => $this->lang->line('bill_create_repay_on_placeholder'),
                'readonly' => 'true',
            );

            $this->data['bill_status'] = array(
                'name' => 'bill_status',
                'id' => 'bill_status',
                'class' => 'form-control',
                'value' => $this->form_validation->set_value('bill_status'),
            );
            $this->data['status_selects'] = $this->status_selects;
        }

        $this->render('bill_create', 'layout');
    }

    private function load()
    {
        $this->load->model('LoanBillModel');
        $bills = $this->LoanBillModel->get();
        foreach ($bills as $pk => $bill)
        {
            $link = base_url('customer/view/' . $bill->customer );
            $operator = '<a class="btn btn-primary btn-xs" href="' . $link . '">' . $this->lang->line('bill_operation_button_label') . '</a>';
            $bill_list[] = array(
                $this->lang->line('bill_customer_label')        => $bill->customer,
                $this->lang->line('bill_borrow_amount_label')   => $bill->borrow_amount,
                $this->lang->line('bill_repay_amount_label')    => $bill->repay_amount,
                $this->lang->line('bill_status_label')          => $this->status_selects[$bill->status],
                $this->lang->line('bill_borrow_on_label')       => $bill->borrow_on,
                $this->lang->line('bill_repay_on_label')        => $bill->repay_on,
                $this->lang->line('bill_operation_label')       => $operator,
            );
        }
        $this->data['bills'] = $bill_list;
    }

    private function add()
    {
        $results = $this->input->post();
        var_dump($results);

        $this->load->model('LoanBillModel');
        $bill = new LoanBillModel();

        $bill->customer = $results['borrow_customer'];
        $bill->borrow_amount = $results['borrow_amount'];
        $bill->repay_amount = $results['repay_amount'];
        $bill->borrow_on = $results['borrow_on'];
        $bill->repay_on = $results['repay_on'];
        $bill->status = $results['bill_status'];

        $row = $bill->save();
        if( $row >= 0 )
        {
            echo 'Add bill succeed.';
            return true;
        }
        else
        {
            echo 'Add bill failed.';
            return false;
        }
    }

}