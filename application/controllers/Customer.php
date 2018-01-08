<?php
/**
 * Created by PhpStorm.
 * File: Customer.php
 * User: Yuri
 * Date: 2017/12/16
 * Time: 17:55
 * Email: Yuri Young<yuri.young@qq.com>
 * @property Customer $Customer
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends Admin_Controller
{
    private $status_selects = array();
    private $career_selects = array();

    function __construct()
    {
        parent::__construct();
        $this->status_selects = array(
            0 => $this->lang->line('customer_status_unknown_label'),                /*未知*/
            1 => $this->lang->line('customer_status_no_complement_label'),          /*需补充*/
            2 => $this->lang->line('customer_status_no_verify_label'),              /*未审核*/
            3 => $this->lang->line('customer_status_in_review_label'),              /*审核中*/
            4 => $this->lang->line('customer_status_accept_label'),                 /*通过*/
            5 => $this->lang->line('customer_status_reject_label'),                 /*拒绝*/
            6 => $this->lang->line('customer_status_abandon_label'),                /*放弃*/
            7 => $this->lang->line('customer_status_has_lending_label'),            /*已放款*/
        );

        $this->career_selects = array(
            0 => $this->lang->line('career_unknown_label'),              /*请选择职业*/
            1 => $this->lang->line('career_higher_vocational_label'),   /*高职*/
            2 => $this->lang->line('career_junior_college_label'),      /*专科*/
            3 => $this->lang->line('career_undergraduate_label'),       /*本科*/
            4 => $this->lang->line('career_graduate_label'),            /*研究生*/
            5 => $this->lang->line('career_doctor_label'),              /*博士*/
            6 => $this->lang->line('career_worker_label'),              /*蓝领工人*/
            7 => $this->lang->line('career_white_collar_label'),        /*白领*/
            8 => $this->lang->line('career_farmer_label'),              /*务农*/
            9 => $this->lang->line('career_freelance_label'),           /*自由职业者*/
        );

        $this->data['page_title'] = $this->lang->line('customer_list_heading');
        $this->load->model('CustomerModel');
    }

    public function index()
    {
        parent::index();

        $this->load();
        $this->render('customer_list', 'layout');
    }

    public function form_check($field)
    {
        if ($this->form_validation->run($field) == FALSE)
        {
            $results['status'] = false;
            $results['message'] = $this->form_validation->error($field);
            echo json_encode($results);
        }
        else
        {
            $results['status'] = true;
            $results['message'] = '';
            echo json_encode($results);
        }
    }

    public function create()
    {
        $this->data['page_title'] = $this->lang->line('customer_create_heading');
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin())
        {
            redirect('auth', 'refresh');
        }
    /*
        // validate form input
        $this->form_validation->set_rules('customer_name', $this->lang->line('customer_create_name_label'),
            'trim|required|regex_match[/^([\xe4-\xe9][\x80-\xbf]{2}){2,4}$/]');
        $this->form_validation->set_rules('customer_idcard', $this->lang->line('customer_create_idcard_label'),
            'trim|required|regex_match[/(^\d{15}$)|(^\d{18}$)|(^\d{17}(\d|X|x))$/]|is_unique['. $this->CustomerModel->tableName() . '.idcard]');
        $this->form_validation->set_rules('customer_phone', $this->lang->line('customer_create_phone_label'),
            'trim|required|regex_match[/^1[34578]\d{9}$/]');
        $this->form_validation->set_rules('customer_father_phone', $this->lang->line('customer_create_father_phone_label'),
            'trim|regex_match[/^1[34578]\d{9}$/]');
        $this->form_validation->set_rules('customer_mother_phone', $this->lang->line('customer_create_mother_phone_label'),
            'trim|regex_match[/^1[34578]\d{9}$/]');
        $this->form_validation->set_rules('customer_qq', $this->lang->line('customer_create_qq_label'),
            'trim|integer');

        if ( $this->form_validation->run() === TRUE && $this->add() )
        {
            redirect(base_url('customer'), 'refresh');
        }
        else
    */
        {
            // display the create user form
            // set the flash data error message if there is one
            //$this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));
            $this->formCustomerCreate();
        }
        $this->render('customer_create', 'layout');
    }

    public function view( $id )
    {
        if (!$this->ion_auth->logged_in())
        {
            redirect('auth/login', 'refresh');
        }
        if( !ctype_digit($id) )
            return;

        $this->load->model('CustomerModel');
        if( !isset($id) && $id < 1 )
            return;

        $customer = new CustomerModel();
        if( !$customer->load($id) )
            return;

        $this->data['customer'] = $customer;

        $this->data['name'] = $customer->name;
        $this->data['idcard'] = $customer->idcard;
        $this->data['phone'] = $customer->phone;
        $this->data['phone_code'] = $customer->phone_code;
        $this->data['qq'] = $customer->qq;
        $this->data['weixin'] = $customer->weixin;
        $this->data['career'] = $this->career_selects[$customer->career];
        $this->data['father'] = $customer->father;
        $this->data['father_phone'] = $customer->father_phone;
        $this->data['mother'] = $customer->mother;
        $this->data['mother_phone'] = $customer->mother_phone;
        $this->data['teacher'] = $customer->teacher;
        $this->data['teacher_phone'] = $customer->teacher_phone;
        $this->data['home_address'] = $customer->home_address;
        $this->data['work_address'] = $customer->work_address;
        $this->data['credit_level'] = $customer->credit_level;
        $this->data['attachment'] = explode(',', $customer->attachment);
        $this->data['remark'] = $customer->remark;
        $this->data['status'] = $this->status_selects[$customer->status];
        $this->data['created_on'] = $customer->created_on;
        $this->data['last_update'] = $customer->last_update;

        //不在新页面上显示数据，在后台渲染一个模态对话框再显示到前台（不想在前台渲染是因为不愿暴露后台操作方法）
        $this->render('customer_info', 'layout');

    }

    /**
     * @return bool
     */
    public function upload()
    {
        $succeed = false;
        $attachments = array();

        // Upload images
        if( isset($_FILES['customer_attachment']["name"]) )
        {
            // customer_idcard需要fileinput设置uploadExtraData参数发送到后台POST接收数据
            $basename = $this->input->post('customer_idcard');
            $this->load->library('upload');
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'jpg|jpeg|png|bmp|gif';
            $config['overwrite'] = FALSE;

            $names = [];
            $count = count($_FILES['customer_attachment']["name"]);
            for( $i = 0; $i < $count; $i++ )
            {
                // rename filename with the id card number
                array_push( $names, $basename . '_' . $i );
            }
            $config['file_name'] = $names;

            // upload operations
            $this->upload->initialize( $config );
            if( $this->upload->do_multi_upload( 'customer_attachment' ) )
            {
                // gets server path
                $data = $this->upload->get_multi_upload_data();
                foreach( $data as $value )
                {
                    array_push( $attachments,  'uploads/' . $value['file_name'] );
                }
                $succeed = true;
            }
            else // upload failed
            {
                array_push( $attachments, $_FILES['customer_attachment']['name'] );
                $succeed = false;
            }
        }

        $msg['success'] = $succeed;
        $msg['result'] = $attachments;
        echo json_encode( $msg );

        return $succeed;
    }

    public function add()
    {
        $result = $this->input->post();
        $this->load->model('CustomerModel');
        $customer = new CustomerModel();
        $customer->name = $result['customer_name'];
        $customer->idcard = $result['customer_idcard'];
        $customer->phone = $result['customer_phone'];
        $customer->phone_code = $result['customer_phone_code'];
        $customer->qq = $result['customer_qq'];
        $customer->weixin = $result['customer_weixin'];
        $customer->career = $result['customer_career'];
        $customer->father = $result['customer_father'];
        $customer->father_phone = $result['customer_father_phone'];
        $customer->mother = $result['customer_mother'];
        $customer->mother_phone = $result['customer_mother_phone'];
        $customer->teacher = $result['customer_teacher'];
        $customer->teacher_phone = $result['customer_teacher_phone'];
        $customer->home_address = $result['customer_home_address'];
        $customer->work_address = $result['customer_work_address'];
        $customer->remark = $result['customer_remark'];
        $customer->status = $result['customer_status'];
        $customer->attachment = implode(',', $result['customer_attachment']);
        $customer->created_on = date( $this->config->item( 'log_date_format' ) );
        $customer->last_update = '';
        $row = $customer->save();
        var_dump($result['customer_attachment']);
        if( $row >= 0 )
        {
            redirect(base_url('customer'), 'refresh');
            return TRUE;
        }
        else
        {
            echo 'Add customer failed.';
            return FALSE;
        }
    }

    private function load()
    {
        $this->load->model('CustomerModel');
        $customers = $this->CustomerModel->get();
        foreach ($customers as $pk => $customer)
        {
            $link = base_url('customer/view/' . $customer->id );
            $operator = '<a class="btn btn-primary btn-xs" href="' . $link . '">'
                . $this->lang->line('action_view_label') . '</a>';

            $btn = array(
                'type' => 'button',
                'class' => 'btn btn-primary btn-xs',
                'data-toggle' => 'modal',
                'data-target' => '#customer_info_modal',
                'value' => $customer->id,
            );
            $operator_view = form_button($btn, $this->lang->line('customer_operation_button_label'));

            $customer_list[] = array(
                $this->lang->line('customer_name_label')            => $customer->name,
                $this->lang->line('customer_idcard_label')          => $customer->idcard,
                $this->lang->line('customer_phone_label')           => $customer->phone,
                $this->lang->line('customer_qq_label')              => $customer->qq,
                $this->lang->line('customer_weixin_label')          => $customer->weixin,
                $this->lang->line('customer_work_address_label')    => $customer->work_address,
                $this->lang->line('customer_career_label')          => $this->career_selects[$customer->career],
                $this->lang->line('customer_credit_level_label')    => $customer->credit_level,
                $this->lang->line('customer_remark_label')          => $customer->remark,
                $this->lang->line('customer_status_label')          => $this->status_selects[$customer->status],
                $this->lang->line('customer_created_on_label')      => $customer->created_on,
                $this->lang->line('customer_last_update_label')     => $customer->last_update,
                $this->lang->line('customer_operation_label')       => $operator,
            );
            $this->formCustomerCreate();
        }

        $this->data['disablesort_columns'] = array(
            $this->lang->line('customer_work_address_label'),
            $this->lang->line('customer_remark_label'),
            $this->lang->line('customer_operation_label'),
        );
        $this->data['invisible_columns'] = array(
            $this->lang->line('customer_qq_label'),
            $this->lang->line('customer_weixin_label'),
            $this->lang->line('customer_remark_label'),
        );
        $this->data['customers'] = $customer_list;
    }

    private function formCustomerCreate()
    {
        $this->data['customer_name'] = array(
            'name' => 'customer_name',
            'id' => 'customer_name',
            'type' => 'text',
            'class' => 'form-control',
            'autofocus' => '',
            'value' => $this->form_validation->set_value('customer_name'),
            'placeholder' => $this->lang->line('customer_create_name_placeholder'),
        );
        $this->data['customer_idcard'] = array(
            'name' => 'customer_idcard',
            'id' => 'customer_idcard',
            'type' => 'text',
            'class' => 'form-control',
            'value' => $this->form_validation->set_value('customer_idcard'),
            'placeholder' => $this->lang->line('customer_create_idcard_placeholder'),
        );
        $this->data['customer_phone'] = array(
            'name' => 'customer_phone',
            'id' => 'customer_phone',
            'type' => 'text',
            'class' => 'form-control',
            'value' => $this->form_validation->set_value('customer_phone'),
            'placeholder' => $this->lang->line('customer_create_phone_placeholder'),
        );
        $this->data['customer_phone_code'] = array(
            'name' => 'customer_phone_code',
            'id' => 'customer_phone_code',
            'type' => 'text',
            'class' => 'form-control',
            'value' => $this->form_validation->set_value('customer_phone_code'),
            'placeholder' => $this->lang->line('customer_create_phone_code_placeholder'),
        );
        $this->data['customer_qq'] = array(
            'name' => 'customer_qq',
            'id' => 'customer_qq',
            'type' => 'text',
            'class' => 'form-control',
            'value' => $this->form_validation->set_value('customer_qq'),
            'placeholder' => $this->lang->line('customer_create_qq_placeholder'),
        );
        $this->data['customer_weixin'] = array(
            'name' => 'customer_weixin',
            'id' => 'customer_weixin',
            'type' => 'text',
            'class' => 'form-control',
            'value' => $this->form_validation->set_value('customer_weixin'),
            'placeholder' => $this->lang->line('customer_create_weixin_placeholder'),
        );

        $this->data['customer_father'] = array(
            'name' => 'customer_father',
            'id' => 'customer_father',
            'type' => 'text',
            'class' => 'form-control',
            'value' => $this->form_validation->set_value('customer_father'),
            'placeholder' => $this->lang->line('customer_create_father_placeholder'),
        );
        $this->data['customer_father_phone'] = array(
            'name' => 'customer_father_phone',
            'id' => 'customer_father_phone',
            'type' => 'text',
            'class' => 'form-control',
            'value' => $this->form_validation->set_value('customer_father_phone'),
            'placeholder' => $this->lang->line('customer_create_father_phone_placeholder'),
        );
        $this->data['customer_mother'] = array(
            'name' => 'customer_mother',
            'id' => 'customer_mother',
            'type' => 'text',
            'class' => 'form-control',
            'value' => $this->form_validation->set_value('customer_mother'),
            'placeholder' => $this->lang->line('customer_create_mother_placeholder'),
        );
        $this->data['customer_mother_phone'] = array(
            'name' => 'customer_mother_phone',
            'id' => 'customer_mother_phone',
            'type' => 'text',
            'class' => 'form-control',
            'value' => $this->form_validation->set_value('customer_mother_phone'),
            'placeholder' => $this->lang->line('customer_create_mother_phone_placeholder'),
        );
        $this->data['customer_teacher'] = array(
            'name' => 'customer_teacher',
            'id' => 'customer_teacher',
            'type' => 'text',
            'class' => 'form-control',
            'value' => $this->form_validation->set_value('customer_teacher'),
            'placeholder' => $this->lang->line('customer_create_teacher_placeholder'),
        );
        $this->data['customer_teacher_phone'] = array(
            'name' => 'customer_teacher_phone',
            'id' => 'customer_teacher_phone',
            'type' => 'text',
            'class' => 'form-control',
            'value' => $this->form_validation->set_value('customer_teacher_phone'),
            'placeholder' => $this->lang->line('customer_create_teacher_phone_placeholder'),
        );

        $this->data['customer_home_address'] = array(
            'name' => 'customer_home_address',
            'id' => 'customer_home_address',
            'type' => 'text',
            'class' => 'form-control',
            'value' => $this->form_validation->set_value('customer_home_address'),
            'placeholder' => $this->lang->line('customer_create_home_address_placeholder'),
        );
        $this->data['customer_work_address'] = array(
            'name' => 'customer_work_address',
            'id' => 'customer_work_address',
            'type' => 'text',
            'class' => 'form-control',
            'value' => $this->form_validation->set_value('customer_work_address'),
            'placeholder' => $this->lang->line('customer_create_work_address_placeholder'),
        );
        $this->data['customer_career'] = array(
            'name' => 'customer_career',
            'id' => 'customer_career',
            'class' => 'form-control',
            'value' => $this->form_validation->set_value('customer_career'),
        );
        $this->data['career_selects'] = $this->career_selects;

        $this->data['customer_remark'] = array(
            'name' => 'customer_remark',
            'id' => 'customer_remark',
            'type' => 'textarea',
            'rows' => '4',
            'class' => 'form-control',
            'value' => $this->form_validation->set_value('customer_remark'),
            'placeholder' => $this->lang->line('customer_create_remark_placeholder'),
        );
        $this->data['customer_status'] = array(
            'name' => 'customer_status',
            'id' => 'customer_status',
            'class' => 'form-control',
            'value' => $this->form_validation->set_value('customer_status'),
        );
        $this->data['status_selects'] = $this->status_selects;

        $this->data['customer_attachment'] = array(
            'name' => 'customer_attachment[]',
            'id' => 'customer_attachment',
            'type' => 'file',
            'accept' => 'image/*',
            'value' => $this->form_validation->set_value('customer_attachment[]'),
            'multiple' => '',
        );
    }
}