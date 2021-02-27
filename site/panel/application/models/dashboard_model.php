<?php

    class dashboard_model extends CI_Model
    {
        
        public function __construct()
        {
            parent::__construct();
            
        }

        public function get_kullanici_sayisi()
        {
            $query = $this->db->query('SELECT * FROM kullanicilar');
            $result = $query->num_rows(); 
            return $result;
        }

        public function get_abone_sayisi()
        {
            $query = $this->db->query('SELECT * FROM aboneler');
            $result = $query->num_rows(); 
            return $result;
        }

        public function get_yazi_sayisi()
        {
            $query = $this->db->query('SELECT * FROM urunler');
            $result = $query->num_rows(); 
            return $result;
        }

        public function get_yorum_sayisi()
        {
            $query = $this->db->query('SELECT * FROM urun_yorumlari');
            $result = $query->num_rows(); 
            $query2 = $this->db->query('SELECT * FROM yorum_cevaplari');
            $result2 = $query->num_rows(); 
            $toplam=$result+$result2;
            return $toplam;
        }

    }

?>