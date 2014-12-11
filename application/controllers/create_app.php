<?php

class Create_app extends My_controller
{
    function index()
    {
        //When user is not logged in send him to login page
        if(!$this->session->userdata("user_id")){redirect(base_url());}

//        $data['user'] = $this->m_common->getGlobalUserInfo($this->session->userdata("user_id"));
//        $data['categories'] = $this->m_common->getAllRow("category");
//        $data['platforms'] = $this->m_common->getAllRow("platform");
//        $data['templates'] = $this->m_common->getAllRow("template");
//
//        $this->load->view("header",$data);
//        $this->load->view('v_create_app', $data);
        redirect(base_url()."create_app/categorySelection");
    }

    function categorySelection()
    {
        //When user is not logged in send him to login page
        if(!$this->session->userdata("user_id")){redirect(base_url());}

        if($this->input->post())
        {
            $this->session->set_userdata("category",$this->input->post("category"));
            redirect(base_url()."create_app/platformSelection");
        }
        $data['user'] = $this->m_common->getGlobalUserInfo($this->session->userdata("user_id"));
        $data['step'] = 1;
        $data['activeStep'] = 'category';
        $data['categories'] = $this->m_common->getAllRow("category");
       // $this->load->view("header",$data);
        $this->load->view("create_app/v_category_selection", $data);
    }

    function platformSelection()
    {
        //When user is not logged in send him to login page
        if(!$this->session->userdata("user_id")){redirect(base_url());}

        if($this->input->post())
        {
            $this->session->set_userdata("platform",$this->input->post("platform"));
            redirect(base_url()."create_app/templateSelection");
        }
        $data['user'] = $this->m_common->getGlobalUserInfo($this->session->userdata("user_id"));
        $data['step'] = 2;
        $data['activeStep'] = 'platform';

        $data['platforms'] = $this->m_common->getAllRow("platform");
       // $this->load->view("header",$data);
        $this->load->view("create_app/v_platform_selection", $data);
    }

    function templateSelection()
    {
        //When user is not logged in send him to login page
        if(!$this->session->userdata("user_id")){redirect(base_url());}

        if($this->input->post())
        {
            $this->session->set_userdata("template",$this->input->post("template"));
            redirect(base_url()."create_app/dragableApp");
        }
        $data['user'] = $this->m_common->getGlobalUserInfo($this->session->userdata("user_id"));
        $data['step'] = 3;
        $data['activeStep'] = 'template';

        $data['templates'] = $this->m_common->getAllRow("template");
        //$this->load->view("header",$data);
        $this->load->view("create_app/v_template_selection", $data);

    }
    function dragableApp()
    {
        //When user is not logged in send him to login page
        if(!$this->session->userdata("user_id")){redirect(base_url());}

        if($this->input->post())
        {
            var_dump($_POST);
            var_dump($_FILES);
        }
        else
        {
            $data['user'] = $this->m_common->getGlobalUserInfo($this->session->userdata("user_id"));
            $data['step'] = 4;
            $data['activeStep'] = 'dragable';

            $data['templates'] = $this->m_common->getAllRow("template");
            // $this->load->view("header",$data);
            $this->load->view("create_app/v_dragable_creator", $data);
        }

    }
    function output()
    {
        $data[$_POST] = $_POST;
        $this->load->view("create_app/merge",$data);
        //echo $this->session->userdata('category');
    }
    function save()
    {
        //When user is not logged in send him to login page
        if(!$this->session->userdata("user_id")){redirect(base_url());}

        $data['step'] = 4;
        $data['activeStep'] = 'dragable';
        $data['user'] = $this->m_common->getGlobalUserInfo($this->session->userdata("user_id"));
        $data['saveSuccess'] = "Your app has been saved successfully!";
        
        //$this->load->view("header",$data);
        $this->load->view("create_app/v_dragable_creator", $data);
    }
}
