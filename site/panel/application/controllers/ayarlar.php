<?php 

    class ayarlar extends CI_Controller
    {
        public $viewFolder="";

        public function __construct()
        {
            parent::__construct();
            $this->viewFolder="ayarlar_v";
            $this->load->model("ayarlar_model");

            if(!get_active_user())
            {
                redirect(base_url("login"));
            }
        }

        public function index()
        {
            $ayarlarPageData=array(
                "id"=>1
            );

            $items=$this->ayarlar_model->get($ayarlarPageData);

            $ayarlarPageViewData=array(
                "viewFolder"=>$this->viewFolder,
                "subViewFolder"=>"update",
                "items"=>$items
            );

            $this->load->view("$this->viewFolder/".$ayarlarPageViewData['subViewFolder']."/index",$ayarlarPageViewData);
        }

        public function update($id)
        {
            $updateConditionData=array(
                "id"=>$id
            );

            $telefon=$this->input->post("telefon");
            $mail=$this->input->post("mail");
            $adres=$this->input->post("adres");
            $logo_url=$this->input->post("logo_url");
            $twitter_url=$this->input->post("twitter_url");
            $facebook_url=$this->input->post("facebook_url");
            $instagram_url=$this->input->post("instagram_url");
            $linkedin_url=$this->input->post("linkedin_url");

            $updateData=array(
                "telefon"=>$telefon,
                "mail"=>$mail,
                "adres"=>$adres,
                "logo_url"=>$logo_url,
                "twitter_url"=>$twitter_url,
                "facebook_url"=>$facebook_url,
                "instagram_url"=>$instagram_url,
                "linkedin_url"=>$linkedin_url
            );

            $update=$this->ayarlar_model->update($updateConditionData,$updateData);
            if($update)
            {
                redirect(base_url("dashboard"));
            }else{
                redirect(base_url("ayarlar"));
            }
        }

        public function image_upload($id)
        {
            $imageConditionData=array(
                "id"=>$id
            );

            $config=array(
                "allowed_types"=>"jpeg|jpg|png",
                "upload_path"=>"uploads/$this->viewFolder/"
            );
            $this->load->library("upload",$config);
            $upload=$this->upload->do_upload("file");
            if($upload)
            {
                $uploadedFile=$this->upload->data("file_name");

                $imageUpdateData=array(
                    "logo_url"=>$uploadedFile,
                );

                $this->ayarlar_model->update($imageConditionData,$imageUpdateData);
            }else
            {
                
            }
        }


    }


?>