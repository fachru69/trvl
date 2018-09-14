<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class C_CRUD extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_CRUD');
    }
 
    public function index()
    {
        $this->load->helper('url');
        $this->load->view('tables');
    }
 
    public function ajax_list()
    {
        $list = $this->M_CRUD->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $person) {
            $no++;
            $row = array();
            $row[] = $person->judul_artikel;
            $row[] = $person->konten_artikel;
            //$row[] = $person->gender;
            $row[] = $person->full_artikel;
            $row[] = $person->tgl_artikel;
 
            //add html for action
            $row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_artikel('."'".$person->id_artikel."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                  <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_artikel('."'".$person->id_artikel."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
         
            $data[] = $row;
        }
 
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->M_CRUD->count_all(),
                        "recordsFiltered" => $this->M_CRUD->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }
 
    public function ajax_edit($id)
    {
        $data = $this->M_CRUD->get_by_id($id);
        $data->tgl_artikel = ($data->tgl_artikel == '0000-00-00') ? '' : $data->tgl_artikel; // if 0000-00-00 set tu empty for datepicker compatibility
        echo json_encode($data);
    }
 
    public function ajax_add()
    {
        $this->_validate();
        $data = array(
                'judul_artikel' => $this->input->post('judul_artikel'),
                'konten_artikel' => $this->input->post('konten_artikel'),
                //'gender' => $this->input->post('gender'),
                'full_artikel' => $this->input->post('full_artikel'),
                'tgl_artikel' => $this->input->post('tgl_artikel'),
            );
        $insert = $this->M_CRUD->save($data);
        echo json_encode(array("status" => TRUE));
    }
 
    public function ajax_update()
    {
        $this->_validate();
        $data = array(
                'judul_artikel' => $this->input->post('judul_artikel'),
                'konten_artikel' => $this->input->post('konten_artikel'),
                //'gender' => $this->input->post('gender'),
                'full_artikel' => $this->input->post('full_artikel'),
                'tgl_artikel' => $this->input->post('tgl_artikel'),
            );
        $this->M_CRUD->update(array('id_artikel' => $this->input->post('id_artikel')), $data);
        echo json_encode(array("status" => TRUE));
    }
 
    public function ajax_delete($id)
    {
        $this->M_CRUD->delete_by_id($id);
        echo json_encode(array("status" => TRUE));
    }
 
 
    private function _validate()
    {
        $data = array();
        $data['error_string'] = array();
        $data['inputerror'] = array();
        $data['status'] = TRUE;
 
        if($this->input->post('judul_artikel') == '')
        {
            $data['inputerror'][] = 'judul_artikel';
            $data['error_string'][] = 'First name is required';
            $data['status'] = FALSE;
        }
 
        if($this->input->post('konten_artikel') == '')
        {
            $data['inputerror'][] = 'konten_artikel';
            $data['error_string'][] = 'Last name is required';
            $data['status'] = FALSE;
        }
 
        if($this->input->post('tgl_artikel') == '')
        {
            $data['inputerror'][] = 'tgl_artikel';
            $data['error_string'][] = 'Date of Birth is required';
            $data['status'] = FALSE;
        }
 
        //if($this->input->post('gender') == '')
        //{
        //    $data['inputerror'][] = 'gender';
       //     $data['error_string'][] = 'Please select gender';
       //     $data['status'] = FALSE;
       // }
 
        if($this->input->post('full_artikel') == '')
        {
            $data['inputerror'][] = 'full_artikel';
            $data['error_string'][] = 'Addess is required';
            $data['status'] = FALSE;
        }
 
        if($data['status'] === FALSE)
        {
            echo json_encode($data);
            exit();
        }
    }
}