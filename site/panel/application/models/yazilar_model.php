<?php 

    class yazilar_model extends CI_Model
    {
        public $table_name="";

        public function __construct()
        {
            parent::__construct();
            $this->table_name="urunler";
        }

        public function get_all()
        {
            return $this->db->get($this->table_name)->result();
        }

        public function get_condition_all($where=array())
        {
            return $this->db->where($where)->get($this->table_name)->result();
        }

        public function get_inner_all($where=array())
        {
            $this->db->select('*');    
            $this->db->from('urunler');
            $this->db->where($where);
            $this->db->join('kategoriler', 'urunler.kategori_id = kategoriler.kategoriler_id');
            $query = $this->db->get()->result();
            return $query;
        }

        public function delete($where=array())
        {
            return $this->db->where($where)->delete($this->table_name);
        } 

        public function get($where=array())
        {
            return $this->db->where($where)->get($this->table_name)->row();
        }

        public function update($where=array(),$updateData=array())
        {
            return $this->db->where($where)->update($this->table_name,$updateData);
        }

        public function insert($insertData=array())
        {
            return $this->db->insert($this->table_name,$insertData);
        }




    }



?>