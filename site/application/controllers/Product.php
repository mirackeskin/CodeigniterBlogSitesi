<?php

class Product extends CI_Controller{

    public $viewFolder="";

    public function __construct()
    {
        parent::__construct();
        $this->viewFolder="product_v";

        $this->load->model("product_model");
		$this->load->model("images_model");
		$this->load->model("ayarlar_model");
		$this->load->model("kategori_model");
        $this->load->model("comments_model");
    }

    public function get_product_content($urun_id)
    {	
		$enCokOkunanlar=$this->product_model->enCokOkunanlar();
		$teknolojiHaberleri=$this->product_model->teknolojiHaberleri();
		$oyunHaberleri=$this->product_model->oyunHaberleri();		

		$ayarlar=$this->ayarlar_model->get_settings();
		$navbarKategorileri=$this->kategori_model->get_all_category();

        $urunConditionData=array(
            "id"=>$urun_id
        );

        $product=$this->product_model->get_product($urunConditionData); 

        //yorumlar bölümü
        $commentsConditionData=array(
            "urun_id"=>$urun_id
        );
        $yorumlar=$this->comments_model->get_comments_all($commentsConditionData);


        $productPageData=array(			
			"enCokOkunanlar"=>$enCokOkunanlar,
			"teknolojiHaberleri"=>$teknolojiHaberleri,
			"oyunHaberleri"=>$oyunHaberleri,
			"ayarlar"=>$ayarlar,
			"navbarKategorileri"=>$navbarKategorileri,
            "product"=>$product,
            "yorumlar"=>$yorumlar
		);


        $this->load->view($this->viewFolder,$productPageData);
    }

    public function send_comment($urun_id)
    {
        $yorum_ad=$this->input->post("yorum_ad");
        $yorum_icerik=$this->input->post("yorum_icerik");

        $insertData=array(
            "urun_id"=>$urun_id,
            "ad"=>$yorum_ad,
            "mesaj"=>$yorum_icerik,
            "tarih"=>date("Y-m-d H:i:s")
        );

        $insertComment=$this->comments_model->add_comments($insertData);

        if($insertComment)
        {
            redirect(base_url("product/get_product_content/$urun_id"));
        }else{
            redirect(base_url("product/get_product_content/$urun_id"));
        }
        
    }




}


?>