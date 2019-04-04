<?php
class M_CRUD extends CI_Model{
 
    function article_list(){
        $hasil=$this->db->get('artikel');
        return $hasil->result();
    }
 
    function save_article(){
        $data = array(
                'id_artikel'  => $this->input->post('id_artikel'), 
                'judul_artikel'  => $this->input->post('judul_artikel'), 
                'full_artikel' => $this->input->post('full_artikel'),
                
                
            );
        $result=$this->db->insert('artikel',$data);
        return $result;
    }
 
    function update_article(){
        $id_article=$this->input->post('id_artikel');
        $judul_article=$this->input->post('judul_artikel');
        $desk_article=$this->input->post('full_artikel');
 
        $this->db->set('judul_artikel', $judul_artikel);
        $this->db->set('full_artikel', $full_artikel);
        $this->db->where('id_artikel', $id_artikel);
        $result=$this->db->update('artikel');
        return $result;
    }
 
    function delete_article(){
        $id_article=$this->input->post('id_artikel');
        $this->db->where('id_artikel', $id_artikel);
        $result=$this->db->delete('artikel');
        return $result;
    }
}