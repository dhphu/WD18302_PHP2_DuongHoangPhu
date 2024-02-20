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

        $this->_renderBase->renderHeaderClients();
        $this->_renderBase->renderMainClients();
        $this->_renderBase->renderFooterClients();
    }

    
}