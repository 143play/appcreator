<?php

class My_controller extends CI_Controller
{
    public function __construct() 
    {
        parent::__construct();
        $this->load->model("m_common");
    }
}

