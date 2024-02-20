<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Core\RenderBase;
use App\Models\Admin;

class AdminController extends BaseController{
    private $_model;
    private $_renderBase;

    /** 
     * Phải copy này lại*/
    function __construct()
    {
        $data = [];
        parent::__construct();

        $this->_model = new Admin();
        $this->_renderBase = new RenderBase();
    }
    function AdminController()
    {
        $this->homePageAdmin();
    }

    /**
     * @throws Exception
     */
    function homePageAdmin()
    {

        // echo "Đây là trang home";
        // $data = [
        //     'jobs' => $this->_model->getJobs(),
        //     'users' => $this->_model->getUsers(),
        // ];
        $this->_renderBase->renderStylesheet();
        $this->_renderBase->renderHeader();
        $this->_renderBase->renderSidebar();
        $this->_renderBase->renderMain();
        
        $this->_renderBase->renderJquery();
     
       
    }

    function calendar(){
        $this-> _renderBase-> renderCalendar();
    }
  
   
}