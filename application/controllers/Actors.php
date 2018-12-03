<?php
class Actors extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('url_helper');
        $this->load->model('actors_model');

    }

    public function index()
    {
        $data['actors'] = $this->actors_model->get_actors();
        // echo '<pre>';print_r($data);die; 
        $this->load->view('templates/header');
        $this->load->view('actors/index',$data);
        $this->load->view('templates/footer');
    }

    public function create(){
        $this->load->helper('form');
        $this->form_validation->set_rules('actor_name','Actor Name','required');
        $this->form_validation->set_rules('city', 'City', 'required');
        $this->form_validation->set_rules('dob','Date of Bitrh', '');
        $this->form_validation->set_rules('description','Description', '');        

        if($this->form_validation->run() === FALSE){
            $this->session->set_flashdata('errors', validation_errors());
            $this->load->view('templates/header');
            $this->load->view('actors/create');
            $this->load->view('templates/footer'); 
        }else{
            $this->actors_model->set_actor();
            redirect( base_url() . 'actors');
        }
    }
}

?>