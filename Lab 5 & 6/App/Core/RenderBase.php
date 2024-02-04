<?php

namespace App\Core;

use App\Controllers\BaseController;

class RenderBase extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

     /**
     * @throws Exception
     */
    public function renderHeader(){
        $data = [
            // 'jobs' => $this->_jobs->getJobs(),
            // 'users' => $this->_users->getUsers()
        ];
        
        $this->load->render('layouts/admin/header', $data);
    }

    public function renderStylesheet(){
        $this->load->render('layouts/admin/stylesheet');
    }
    public function renderFooter(){
        
        $this->load->render('layouts/admin/footer');
    }

    public function renderSidebar(){
        $this->load->render('layouts/admin/sidebar');
    }

    public function renderMain(){
        $this->load->render('layouts/admin/main');
        $this -> load -> render('layouts/admin/pages/dashboard/dashboard');
    }

    public function renderJquery(){
        $this->load->render('layouts/admin/jquery');
    }

    

    

    // // ------------------------*Clients*---------------------------------

    public function renderHeaderClients(){
        $this ->load-> render('layouts/clients/header');
    }

    public function renderMainClients(){
        $this -> load-> render('layouts/clients/main');

    }

    public function renderFooterClients(){
        $this ->load-> render('layouts/clients/footer');
    }
}