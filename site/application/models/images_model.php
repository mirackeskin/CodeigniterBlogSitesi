<?php 

    class images_model extends CI_Model{

        public $table_name="";

        public function __construct(){
            parent::__construct();
            $this->table_name="urun_resimleri";
        }

        public function sliderRowsImages(){
            
            $this->db->select('*');
            $this->db->from("urunler");
            $this->db->join('urun_resimleri', 'urunler.id = urun_resimleri.urun_id');
            $this->db->order_by('urun_id', 'desc');
            $this->db->limit(4,1);
            $query = $this->db->get()->result();
            print_r($query);
            die;
            return $query;
        }

        public function get($where=array()){
            return $this->db->where($where)->get($this->table_name)->row();
        }

        public function getImages($where=array())
        {
            return $this->db->where($where)->get($this->table_name)->result();
        }

        public function get_product_image($where=array())
        {
            return $this->db->where($where)->get($this->table_name)->row();
        }




    }

?>