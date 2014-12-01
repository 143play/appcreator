<?php

class Profile extends My_Controller
{
    function index()
    {
        //When user is not logged in send him to login page
        if(!$this->session->userdata("user_id")){redirect(base_url());}

        $data['user'] = $this->m_common->getGlobalUserInfo($this->session->userdata("user_id"));
        $this->load->view("v_profile",$data);
    }

    function editProfile()
    {
        //When user is not logged in send him to login page
        if(!$this->session->userdata("user_id")){redirect(base_url());}

        $data = array();
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
                //var_dump($error);
                //$this->load->view('upload_form', $error);
            }
            else
            {
                $data = $this->upload->data();
                $imagePath = "public/img/users/".$data['file_name'];
                //echo $data['file_name'];
                //echo $data['file_path'];
            }

            $updateData = array(
                "name" => htmlspecialchars($this->input->post("name")),
                "password" => md5($this->input->post("password")),
                "email" => htmlspecialchars($this->input->post("email")),
                "photo" => $imagePath,
                "country" => htmlspecialchars($this->input->post("country")),
                "phone" => htmlspecialchars($this->input->post("phone")),
                "about" => htmlspecialchars($this->input->post("about")),
            );

            if($this->m_common->update("user",$updateData, $this->session->userdata("user_id")))
            {
                $data['successMessage'] = 'Information has been updated successfully!';
            }
            else
            {
                $data['errorMessage'] = 'No information was updated';
            }
            $data['user'] = $this->m_common->getGlobalUserInfo($this->session->userdata("user_id"));
            $this->load->view("v_profile", $data);
        }
        else
        {
            redirect(base_url()."profile");
        }
    }
}