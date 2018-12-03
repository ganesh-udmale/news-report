<?php
    class Actors_model extends CI_Model{

        public function __construct(){
            $this->load->database();
        }

        public function get_actors($id = FALSE){
            if($id == FALSE){
                $query = $this->db->get('actors');
                return $query->result();
            }
        }

        public function set_actor($id = 0){
            // $this->helper->('url');
            $data = array(
                'actor_name'=>  $this->input->post('actor_name'),
                'city'=>  $this->input->post('city'),
                'dob'=>  $this->input->post('dob'),
                'description'=>  $this->input->post('description'),
                'created_date'=>  ''
            );

            // echo '<pre>'; print_r($data);
            if($id == 0){
                return $this->db->insert('actors',$data);
            }
        }

    }

?>