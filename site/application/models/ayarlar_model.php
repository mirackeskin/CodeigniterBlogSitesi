<?php 

class ayarlar_model extends CI_Model{
    
    public $table_name="";

    public function __construct()
    {
        parent::__construct();
        $this->table_name="ayarlar";
    }

    public function get_settings()
    {
        return $this->db->get($this->table_name)->row();
    }
}



?>