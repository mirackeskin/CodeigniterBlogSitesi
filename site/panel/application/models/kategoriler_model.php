<?php

    class kategoriler_model extends CI_Model
    {
        public $table_name="";

        public function __construct()
        {
            parent::__construct();
            $this->table_name="kategoriler";
        }

        public function get($where=array())
        {
            return $this->db->where($where)->get($this->table_name)->row();
        }

        public function get_all()
        {
            return $this->db->get($this->table_name)->result();
        }

        public function get_selectbox()
        {
            return $this->db->get($this->table_name)->result();
        }

        public function insert($data=array())
        {
            return $this->db->insert($this->table_name,$data);
        }

        public function update($where=array(),$updateData=array())
        {
            return $this->db->where($where)->update($this->table_name,$updateData);
        }

        public function delete($where=array())
        {
            return $this->db->where($where)->delete($this->table_name);
        }
    }

?>