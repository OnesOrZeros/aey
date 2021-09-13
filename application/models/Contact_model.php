<?php
    class Contact_model extends CI_Model{
        public function _construct(){
            $this->load->database();
        }
/** function to fetch the information from the text boxes in the contacts page */
        public function get_contact($name = FALSE){
            if($name === FALSE){
                $this->db->order_by('id');
                $query = $this->db->get('contact');
                return $query->result_array();
            }
    
            $query = $this->db->get_where('contact', array('name' => $name));
            return $query->row_array();
        }
/**function to post the fetched client's information to the database */
        public function add_contact(){
    
            $data = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'mobile' => $this->input->post('mobile'),
                'message' => $this->input->post('message')
                
            );
    
            return $this->db->insert('contact', $data);
        }
    
    }