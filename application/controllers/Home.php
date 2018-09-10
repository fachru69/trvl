<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    
    function __construct()
        {
                parent::__construct();
        $this->load->model(array('Article_model'));
        /**$this->load->model(array('artikel','menu'));*/
        }
    
    //memanggil full page artikel
    function page_art()
    {
        
        echo $this->uri->segment(3);
        $filter = array(
            'id_artikel'=>$this->uri->segment(3)
        );
        $data ['artikel'] = $this->Article_model->get_article($filter);
        
        $this->load->view('page-1', $data);
    }
    
    
	public function index()
	{
        //artikel home
        $id=array(
        'limit'=>3
        );
        $data ['artikel'] = $this->Article_model->get_article($id);
        //destinasi
        $id2=array(
        'limit'=>8
            );
        $data ['destinasi'] = $this->Article_model->get_destinasi($id2);
        //artikel page
        $this->load->view('Home/Home', $data);
        
        
    }
}