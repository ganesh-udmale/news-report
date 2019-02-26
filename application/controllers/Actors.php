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
    
    public function deleteActor(){
       $id= $_POST['actor_id'];
        if(empty($id)){
            show_404();           
        }
       echo $this->actors_model->delete_actor($id);       
    }

    public function edit(){
        $id = $this->uri->segment(3);
        if(empty($id)){
            show_404();
        }
        $this->load->helper('form');

        $data['title']= 'Edit Actor Info';
        $data['actors'] = $this->actors_model->get_actors($id);
        
        $this->form_validation->set_rules('actor_name','Actor Name', 'required');
        $this->form_validation->set_rules('city', 'City', 'required');

        if($this->form_validation->run()== FALSE){
            $this->load->view('templates/header',$data);
            $this->load->view('actors/edit', $data);
            $this->load->view('templates/footer');
        }else{
            $this->actors_model->set_actor($id);
            // $this->load->view('actors/success');
            redirect( base_url(). 'index.php/actors');
        }       
    }

        public function view($id = NULL ){
            $data['actor'] = $this->actors_model->get_actors($id)    ;
            $this->load->view('templates/header',$data);
            $this->load->view('actors/view',$data);
            $this->load->view('templates/footer');
        }
    
}

?>