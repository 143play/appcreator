<?php

class Gallery extends My_Controller
{
    function index()
    {
        //When user is not logged in send him to login page
        if(!$this->session->userdata("user_id")){redirect(base_url());}

        $data['gallery'] = $this->m_common->getAllRow("site_gallery");
        $data['user'] = $this->m_common->getGlobalUserInfo($this->session->userdata("user_id"));
        $this->load->view('v_gallery', $data);
    }
}
