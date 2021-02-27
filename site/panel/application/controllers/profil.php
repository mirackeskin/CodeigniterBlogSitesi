<?php 

    class profil extends CI_Controller
    {
        public $viewFolder="";

        public function __construct()
        {
            parent::__construct();
            $this->viewFolder="profil_v";

            $this->load->model("profil_model");
        }

        public function index($id)
        {
            $profileViewData=array(
                "id"=>$id
            );
            $items=$this->profil_model->get($profileViewData);

            $profilePageViewData=array(
                "viewFolder"=>$this->viewFolder,
                "subViewFolder"=>"update",
                "items"=>$items
            );

            $this->load->view("$this->viewFolder/".$profilePageViewData['subViewFolder']."/index",$profilePageViewData);
        }

        public function update($id)
        {
            $updateConditionData=array(
                "id"=>$id
            );

            $kullanici_ad=$this->input->post("kullanici_ad");
            $kullanici_soyad=$this->input->post("kullanici_soyad");
            $kullanici_mail=$this->input->post("kullanici_mail");
            $kullanici_sifre=$this->input->post("kullanici_sifre");

            $profileUpdateData=array(
                "kullanici_ad"=>$kullanici_ad,
                "kullanici_soyad"=>$kullanici_soyad,
                "kullanici_mail"=>$kullanici_mail,
                "kullanici_sifre"=>$kullanici_sifre
            );

            $update=$this->profil_model->update($updateConditionData,$profileUpdateData);
            if($update)
            {
                redirect(base_url("dashboard"));
            }else{
                redirect(base_url("dashboard"));
            }
        }






    }


?>