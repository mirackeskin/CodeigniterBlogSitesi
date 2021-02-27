<?php 

    class aboneler extends CI_Controller
    {
        public $viewFolder="";

        public function __construct()
        {
            parent::__construct();
            $this->viewFolder="aboneler_v";

            $this->load->model("aboneler_model");

            if(!get_active_user())
            {
                redirect(base_url("login"));
            }
        }

        public function index()
        {

            $items=$this->aboneler_model->get_all();

            $abonelerViewData=array(
                "viewFolder"=>$this->viewFolder,
                "subViewFolder"=>"list",
                "items"=>$items
            );

            $this->load->view("$this->viewFolder/".$abonelerViewData['subViewFolder']."/index",$abonelerViewData);
        }

        public function delete($abone_id)
        {
            $abonePageData=array(
                "abone_id"=>$abone_id
            );

            $delete=$this->aboneler_model->delete($abonePageData);

            if($delete)
            {
                redirect(base_url("aboneler"));
            }else
            {
                redirect(base_url("aboneler"));
            }
        }

        public function update_page($abone_id)
        {
            $updatePageData=array(
                "abone_id"=>$abone_id
            );
            
            $items=$this->aboneler_model->get($updatePageData);

            $updatePageViewData=array(
                "viewFolder"=>$this->viewFolder,
                "subViewFolder"=>"update",
                "items"=>$items
            );

            $this->load->view("$this->viewFolder/".$updatePageViewData['subViewFolder']."/index",$updatePageViewData);
        }

        public function update($abone_id)
        {
            $updateConditionData=array(
                "abone_id"=>$abone_id
            );

            $abone_ad=$this->input->post("abone_ad");
            $abone_soyad=$this->input->post("abone_soyad");
            $abone_mail=$this->input->post("abone_mail");
            $abone_sifre=$this->input->post("abone_sifre");

            $aboneUpdateData=array(
                "abone_ad"=>$abone_ad,
                "abone_soyad"=>$abone_soyad,
                "abone_mail"=>$abone_mail,
                "abone_sifre"=>$abone_sifre,
                "abone_tarih"=>date("Y-m-d H:i:s")
            );

            $update=$this->aboneler_model->update($updateConditionData,$aboneUpdateData);
            if($update)
            {
                redirect(base_url("aboneler"));
            }else{
                redirect(base_url("aboneler"));
            }
        }

        public function mail_page($abone_id)
        {
            $mailPageData=array(
                "abone_id"=>$abone_id
            );

            $items=$this->aboneler_model->get($mailPageData);

            $mailPageViewData=array(
                "viewFolder"=>$this->viewFolder,
                "subViewFolder"=>"mail",
                "items"=>$items
            );

            $this->load->view("$this->viewFolder/".$mailPageViewData['subViewFolder']."/index",$mailPageViewData);
        }

        public function mail_gonder()
        {
            $config=array(
                "protocol"=>"smtp",
                "smtp_host"=>"ssl://smtp.gmail.com",
                "smtp_port"=>"465",
                "smtp_user"=>"mico.ronaldinho@gmail.com",
                "smtp_pass"=>"3260957.m",
                "starttls"=>true,
                "charset"=>"utf-8",
                "mailtype"=>"html",
                "wordwrap"=>true,
                "newline"=>"\r\n"
            );

            $abone_mail=$this->input->post("abone_mail");
            $mail_konu=$this->input->post("mail_konu");
            $mail_icerik=$this->input->post("mail_icerik");

            $this->load->library("email",$config);
            $this->email->from("mico.ronaldinho@gmail.com");
            $this->email->to($abone_mail);
            $this->email->subject($mail_konu);
            $this->email->message($mail_icerik);
            $send=$this->email->send();

            if($send)
            {
                redirect(base_url("aboneler"));
            }else{
                echo $this->email->print_debugger();
            }
        }




    }//****


?>