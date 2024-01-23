<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Core\RenderBase;
use App\Models\Login;

class LoginController extends BaseController{
    private $_model;
    private $_renderBase;

    /** 
     * Phải copy này lại*/
    function __construct()
    {
        $data = [];
        parent::__construct();

        $this->_model = new Login();
        $this->_renderBase = new RenderBase();
    }
    function LoginController()
    {
        $this->pageLogin();
    }

    /**
     * @throws Exception
     */
    function pageLogin()
    {

        $this->load->render('layouts/clients/login/login');
       
    }

}