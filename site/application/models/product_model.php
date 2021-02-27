<?php

class product_model extends CI_Model
{
    public $table_name="";

    public function __construct()
    {
        parent::__construct();
        $this->table_name="urunler";
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


        public function get_product($where=array())
        {
            return $this->db->where($where)->get($this->table_name)->row();
        }

        


}



?>