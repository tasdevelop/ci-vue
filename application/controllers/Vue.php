<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Vue extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('vuemodel');
    }
    public function index(){
        $this->load->view('partials/header');
        $this->load->view('vue/index');
        $this->load->view('partials/footer');
    }
}