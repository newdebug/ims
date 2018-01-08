<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * File: MY_Controller.php
 * User: Yuri
 * Date: 2017/12/16
 * Time: 16:49
 * Email: Yuri Young<yuri.young@qq.com>
 * @property MY_Controller $MY_Controller
 */
class MY_Controller extends CI_Controller
{
    protected $data = array();

    function __construct()
    {
        parent::__construct();
        $this->lang->load('app', 'zh_cn');

        $this->data['site_title'] = $this->lang->line('site_title_label');
        $this->data['site_subtitle'] = $this->lang->line('site_description_label');
    }

    protected function  render($content_view = NULL, $template = '')
    {
        if( $template == 'json' || $this->input->is_ajax_request() )
        {
            header( 'Content-Type: application/json' );
            echo json_encode( $this->data );
        }
        else
        {
            $this->data['content_view'] = (is_null( $content_view )) ? ''
                : $this->load->view( $content_view, $this->data, TRUE );
            if( !empty( $template ) )
                $this->load->view( 'templates/' . $template, $this->data );
        }
    }
}

/**
 * Class Auth
 * @property Ion_auth|Ion_auth_model $ion_auth        The ION Auth spark
 * @property CI_Form_validation      $form_validation The form validation library
 */
class Admin_Controller extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('ion_auth', 'form_validation'));
        $this->load->helper(array('url', 'language'));
        $this->lang->load('auth', 'zh_cn');
    }

    public function index()
    {
        if (!$this->ion_auth->logged_in())
        {
            redirect('auth', 'refresh');
        }
    }

    public function render( $content_view = NULL, $template = '' )
    {
        if ($this->ion_auth->logged_in())
        {
            $this->data['current_user'] = $this->ion_auth->user()->row();
            $this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

            $this->nav_data['sidebar_search'] = array(
                'name' => 'sidebar_search',
                'id' => 'nav_search',
                'class' => 'form-control',
                'placeholder' => $this->lang->line('sidebar_search_placeholder_label'),
                'type' => 'text',
            );

            $this->nav_data['collapse_one'] = '';
            $this->nav_data['collapse_two'] = '';
            $this->nav_data['collapse_three'] = '';
            $this->nav_data['collapse_four'] = '';

            $page = $this->uri->segment(1, 0);
            switch ($page)
            {
                case 'dashboard':
                    $this->nav_data['collapse_one'] = 'in';
                    break;
                case 'auth':
                    $this->nav_data['collapse_two'] = 'in';

                    break;
                case 'customer':
                    $this->nav_data['collapse_three'] = 'in';
                    break;
                case 'loanbill':
                    $this->nav_data['collapse_four'] = 'in';
                    break;
                default:
                    $this->data['collapse_one'] = 'in';
                    break;
            }
            $this->data['sidebar'] = $this->load->view( 'common/sidebar', $this->nav_data, TRUE );
        }
        parent::render( $content_view, $template );
    }
}
