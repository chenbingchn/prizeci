<?php
    class Prize extends CI_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->model('prize_model');
            $this->load->helper('url_helper');
        }
        public function index() {
            $data['prize'] = $this->prize_model->get_list();
            $this->load->view('prize/index',$data);
        }
    }