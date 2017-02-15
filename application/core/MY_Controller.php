<?php

/**
 * Created by PhpStorm.
 * User: Angujo Barrack
 * Date: 15-Feb-17
 * Time: 2:42 AM
 */
class MY_Controller extends CI_Controller
{
    protected $data = [];
    
    public function __construct() { parent::__construct(); }
    
    protected function view($view)
    {
        $this->data['view'] = $view;
        $this->load->view('admin-skeleton', $this->data);
    }
}