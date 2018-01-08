<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Admin_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->data['page_title'] = 'Welcome';
    }

	public function index()
	{
	    parent::index();
		$this->render('welcome', 'layout');
	}
}
