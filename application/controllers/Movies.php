<?php
class Movies extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('url_helper');

    }

    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('movies/index');
        $this->load->view('templates/footer');
    }
}

?>