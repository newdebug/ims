<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * File: Dashboard.php
 * User: Yuri
 * Date: 2017/12/17
 * Time: 18:43
 * Email: Yuri Young<yuri.young@qq.com>
 * @property Dashboard $Dashboard
 */
class Dashboard extends Admin_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->data['page_title'] = 'Dashboard';
    }

    public function index()
    {
        parent::index();
        $this->render('dashboard', 'layout');
    }

    public function welcome()
    {
        if (!$this->ion_auth->logged_in())
        {
            redirect('auth/login', 'refresh');
        }
        $this->data['page_title'] = $this->lang->line('site_welcome_label');
        $this->render('welcome', 'layout');
    }

    public function notice()
    {
        if (!$this->ion_auth->logged_in())
        {
            redirect('auth/login', 'refresh');
        }
        $this->data['page_title'] = $this->lang->line('nav_notice_label');
        $this->render('notice', 'layout');
    }

}