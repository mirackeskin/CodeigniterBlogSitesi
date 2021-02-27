<?php

    class userop extends CI_Controller
    {
        public $viewFolder="";

        public function __construct()
        {
            parent::__construct();
            $this->viewFolder="users_v";

            $this->load->model("userop_model");
        }

        public function index()
        {
            if(get_active_user())
            {
                redirect(base_url());
            }
            $useropPageViewData=array(
                "viewFolder"=>$this->viewFolder,
                "subViewFolder"=>"login"
            );
            $this->load->view("$this->viewFolder/".$useropPageViewData['subViewFolder']."/index",$useropPageViewData);
        }

        public function do_login()
        {
            if(get_active_user())
            {
                redirect(base_url());
            }
            $kullanici_mail=$this->input->post("kullanici_mail");
            $kullanici_sifre=$this->input->post("kullanici_sifre");

            $loginConditionData=array(
                "kullanici_mail"=>$kullanici_mail,
                "kullanici_sifre"=>$kullanici_sifre
            );

            $user=$this->userop_model->get($loginConditionData);

            if($user)
            {
                $this->session->set_userdata("user",$user);
                redirect(base_url());
            }
        }

        public function logout()
        {
            $this->session->unset_userdata("user");
            redirect(base_url("login"));
        }

    }

?>