<?php
class C_CRUD extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('M_CRUD');
    }
    function index(){
        $this->load->view('Admin/article');
    }
 
    function article_data(){
        $data=$this->M_CRUD->article_list();
        echo json_encode($data);
    }
 
    function save(){
        $data=$this->M_CRUD->save_article();
        echo json_encode($data);
    }
 
    function update(){
        $data=$this->M_CRUD->update_article();
        echo json_encode($data);
    }
 
    function delete(){
        $data=$this->M_CRUD->delete_article();
        echo json_encode($data);
    }
    
}