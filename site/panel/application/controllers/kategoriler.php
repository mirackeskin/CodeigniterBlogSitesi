<?php

    class kategoriler extends CI_Controller
    {
        
        public $viewFolder="";

        public function __construct()
        {
            parent::__construct();

            $this->viewFolder="kategoriler_v";

            $this->load->model("kategoriler_model");

            if(!get_active_user())
            {
                redirect(base_url("login"));
            }
        }

        public function index()
        {
            $items=$this->kategoriler_model->get_all();

            $categoryViewData=array(
                "viewFolder"=>$this->viewFolder,
                "subViewFolder"=>"list",
                "items"=>$items
            );

            $this->load->view("$this->viewFolder/".$categoryViewData['subViewFolder']."/index",$categoryViewData);
        }

        public function add_page()
        {
            $addPageViewData=array(
                "viewFolder"=>$this->viewFolder,
                "subViewFolder"=>"add",
            );

            $this->load->view("$this->viewFolder/".$addPageViewData['subViewFolder']."/index",$addPageViewData);
        }

        public function add()
        {
            $kategori_adi=$this->input->post("kategori_adi");

            $categoryInsertData=array(
                "kategori_adi"=>$kategori_adi,
                "kategori_tarih"=>date("Y-m-d H:i:S")
            );

            $insert=$this->kategoriler_model->insert($categoryInsertData);
            
            if($insert)
            {
                redirect(base_url("kategoriler"));
            }else
            {
                redirect(base_url("kategoriler"));
            }

        }

        public function delete($id)
        {
            $deleteData=array(
                "kategoriler_id"=>$id
            );

            $delete=$this->kategoriler_model->delete($deleteData);

            if($delete)
            {
                redirect(base_url("kategoriler"));
            }else
            {
                redirect(base_url("kategoriler"));
            }
        }

        public function update_page($id)
        {   

            $updatePageData=array(
                "kategoriler_id"=>$id
            );

            $items=$this->kategoriler_model->get($updatePageData); 

            $updateViewData=array(
                "viewFolder"=>$this->viewFolder,
                "subViewFolder"=>"update",
                "items"=>$items
            );

            $this->load->view("$this->viewFolder/".$updateViewData['subViewFolder']."/index",$updateViewData);
        }

        public function update($kategoriler_id)
        {
            $updateConditionData=array(
                "kategoriler_id"=>$kategoriler_id
            );

            $kategori_adi=$this->input->post("kategori_adi");

            $updateData=array(
                "kategori_adi"=>$kategori_adi,
                "kategori_tarih"=>date("Y-m-d H:i:s")
            );

            $update=$this->kategoriler_model->update($updateConditionData,$updateData);

            if($update)
            {
                redirect(base_url("kategoriler"));
            }else
            {
                redirect(base_url("kategoriler"));
            }
        }


    }

?>