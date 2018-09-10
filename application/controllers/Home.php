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
	public function index()
	{
        $id=array(
        'limit'=>3
        );
        $data ['artikel'] = $this->Article_model->get_article($id);
        
        $id2=array(
        'limit'=>6
            );
        $data ['destinasi'] = $this->Article_model->get_destinasi($id2);
            
        $this->load->view('Home/Home', $data);
        
	}
}