<?php

    class dashboard extends CI_Controller
    {
        public $viewFolder="";

        public function __construct()
        {
            parent::__construct();
            $this->viewFolder="dashboard_v";

            $this->load->model("dashboard_model");
            
            if(!get_active_user())
            {
                redirect(base_url("login"));
            }
        }

        public function index()
        { 
            $kullanici_sayisi=$this->dashboard_model->get_kullanici_sayisi();
            $abone_sayisi=$this->dashboard_model->get_abone_sayisi();
            $yazi_sayisi=$this->dashboard_model->get_yazi_sayisi();
            $yorum_sayisi=$this->dashboard_model->get_yorum_sayisi();

            $dashboardViewData=array(
                "kullanici_sayisi"=>$kullanici_sayisi,
                "abone_sayisi"=>$abone_sayisi,
                "goruntulenme_sayisi"=>5511,
                "yazi_sayisi"=>$yazi_sayisi,
                "yorum_sayisi"=>$yorum_sayisi
            );
            
            $this->load->view("$this->viewFolder/list/index",$dashboardViewData);
        }
    }



?>