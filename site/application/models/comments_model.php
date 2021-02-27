<?php 

class comments_model extends CI_Model
{
    public $table_name="";
    public function __construct()
    {
        parent::__construct();
        $this->table_name="urun_yorumlari";
    }

    public function add_comments($insertData=array())
    {
        return $this->db->insert($this->table_name,$insertData);
    }

    public function get_comments_all($where=array())
    {
        return $this->db->where($where)->get($this->table_name)->result();
    }



}

?>