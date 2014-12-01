<?php

class Register extends My_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model("m_common");
        $this->load->library("form_validation");
    }
    function index()
    {
        if($this->session->userdata("user_id")){redirect(base_url());}
        $data = array();
        if($this->input->post())
        {
            $validationRules = array(
                array('field'=>'name', 'label'=>'Full Name', 'rules'=>'required'),
                array('field'=>'username', 'label'=>'Username', 'rules'=>'trim|required|is_unique[user.username]'),
                array('field'=>'email', 'label'=>'Email', 'rules'=>'trim|valid_email|required|is_unique[user.email]'),
                array('field'=>'password', 'label'=>'Password', 'rules'=>'required'),
                array("field"=>"password_conf", 'label'=>'Confirmation password', 'rules'=>'required|matches[password]'),
                array("field"=>"agree", "label"=>"Acceptence of agreement", "rules"=> "required"),
            );
            //$this->form_validation->set_message('required', 'custome message');
            $this->form_validation->set_rules($validationRules);
            if($this->form_validation->run())
            {

                $newUser = array(
                    'name' => htmlspecialchars($this->input->post("name")),
                    'username' => htmlspecialchars($this->input->post("username")),
                    'email' => htmlspecialchars($this->input->post("email")),
                    'password' => md5($this->input->post("password")),
                    'role'=>"creator",
                );
                
                $this->m_common->insert($newUser, "user");
            }
            else//when inserted data is not valid
            {
                $data["validation_errors"] = validation_errors();
            }
        }

        $this->load->view("v_register", $data);
    }
}
