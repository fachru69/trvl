<?php 
 
class m_login extends CI_Model{	
    //function __construct()
   // {
     //   parent::__construct();
     //   $this->load->helper('form');
     //   $this->load->helper('html');
     //   $this->load->database('travel_db');
    //}
	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}	
}