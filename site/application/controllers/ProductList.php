<?php 

    class ProductList extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            
            $this->load->model("blank_model");
            $this->load->model("images_model");
            $this->load->model("ayarlar_model");
            $this->load->model("kategori_model");
        }

        public function get_products($kategoriler_id)
        {
		
		$enCokOkunanlar=$this->blank_model->enCokOkunanlar();
		$teknolojiHaberleri=$this->blank_model->teknolojiHaberleri();
		$oyunHaberleri=$this->blank_model->oyunHaberleri();

		$incelemeHaberleri=$this->blank_model->inceleme_haberleri(); //3lü grup için çektim..

		$ayarlar=$this->ayarlar_model->get_settings();
		$navbarKategorileri=$this->kategori_model->get_all_category();


		//Sayfalama Yapımı
        $conditionData=array(
            "durum"=>1,
            "kategori_id"=>$kategoriler_id
        );
		$this->load->library("pagination");

		$config["base_url"]=base_url("ProductList/get_products/$kategoriler_id");
		$config["total_rows"]=$this->blank_model->get_category_count($conditionData);
		$config["uri_segment"]=4;
		$config["per_page"]=5;
		$this->pagination->initialize($config);

		$page=($this->uri->segment(4)) ? $this->uri->segment(4) : 0;

        

		$results=$this->blank_model->get_category_records($config["per_page"],$page,$conditionData);
		$links=$this->pagination->create_links();
					
		

		$blankPageData=array(
			"enCokOkunanlar"=>$enCokOkunanlar,
			"teknolojiHaberleri"=>$teknolojiHaberleri,
			"oyunHaberleri"=>$oyunHaberleri,
			"incelemeHaberleri"=>$incelemeHaberleri,
			"ayarlar"=>$ayarlar,
			"navbarKategorileri"=>$navbarKategorileri,
			"results"=>$results,
			"links"=>$links
		);

		$this->load->view('productlist_v',$blankPageData);
        }



    }



?>