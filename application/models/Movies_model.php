<?php
    class Movies_model extends CI_Model{

        public function __construct(){
            $this->load->database();
        }

        public function get_movies($id = FALSE){
            if($id == FALSE){
                $query = $this->db->get('movies');
                return $query->result();
            }else{
            
                $this->db->select('movies.*');
                $this->db->select('actors.actor_name');                
                $this->db->from('movies');
                $this->db->join('actors', 'actors.id = movies.actor_id','left');
                $this->db->where('movies.id', $id);
                $query = $this->db->get();

            // echo '<pre>';
            // print_r($query->result());die;
                // $query = $this->db->get_where('movies', array('id' => $id));
                return $query->row_array();          
            }
        }

        public function set_movie($id = 0){
            // $this->helper->('url');
            $data = array(
                'movie_name'=>  $this->input->post('movie_name'),
                'actor_id'=>  $this->input->post('actor_id'),
                'location'=>  $this->input->post('location'),
                'date'=>  $this->input->post('date'),
                'description'=>  $this->input->post('description'),
                'published_date'=>  ''
            );

            // echo '<pre>'; print_r($data);
            if($id == 0){
                return $this->db->insert('movies',$data);
            }
        }
    /*
        Get Movies Name By Ids
    */
    public function getMoviesById($id = 0)
    {
        if ($id === 0)
        {
            $query = $this->db->get('movies');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('movies', array('id' => $id));
        return $query->row_array();
    }

    /**
     * Update Movies Details
     */
    public function updatesMovies($id = 0)
    {
        $this->load->helper('url');
        
        $data = array(
            'movie_name' => $this->input->post('movie_name'),
            'actor_id' => $this->input->post('actor_id'),
            'location' => $this->input->post('location'),
            'date' => $this->input->post('date'),
            'description' => $this->input->post('description')
        );
        
        if ($id == 0) {
            return $this->db->insert('movies', $data);
        } else {
            $this->db->where('id', $id);
            return $this->db->update('movies', $data);
        }
    }

    public function deleteMovieById($id){
        if($id){
            $this->db->where('id',$id);
            return $this->db->delete('movies');
        }
    }

    }

?>