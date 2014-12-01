<?php
class Welcome extends My_Controller
{
    public function __construct() 
    {
        parent::__construct();
        $this->load->library("form_validation");
    }
    function index()
    {
        //If user is no logged already logged in
        if(!$this->session->userdata("user_id"))
        {
            $this->load->view("v_login");
        }
        else
        {
            $data['user'] = $this->m_common->getGlobalUserInfo($this->session->userdata("user_id"));
            $this->load->view("v_dashboard", $data);
        }
    }
    function login()
    {
        //When login credentials are submitted
        if($this->input->post())
        {
            //Check login form if no data is inputed
            $validationRules = array(
                array("field" => "username","rules" => "trim|required"),
                array("field" => "password","rules" => "required"),
            );
            
            $this->form_validation->set_rules($validationRules);
            
            $username = $this->input->post("username");
            $password = md5($this->input->post("password"));
            
            $user = $this->m_common->checkCredentials($username, $password);
            
            //when login button pressed without inputing field
            if(!$this->form_validation->run())
            {
                $data["loginErrors"] = "Login fields must be filled up";
                $this->load->view("v_login",$data);
            }
            else if(!$user)//when username and password is not matched
            {
                $data["loginErrors"] = "Sorry, we cannot recognize you";
                $this->load->view("v_login",$data);
            }
            else// when username and password mached
            {
                $this->session->set_userdata("user_id", $user->id);
                redirect(base_url());//Load the dashboard for the user
            }
        }
        else 
        {
            redirect(base_url());
        }
    }
    function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url());
    }
}