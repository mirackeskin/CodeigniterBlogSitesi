<?php 

    class kullanicilar extends CI_Controller
    {
        public $viewFolder="";

        public function __construct()
        {
            parent::__construct();
            $this->viewFolder="users_v";

            $this->load->model("kullanicilar_model");

            if(!get_active_user())
            {
                redirect(base_url("login"));
            }
        }

        public function index()
        {
            $items=$this->kullanicilar_model->get_all();

            $listViewData=array(
                "viewFolder"=>$this->viewFolder,
                "subViewFolder"=>"list",
                "items"=>$items
            );
            $this->load->view("$this->viewFolder/".$listViewData['subViewFolder']."/index",$listViewData);
        }

        //KULLANICI EKLEME BÖLÜMÜ BAŞLANGIÇ
        public function add_page()
        {
            $addPageViewData=array(
                "viewFolder"=>$this->viewFolder,
                "subViewFolder"=>"add"
            );

            $this->load->view("$this->viewFolder/".$addPageViewData['subViewFolder']."/index",$addPageViewData);
        }

        public function add()
        {
            $kullanici_ad=$this->input->post("kullanici_ad");
            $kullanici_soyad=$this->input->post("kullanici_soyad");
            $kullanici_mail=$this->input->post("kullanici_mail");
            $kullanici_sifre=$this->input->post("kullanici_sifre");
            $kullanici_yetki=$this->input->post("kullanici_yetki");

            $insertData=array(
                "kullanici_ad"=>$kullanici_ad,
                "kullanici_soyad"=>$kullanici_soyad,
                "kullanici_mail"=>$kullanici_mail,
                "kullanici_sifre"=>$kullanici_sifre,
                "kullanici_yetki"=>$kullanici_yetki
            );

            $insert=$this->kullanicilar_model->insert($insertData);

            if($insert)
            {
                redirect(base_url("kullanicilar"));
            }else
            {
                redirect(base_url("kullanicilar"));
            }
        }
        //KULLANICI EKLEME BÖLÜMÜ SON

        //KULLANICI DÜZENLEME BÖLÜMÜ BAŞLANGIÇ

        public function update_page($id)
        {
            $updatePageData=array(
                "id"=>$id
            );

            $items=$this->kullanicilar_model->get($updatePageData);

            
            $updatePageViewData=array(
                "viewFolder"=>$this->viewFolder,
                "subViewFolder"=>"update",
                "items"=>$items
            );

            $this->load->view("$this->viewFolder/".$updatePageViewData['subViewFolder']."/index",$updatePageViewData);
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
            $kullanici_yetki=$this->input->post("kullanici_yetki");

            $updateData=array(
                "kullanici_ad"=>$kullanici_ad,
                "kullanici_soyad"=>$kullanici_soyad,
                "kullanici_mail"=>$kullanici_mail,
                "kullanici_sifre"=>$kullanici_sifre,
                "kullanici_yetki"=>$kullanici_yetki
            );

            $update=$this->kullanicilar_model->update($updateConditionData,$updateData);

            if($update)
            {
                redirect(base_url("kullanicilar"));
            }else
            {
                redirect(base_url("kullanicilar"));
            }
        }

        //KULLANICI DÜZENLEME BÖLÜMÜ SON

        //KULLANICI SİLME BÖLÜMÜ BAŞLANGIÇ

        public function delete($id)
        {
            $deleteConditionData=array(
                "id"=>$id
            );

            $delete=$this->kullanicilar_model->delete($deleteConditionData);

            if($delete)
            {
                redirect(base_url("kullanicilar"));
            }else{
                redirect(base_url("kullanicilar"));
            }
        }

        //KULLANICI SİLME BÖLÜMÜ SON


    }

?>