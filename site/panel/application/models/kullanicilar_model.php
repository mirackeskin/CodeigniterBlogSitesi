<?php 

    class kullanicilar_model extends CI_Model
    {
        public $table_name="";

        public function __construct()
        {
            parent::__construct();

            $this->table_name="kullanicilar";
        }

        public function get_all()
        {
            return $this->db->get($this->table_name)->result();
        }

        public function get($where=array())
        {
            return $this->db->get($this->table_name)->row();
        }

        public function insert($insertData=array())
        {
            return $this->db->insert($this->table_name,$insertData);
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