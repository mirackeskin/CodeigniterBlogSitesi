<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blank extends CI_Controller {

	public $viewFolder="";

	public function __construct()
	{
		parent::__construct();
		$this->viewFolder="blank_v";

		$this->load->model("blank_model");
		$this->load->model("images_model");
		$this->load->model("ayarlar_model");
		$this->load->model("kategori_model");
	}
	
	public function index()
	{
		//Teknoloji->1,inceleme->2,mobil->3,Oyun->4,bilim->5
		$sliderRows=$this->blank_model->sliderGetAll();
		$sliderLastRow=$this->blank_model->sliderGet();
		$sliderRowsId=$this->blank_model->sliderGetAllImagesId();//slidera resim çekmek için kullanacağım idler

		$incelemeGroup=$this->blank_model->getGroup(2);
		$oyunGroup=$this->blank_model->getGroup(4);
		$bilimGroup=$this->blank_model->getGroup(5);
		$teknolojiGroup=$this->blank_model->getGroup(1);

		
		$enCokOkunanlar=$this->blank_model->enCokOkunanlar();
		$teknolojiHaberleri=$this->blank_model->teknolojiHaberleri();
		$oyunHaberleri=$this->blank_model->oyunHaberleri();

		$incelemeHaberleri=$this->blank_model->inceleme_haberleri(); //3lü grup için çektim..

		$ayarlar=$this->ayarlar_model->get_settings();
		$navbarKategorileri=$this->kategori_model->get_all_category();


		//Sayfalama Yapımı
		$this->load->library("pagination");

		$config["base_url"]=base_url("Blank/index");
		$config["total_rows"]=$this->blank_model->get_count();
		$config["uri_segment"]=3;
		$config["per_page"]=5;
		$this->pagination->initialize($config);

		$page=($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

		$results=$this->blank_model->get_records($config["per_page"],$page);
		$links=$this->pagination->create_links();
					
		

		$blankPageData=array(
			"sliderRows"=>$sliderRows,
			"sliderLastRow"=>$sliderLastRow,
			"incelemeGroup"=>$incelemeGroup,
			"oyunGroup"=>$oyunGroup,
			"bilimGroup"=>$bilimGroup,
			"teknolojiGroup"=>$teknolojiGroup,
			"enCokOkunanlar"=>$enCokOkunanlar,
			"teknolojiHaberleri"=>$teknolojiHaberleri,
			"oyunHaberleri"=>$oyunHaberleri,
			"incelemeHaberleri"=>$incelemeHaberleri,
			"ayarlar"=>$ayarlar,
			"navbarKategorileri"=>$navbarKategorileri,
			"results"=>$results,
			"links"=>$links
		);

		$this->load->view('blank_v',$blankPageData);
	}
	
	


}
