<?php

    class ayarlar_model extends CI_Model
    {
        public $ayarlar="";

        public function __construct()
        {
            parent::__construct();
            $this->table_name="ayarlar";
        }

        public function get($where=array())
        {
            return $this->db->where($where)->get($this->table_name)->row();
        }

        public function update($where=array(),$updateData=array())
        {
            return $this->db->where($where)->update($this->table_name,$updateData);
        }
    }

?>