<?php

    class blank_model extends CI_Model
    {
        public $table_name="";
        public function __construct(){
            parent::__construct();
            $this->table_name="urunler";
            
        }

        //sliderda diğer kayıtları getiriyor..(sondan önceki 4 kayıt)
        public function sliderGetAll(){
           /* $this->db->order_by("id", "desc")->limit(1,2);
            $query = $this->db->get($this->table_name);
            return $query->result();*/

            $this->db->select('*');
            $this->db->from($this->table_name);
            $this->db->order_by('id', 'desc');
            $this->db->limit(4,1);
            $this->db->where("durum",1);//burayı ekledim doğrululğu kontrol edilecek
            $query = $this->db->get()->result();
            return $query;
        }

        public function sliderGetAllImagesId(){
            $this->db->select('id');
            $this->db->from($this->table_name);
            $this->db->order_by('id', 'desc');
            $this->db->limit(4,1);
            $query = $this->db->get()->result();
            return $query;
        }
        //sliderda active olan kaydı getirmek için kullanacağım(son kayıt)..
        public function sliderGet(){
            $this->db->select('*');
            $this->db->from($this->table_name);
            $this->db->order_by('id', 'desc');
            $this->db->limit(1);
            $this->db->where("durum",1);//Aynı şekilde üstteki gibi burayı ekledim kontrol edilecek..
            $query = $this->db->get()->row();
            return $query;
        }


        public function getGroup($kategoriler_id)//4lü gruba veri çekmek için kullanıldı.
        {
            $this->db->select('*');
            $this->db->from($this->table_name);
            $this->db->order_by('id', 'desc');
            $this->db->limit(1);
            $this->db->where("kategori_id",$kategoriler_id);//Aynı şekilde üstteki gibi burayı ekledim kontrol edilecek..
            $this->db->where("durum",1);
            $query = $this->db->get()->result();
            return $query;
        }


        public function enCokOkunanlar()
        {
            $this->db->select('*');
            $this->db->from($this->table_name);
            $this->db->order_by('id', 'desc');
            $this->db->limit(7,0);
            $this->db->where("durum",1);//burayı ekledim doğrululğu kontrol edilecek
            $query = $this->db->get()->result();
            return $query;
        }

        public function teknolojiHaberleri()
        {
            $this->db->select('*');
            $this->db->from($this->table_name);
            $this->db->order_by('id', 'desc');
            $this->db->limit(7,0);
            $this->db->where("durum",1);//burayı ekledim doğrululğu kontrol edilecek
            $this->db->where("kategori_id",1);
            $query = $this->db->get()->result();
            return $query;
        }

        public function oyunHaberleri()
        {
            $this->db->select('*');
            $this->db->from($this->table_name);
            $this->db->order_by('id', 'desc');
            $this->db->limit(7,0);
            $this->db->where("durum",1);//burayı ekledim doğrululğu kontrol edilecek
            $this->db->where("kategori_id",4);
            $query = $this->db->get()->result();
            return $query;
        }

        public function inceleme_haberleri()
        {
            $this->db->select('*');
            $this->db->from($this->table_name);
            $this->db->order_by('id', 'desc');
            $this->db->limit(3,1);
            $this->db->where("durum",1);//burayı ekledim doğrululğu kontrol edilecek
            $this->db->where("kategori_id",2);
            $query = $this->db->get()->result(); 
            return $query;
        }

        



        //Pagination Bölümü

        public function get_records($limit,$count)
        {
            return $this->db->order_by('id','desc')->limit($limit,$count)->where("durum",1)->get($this->table_name)->result();
        }

        public function get_count()
        {
            return $this->db->count_all($this->table_name);
        }
        //Navbar Kategorilere göre yazıları çekme(sayfalama) 

        public function get_category_records($limit,$count,$where=array())
        {
            return $this->db->order_by('id','desc')->limit($limit,$count)->where($where)->get($this->table_name)->result();
        }

        public function get_category_count($where=array())
        {
            $query=$this->db->where($where)->get($this->table_name)->result(); 
            $queryCount=count($query);
            return $queryCount;
        }
    


    }

?>