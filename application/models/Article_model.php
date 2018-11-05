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
		      if(isset($id['id_artikel'])){
		      	$this -> db -> where('artikel.id_artikel',$id['id_artikel']);
		      }
		      $this -> db -> order_by('artikel.id_artikel','DESC');
                if(isset($id['limit'])){
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
    
     //feat artikel
	public function get_feat($id3)
    {
        $this -> db -> select('*');
        $this -> db -> from('feat_artikel');
        $this -> db -> join('img_feat', 'feat_artikel.id_feat = img_feat.id_feat', 'left');
		      //if($id!==null){
		      //	$this -> db -> where('id_artikel',$id);
		      //}
		      $this -> db -> order_by('feat_artikel.id_feat','DESC');
                if($id3['limit']!==null){
                    $this -> db -> limit($id3['limit']);
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
    
    //destinasi
	public function get_caro($id4)
   {
        $this -> db -> select('*');
        $this -> db -> from('feat_artikel');
        $this -> db -> join('img_feat', 'feat_artikel.id_feat = img_feat.id_feat', 'left');
		      //if($id!==null){
		      //	$this -> db -> where('id_artikel',$id);
		      //}
		      $this -> db -> order_by('feat_artikel.id_feat','DESC');
                if($id4['limit']!==null){
                    $this -> db -> limit($id4['limit']);
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
    
    
    
    //login
    
    function login($username,$password){
  $periksa = $this->db->get_where('user',array('username'=>$username,'password'=> md5($password)));
  if($periksa->num_rows()>0){
    return 1;
  }else{
    return 0;
  }
}
        
    
	function add_article(){
	
	}
	
	function update_article(){
	
	}
	
	function delete_article(){
	
	}
	
}