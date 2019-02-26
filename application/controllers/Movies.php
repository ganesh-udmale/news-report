<?php
class Movies extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('url_helper');
        $this->load->model('movies_model');
        $this->load->model('actors_model');

    }

    public function index()
    {
        $data['movies'] = $this->movies_model->get_movies();
        // echo '<pre>';print_r($data);die; 
        $this->load->view('templates/header');
        $this->load->view('movies/index',$data);
        $this->load->view('templates/footer');
    }

    public function create(){
        $this->load->helper('form');
        $this->form_validation->set_rules('movie_name','Movie Name','required');
        $this->form_validation->set_rules('actor_id', 'Actor','required');
        $this->form_validation->set_rules('location', 'Location', 'required');
        $this->form_validation->set_rules('date','Movies Date', '');
        $this->form_validation->set_rules('description','Description', '');        

        if($this->form_validation->run() === FALSE){
            $data['actors'] = $this->actors_model->get_actors();
            $this->session->set_flashdata('errors', validation_errors());
            $this->load->view('templates/header');
            $this->load->view('movies/create', $data);
            $this->load->view('templates/footer');
 
        }else{
            $this->movies_model->set_movie();
            redirect( base_url() . 'movies'); 
        }
    }

    public function view($id){
        if($id){
            $data['movie'] = $this->movies_model->get_movies($id);
            // echo '<pre>';print_r($data);die; 
            $this->load->view('templates/header');
            $this->load->view('movies/view',$data);
            $this->load->view('templates/footer');
        }
    }



    public function edit(){
        $id = $this->uri->segment(3);
        
        if (empty($id))
        {
            show_404();
        }
       
        $this->load->helper('form');        
        
        $data['title'] = 'Edit Movies';        
        $data['movies'] = $this->movies_model->getMoviesById($id);
        $data['actors'] = $this->actors_model->get_actors();
        $this->form_validation->set_rules('movie_name', 'Movie Name', 'required');
        // $this->form_validation->set_rules('text', 'Text', 'required');
 
        if ($this->form_validation->run() === FALSE)
        {
            // print_r($data); die;
            $this->load->view('templates/header', $data);
            $this->load->view('movies/edit', $data);
            $this->load->view('templates/footer');
 
        }
        else{
            $this->movies_model->updatesMovies($id);
            //$this->load->view('news/success');
            redirect( base_url() . 'index.php/movies');
        }
    }

    /*
        Delete Movie By Id
    */
    public function deleteMovie(){
        $movId = $_POST['movie_id'];
        if(empty($movId)){
            show_404();
        }
        echo $this->movies_model->deleteMovieById($movId);
    }
}

?>