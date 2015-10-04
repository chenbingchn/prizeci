<?php
    class Prize_model extends CI_Model {
        public function __construct() {
            parent::__construct();
            $this->load->database();
            $this->load->helper('url_helper');
        }
        public function get_list() {
            $sql = 'SELECT * FROM prize';
            $query = $this->db->query($sql);
            return $query->result();
        }
    }