<?php

    class urun_resimleri_model extends CI_Model
    {
        public $table_name="";

        public function __construct()
        {
            parent::__construct();
            $this->table_name="urun_resimleri";
        }

        public function get_all_images($where=array())
        {
            return $this->db->where($where)->get($this->table_name)->result();
        }

        public function delete($where=array())
        {
            return $this->db->where($where)->delete($this->table_name);
        }

        public function insert($insertData=array())
        {
            return $this->db->insert($this->table_name,$insertData);
        }
    }

?>