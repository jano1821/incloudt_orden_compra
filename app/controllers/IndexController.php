<?php

class IndexController extends ControllerBase {

    public function indexAction() {
        
    }
    
    public function logoutAction() {
        $this->session->destroy();
        $this->response->redirect('http://localhost:81/incloudt');
    }
}