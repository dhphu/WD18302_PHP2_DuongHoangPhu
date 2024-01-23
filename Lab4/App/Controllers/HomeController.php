<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Core\RenderBase;
use App\Models\Home;

class HomeController extends BaseController{

    private $_model;
    private $_renderBase;

    /** 
     * Phải copy này lại*/
    function __construct()
    {
        $data = [];
        parent::__construct();

        $this->_model = new Home();
        $this->_renderBase = new RenderBase();
    }
    function HomeController()
    {
        $this->homePage();
    }

    /**
     * @throws Exception
     */
    function homePage()
    {

        // echo "Đây là trang home";
        // $data = [
        //     'jobs' => $this->_model->getJobs(),
        //     'users' => $this->_model->getUsers(),
        // ];
        // $this->_renderBase->renderStylesheet();
        // $this->_renderBase->renderHeader();
        // $this->_renderBase->renderSidebar();
        // $this->_renderBase->renderMain();
        
        // $this->_renderBase->renderJquery();
        // // $this->load->render('layouts/client/slider');
        // // $this->load->render('client/index', $data);
        // $this->_renderBase->renderFooter();
        $this->_renderBase->renderHeaderClients();
        $this->_renderBase->renderMainClients();
        $this->_renderBase->renderFooterClients();
    }

    function categories(){
        
    }
    // function about()
    // {
    //     $data = [];
    //     $this->_renderBase->renderHeader();
    //     $this->load->render('client/about-us', $data);
    //     $this->_renderBase->renderFooter();
    // }
    // function contact()
    // {
    //     $data = [];
    //     $this->_renderBase->renderHeader();
    //     $this->load->render('client/contact', $data);
    //     $this->_renderBase->renderFooter();
    // }
    // /**
    //  * @throws Exception
    //  */
    // function Error()
    // {
    //     $this->load->render('layouts/client/header');
    //     $this->load->render('client/404');
    //     $this->load->render('layouts/client/footer');
    // }   

}