<?php

    class urunler extends CI_Controller
    {
        public $viewFolder="";

        public function __construct()
        {
            parent::__construct();

            $this->viewFolder="urunler_v";

            $this->load->model("urunler_model");
            $this->load->model("kategoriler_model");
            $this->load->model("urun_resimleri_model");

            if(!get_active_user())
            {
                redirect(base_url("login"));
            }
        }

        public function index()
        {   
            $items=$this->urunler_model->get_inner_all();
            
            $urunViewData=array(
                "viewFolder"=>$this->viewFolder,
                "subViewFolder"=>"list",
                "items"=>$items
            );

            $this->load->view("$this->viewFolder/".$urunViewData['subViewFolder']."/index",$urunViewData);
        }
        //Ürün Silme Bölümü Başlangıç
        public function delete($id)
        {
            $deleteWhereData=array(
                "id"=>$id
            );
            $delete=$this->urunler_model->delete($deleteWhereData);

            $urunViewData=array(
                "viewFolder"=>$this->viewFolder,
                "subViewFolder"=>"list"
            );
            if($delete)
            {
                redirect(base_url("urunler"));
            }else{
                redirect(base_url("urunler"));
            }
        }
        //Ürün Silme Bölümü Son

        //Ürün Ekleme Bölümü Başlangıç
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

        public function add()
        {
            $baslik=$this->input->post("baslik");
            $icerik=$this->input->post("icerik");
            $kategori_id=$this->input->post("kategori_id");

            $insertData=array(
                "baslik"=>$baslik,
                "icerik"=>$icerik,
                "durum"=>1,
                "tarih"=>date("Y-m-d H:i:s"),
                "kategori_id"=>$kategori_id
            );

            $insert=$this->urunler_model->insert($insertData);

            if($insert)
            {
                redirect(base_url("urunler"));
            }else
            {
                redirect(base_url("urunler"));
            }
        }
        //Ürün Ekleme Bölümü Son

        //Ürün Düzenleme Bölümü Başlangıç

        public function update_page($id)
        {
            $updatePageData=array(
                "id"=>$id
            );
            $items=$this->urunler_model->get($updatePageData);
            $selectBox=$this->kategoriler_model->get_selectbox();

            $updatePageViewData=array(
                "viewFolder"=>$this->viewFolder,
                "subViewFolder"=>"update",
                "items"=>$items,
                "selectBox"=>$selectBox
            );

            $this->load->view("$this->viewFolder/".$updatePageViewData['subViewFolder']."/index",$updatePageViewData);

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

            $update=$this->urunler_model->update($updateConditionData,$updateData);

            if($update)
            {
                redirect(base_url("urunler"));
            }else
            {
                redirect(base_url("urunler"));
            }
        }

        //Ürün Düzenleme Bölümü Son

        //DataSwitchery Bölümü Başlangıç

        public function isActiveSetter($id)
        {
            $switcheryId=array(
                "id"=>$id
            );
            
            if($id)
            {
                if($this->input->post("data")==="true")
                {
                    $durum=1;
                }else
                {
                    $durum=0;
                }
                 
                $switcheryData=array(
                    "durum"=>$durum
                );
                $switcheryUpdate=$this->urunler_model->update($switcheryId,$switcheryData);
            }

           
        }
        //DataSwitchery Bölümü Son

        //Image Upload Bölümü Başlangıç

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

        //Image Upload Bölümü Son


    }

?>