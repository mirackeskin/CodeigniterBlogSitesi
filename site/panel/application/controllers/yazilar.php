<?php 

    class yazilar extends CI_Controller
    {
        public $viewFolder="";
        
        public function __construct()
        {
            parent::__construct();
            $this->viewFolder="yazilarim_v";

            $this->load->model("yazilar_model");
            $this->load->model("kategoriler_model");
            $this->load->model("urunler_model");
            $this->load->model("urun_resimleri_model");

            
        }

        public function index($kullanici_id)
        {
            $yazilarimPageData=array(
                "kullanici_id"=>$kullanici_id
            );

            $items=$this->yazilar_model->get_inner_all($yazilarimPageData);

            $yazilarimPageViewData=array(
                "viewFolder"=>$this->viewFolder,
                "subViewFolder"=>"list",
                "items"=>$items
            );

            $this->load->view("$this->viewFolder/".$yazilarimPageViewData['subViewFolder']."/index",$yazilarimPageViewData);
        }

        public function delete($id)
        {
            $deleteConditionData=array(
                "id"=>$id
            );
            
            $delete=$this->yazilar_model->delete($deleteConditionData);
            if($delete)
            {
                $kullanici=$this->session->userdata("user");
                redirect(base_url("yazilar/index/$kullanici->id"));
            }else{
                $kullanici=$this->session->userdata("user");
                redirect(base_url("yazilar/index/$kullanici->id"));
            }
        }

        public function update_page($id)
        {
            $yazilarimPageData=array(
                "id"=>$id
            );

            $items=$this->yazilar_model->get($yazilarimPageData);
            
            $selectBox=$this->kategoriler_model->get_selectbox();

            $yazilarimPageViewData=array(
                "viewFolder"=>$this->viewFolder,
                "subViewFolder"=>"update",
                "items"=>$items,
                "selectBox"=>$selectBox
            );

            $this->load->view("$this->viewFolder/".$yazilarimPageViewData['subViewFolder']."/index",$yazilarimPageViewData);
        }

        public function update($id)
        {
            $updateConditionData=array(
                "id"=>$id
            );

            $baslik=$this->input->post("baslik");
            $icerik=$this->input->post("icerik");
            $kategori_id=$this->input->post("kategori_id");            

            $updateData=array(
                "baslik"=>$baslik,
                "icerik"=>$icerik,
                "durum"=>0,
                "tarih"=>date("Y-m-d H:i:s"),
                "kategori_id"=>$kategori_id
            );

            $update=$this->yazilar_model->update($updateConditionData,$updateData);

            if($update)
            {
                $kullanici=$this->session->userdata("user");
                redirect(base_url("yazilar/index/$kullanici->id"));
            }else
            {
                $kullanici=$this->session->userdata("user");
                redirect(base_url("yazilar/index/$kullanici->id"));
            }
        }

        public function add_page()
        {
            $selectBox=$this->kategoriler_model->get_selectbox();
            
            
            $pageViewData=array(
                "viewFolder"=>$this->viewFolder,
                "subViewFolder"=>"add",
                "selectBox"=>$selectBox
            );

            $this->load->view("$this->viewFolder/".$pageViewData['subViewFolder']."/index",$pageViewData);
        }

        public function add($id)
        {
            $baslik=$this->input->post("baslik");
            $icerik=$this->input->post("icerik");
            $kategori_id=$this->input->post("kategori_id");

            $insertData=array(
                "baslik"=>$baslik,
                "icerik"=>$icerik,
                "kullanici_id"=>$id,
                "durum"=>0,
                "tarih"=>date("Y-m-d H:i:s"),
                "kategori_id"=>$kategori_id
            );

            $insert=$this->yazilar_model->insert($insertData);

            if($insert)
            {
                $kullanici=$this->session->userdata("user");
                redirect(base_url("yazilar/index/$kullanici->id"));
            }else
            {
                $kullanici=$this->session->userdata("user");
                redirect(base_url("yazilar/index/$kullanici->id"));
            }
        }

        //RESİM BÖLÜMÜ
        public function image_page($id)
        {
            $urunConditionData=array(
                "id"=>$id
            );
            $urun=$this->urunler_model->get($urunConditionData); 

            $urunResimleriConditionData=array(
                "urun_id"=>$id               
            );
            $urunResmi=$this->urun_resimleri_model->get_all_images($urunResimleriConditionData);

            $imagePageData=array(
                "urun"=>$urun,
                "urunResmi"=>$urunResmi,
                "viewFolder"=>$this->viewFolder,
                "subViewFolder"=>"image"
            );

            $this->load->view("$this->viewFolder/".$imagePageData['subViewFolder']."/index",$imagePageData);
        }

        public function image_upload($id)
        {
            $config=array(
                "allowed_types"=>"jpeg|jpg|png",
                "upload_path"=>"uploads/$this->viewFolder/"
            );
            $this->load->library("upload",$config);
            $upload=$this->upload->do_upload("file");
            if($upload)
            {
                $uploadedFile=$this->upload->data("file_name");

                $imageInsertData=array(
                    "image_url"=>$uploadedFile,
                    "urun_id"=>$id
                );

                $this->urun_resimleri_model->insert($imageInsertData);
            }else
            {
                
            }
        }

        public function image_delete($id,$urun_id)
        {
            $deleteConditionData=array(
                "id"=>$id
            );

            $delete=$this->urun_resimleri_model->delete($deleteConditionData);
            
            if($delete)
            {
                redirect(base_url("urunler/image_page/$urun_id"));
            }else
            {
                redirect(base_url("urunler/image_page/$urun_id"));
            }
        }




    }


?>