<?php
class Article_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('html');
        $this->load->database('travel_db');
    }
	
	public function get_article($id)
    {
        $this -> db -> select('*');
        $this -> db -> from('artikel');
        $this -> db -> join('img_artikel', 'artikel.id_artikel = img_artikel.id_artikel', 'left');
		      //if($id!==null){
		      //	$this -> db -> where('id_artikel',$id);
		      //}
		      $this -> db -> order_by('artikel.id_artikel','DESC');
                if($id['limit']!==null){
                    $this -> db -> limit($id['limit']);
                    }
		      $query = $this -> db -> get();
        
                // echo $this -> db -> get();
        if ($query->num_rows () > 0)
        {
            $result = $query->result_array();
            return $result;
        }
        else
        {
            return false;
        }
    }
    //destinasi
	public function get_destinasi($id2)
    {
        $this -> db -> select('*');
        $this -> db -> from('destinasi');
        $this -> db -> join('img_destinasi', 'destinasi.id_destinasi = img_destinasi.id_destinasi', 'left');
		      //if($id!==null){
		      //	$this -> db -> where('id_artikel',$id);
		      //}
		      $this -> db -> order_by('destinasi.id_destinasi','DESC');
                if($id2['limit']!==null){
                    $this -> db -> limit($id2['limit']);
                    }
		      $query = $this -> db -> get();
        
                // echo $this -> db -> get();
        if ($query->num_rows () > 0)
        {
            $result = $query->result_array();
            return $result;
        }
        else
        {
            return false;
        }
    }
    
    
	function add_article(){
	
	}
	
	function update_article(){
	
	}
	
	function delete_article(){
	
	}
	
}