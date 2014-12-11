<?php

class Creator extends My_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model("m_creator");
    }
    function index()
    {
        //When user is not logged in send him to login page
        if(!$this->session->userdata("user_id")){redirect(base_url());}

        $data['user'] = $this->m_common->getGlobalUserInfo($this->session->userdata("user_id"));

        $data['apps'] = $this->m_creator->getAllApps();
        $data['users'] = $this->m_common->getAllRow('user');
        $data['platforms'] = $this->m_common->getAllRow('platform');
        $data['categories'] = $this->m_common->getAllRow('category');
        $data['templates'] = $this->m_creator->getAllTemplates();

        $this->load->view("v_creator", $data);
    }

    function addApp()
    {
        //When user is not logged in send him to login page
        if(!$this->session->userdata("user_id")){redirect(base_url());}

        if($this->input->post())
        {
            $config['upload_path'] = './public/img/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']	= '1000';
            $imagePath = "";
            $logoPath = "";

            $this->load->library('upload', $config);
            //Upload background image
            if( !$this->upload->do_upload('image'))
            {
                $error = $this->upload->display_errors();
                //var_dump($error);
            }
            else
            {
                $data = $this->upload->data();
                $imagePath = "public/img/".$data['file_name'];
            }
            //Upload logo
            if( !$this->upload->do_upload('logo'))
            {
                $error = $this->upload->display_errors();
                //var_dump($error);
            }
            else
            {
                $data = $this->upload->data();
                $logoPath = "public/img/".$data['file_name'];
            }

            $newApp = array(
                "appName" => $this->input->post("name"),
                "about" => $this->input->post("about"),
                "categoryId" => $this->input->post("category"),
                "templateId" => $this->input->post("template"),
                "background_image" => $imagePath,
                "appLogo" => $logoPath,
                "price" => $this->input->post("price"),
                "status" => $this->input->post("status"),
            );

            if($this->m_creator->addNew($newApp, "app"))
            {
                $data['successMessage'] = "The Apps has been added successfully!";
            }
            $data['user'] = $this->m_common->getGlobalUserInfo($this->session->userdata("user_id"));
            $data['apps'] = $this->m_creator->getAllApps();
            $data['users'] = $this->m_common->getAllRow('user');
            $data['platforms'] = $this->m_common->getAllRow('platform');
            $data['categories'] = $this->m_common->getAllRow('category');
            $data['templates'] = $this->m_creator->getAllTemplates();
            $this->load->view("v_creator",$data);
        }
        else{
            redirect(base_url().'creator');
        }
    }

    function deleteApp($appId)
    {
        //When user is not logged in send him to login page
        if(!$this->session->userdata("user_id")){redirect(base_url());}

        $this->m_common->delete("app",$appId);
        redirect(base_url().'creator');
    }

    function addUser()
    {
        //When user is not logged in send him to login page
        if(!$this->session->userdata("user_id")){redirect(base_url());}

        if($this->input->post())
        {
            $config['upload_path'] = './public/img/users';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']	= '1000';
            $imagePath = '';

            $this->load->library('upload', $config);

            if( !$this->upload->do_upload('image'))
            {
                $error = array('error' => $this->upload->display_errors());
                //echo "file was not uploaded";
                //$this->load->view('upload_form', $error);
            }
            else
            {
                $data = $this->upload->data();
                $imagePath = "public/img/users".$data['file_name'];
                //echo $data['file_name'];
                //echo $data['file_path'];
            }

            $newUser = array(
                "name" => $this->input->post("name"),
                "username" => $this->input->post("username"),
                "email" => $this->input->post("email"),
                "password" => md5($this->input->post("password")),
                "photo" => $imagePath,
                "country" => $this->input->post("country"),
                "phone" => $this->input->post("phone"),
                "about" => $this->input->post("about"),
                "role" => $this->input->post("creator"),
            );

            if($this->m_creator->addNew($newUser, "user"))
            {
                $data['successMessage'] = "The User has been added successfully!";
            }

            $data['user'] = $this->m_common->getGlobalUserInfo($this->session->userdata("user_id"));
            $data['apps'] = $this->m_creator->getAllApps();
            $data['users'] = $this->m_common->getAllRow('user');
            $data['platforms'] = $this->m_common->getAllRow('platform');
            $data['categories'] = $this->m_common->getAllRow('category');
            $data['templates'] = $this->m_creator->getAllTemplates();
            $this->load->view("v_creator",$data);
        }
        else{
            redirect(base_url().'creator');
        }
    }

    function deleteUser($userId)
    {
        //When user is not logged in send him to login page
        if(!$this->session->userdata("user_id")){redirect(base_url());}

        $this->m_common->delete("user",$userId);
        redirect(base_url().'creator');
    }

    function addCategory()
    {
        //When user is not logged in send him to login page
        if(!$this->session->userdata("user_id")){redirect(base_url());}

        if($this->input->post())
        {
            $config['upload_path'] = './public/img/categories';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']	= '1000';
            $imagePath = '';

            $this->load->library('upload', $config);

            if( !$this->upload->do_upload('file'))
            {
                $error = array('error' => $this->upload->display_errors());
                //echo "file was not uploaded";
               // var_dump($error);
                //$this->load->view('upload_form', $error);
            }
            else
            {
                $data = $this->upload->data();
                $imagePath = "public/img/categories/".$data['file_name'];
                //echo $data['file_name'];
                //echo $data['file_path'];
            }

            $newCategory = array(
                "categoryName" => $this->input->post("name"),
                "details" => $this->input->post("details"),
                "categoryImage" =>  $imagePath,
                "publicationStatus" => $this->input->post("status"),
            );

            if($this->m_creator->addNew($newCategory, "category"))
            {
                $data['successMessage'] = "The Category has been added successfully!";
            }

            $data['user'] = $this->m_common->getGlobalUserInfo($this->session->userdata("user_id"));
            $data['apps'] = $this->m_creator->getAllApps();
            $data['users'] = $this->m_common->getAllRow('user');
            $data['platforms'] = $this->m_common->getAllRow('platform');
            $data['categories'] = $this->m_common->getAllRow('category');
            $data['templates'] = $this->m_creator->getAllTemplates();
            $this->load->view("v_creator",$data);
        }
        else{
            redirect(base_url().'creator');
        }
    }
    function deleteCategory($categoryId)
    {
        //When user is not logged in send him to login page
        if(!$this->session->userdata("user_id")){redirect(base_url());}

        $this->m_common->delete("category",$categoryId);
        redirect(base_url().'creator');
    }

    function addTemplate()
    {
        //When user is not logged in send him to login page
        if(!$this->session->userdata("user_id")){redirect(base_url());}

        if($this->input->post())
        {
            $config['upload_path'] = './public/img/templates';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']	= '1000';
            $imagePath = '';

            $this->load->library('upload', $config);

            if( !$this->upload->do_upload('file'))
            {
                $error = array('error' => $this->upload->display_errors());
                //echo "file was not uploaded";
                //var_dump($error);
                //$this->load->view('upload_form', $error);
            }
            else
            {
                $data = $this->upload->data();
                $imagePath = "public/img/templates/".$data['file_name'];
                //echo $data['file_name'];
                //echo $data['file_path'];
            }

            $newTemplate = array(
                "templateName" => $this->input->post("name"),
                "details" => $this->input->post("details"),
                "templateImage" =>  $imagePath,
                "publicationStatus" => $this->input->post("status"),
                "categoryId" => $this->input->post("category"),
            );

            if($this->m_creator->addNew($newTemplate, "template"))
            {
                $data['successMessage'] = "The Template has been added successfully!";
            }

            $data['user'] = $this->m_common->getGlobalUserInfo($this->session->userdata("user_id"));
            $data['apps'] = $this->m_creator->getAllApps();
            $data['users'] = $this->m_common->getAllRow('user');
            $data['platforms'] = $this->m_common->getAllRow('platform');
            $data['categories'] = $this->m_common->getAllRow('category');
            $data['templates'] = $this->m_creator->getAllTemplates();
            $this->load->view("v_creator",$data);
        }
        else{
            redirect(base_url().'creator');
        }
    }
    function deleteTemplate($templateId)
    {
        //When user is not logged in send him to login page
        if(!$this->session->userdata("user_id")){redirect(base_url());}

        $this->m_common->delete("template",$templateId);
        redirect(base_url().'creator');
    }

    function addPlatform()
    {
        //When user is not logged in send him to login page
        if(!$this->session->userdata("user_id")){redirect(base_url());}

        if($this->input->post())
        {
            $newPlatform = array(
                "platformName" => $this->input->post("name"),
                "publicationStatus" => $this->input->post("status"),
            );

            if($this->m_creator->addNew($newPlatform, "platform"))
            {
                $data['successMessage'] = "The Apps has been added successfully!";
            }
            $data['user'] = $this->m_common->getGlobalUserInfo($this->session->userdata("user_id"));
            $data['apps'] = $this->m_creator->getAllApps();
            $data['users'] = $this->m_common->getAllRow('user');
            $data['platforms'] = $this->m_common->getAllRow('platform');
            $data['categories'] = $this->m_common->getAllRow('category');
            $data['templates'] = $this->m_creator->getAllTemplates();
            $this->load->view("v_creator",$data);
        }
        else{
            redirect(base_url().'creator');
        }
    }
    function deletePlatform($platformId)
    {
        //When user is not logged in send him to login page
        if(!$this->session->userdata("user_id")){redirect(base_url());}

        $this->m_common->delete("platform",$platformId);
        redirect(base_url().'creator');
    }
}
