<?php

    class urunler_model extends CI_Model
    {
        public $table_name="urunler";

        public function __construct()
        {
            parent::__construct();

        }

        public function get_inner_all()
        {
            $this->db->select('*');    
            $this->db->from('urunler');
            $this->db->join('kategoriler', 'urunler.kategori_id = kategoriler.kategoriler_id');
            $query = $this->db->get()->result();
            return $query;
        }

        public function get_all()
        {
            return $this->db->get($this->table_name)->result();
        }

        public function get($where=array())
        {
            return $this->db->where($where)->get($this->table_name)->row();
        }

        public function delete($where=array())
        {
            return $this->db->where($where)->delete($this->table_name);
        }

        public function insert($insertData=array())
        {
            return $this->db->insert($this->table_name,$insertData);
        }

        public function update($where=array(),$updateData=array())
        {
            return $this->db->where($where)->update($this->table_name,$updateData);
        }

        

    }

?>