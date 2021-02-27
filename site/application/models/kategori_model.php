<?php 

class kategori_model extends CI_Model{
    
    public $table_name="";

    public function __construct()
    {
        parent::__construct();
        $this->table_name="kategoriler";
    }

    public function get_category($where=array())
    {
        return $this->db->where($where)->get($this->table_name)->row();
    }

    public function get_all_category()
    {
        return $this->db->get($this->table_name)->result();
    }
}

?>