<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai_model extends CI_Model
{
    private $_table = "tbl_pegawai";

    public $id_pegawai;
    public $nm_pegawai;

    public function rules()
    {
        return [
            ['field' => 'id_pegawai',
            'label' => 'ID Pegawai',
            'rules' => 'required'],

            ['field' => 'nm_pegawai',
            'label' => 'Nama Pegawai',
            'rules' => 'required'],
            
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_pegawai" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_pegawai = $post["id_pegawai"];
        $this->nm_pegawai = $post["nm_pegawai"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_pegawai = $post["id_pegawai"];
        $this->nm_pegawai = $post["nm_pegawai"];
        $this->db->update($this->_table, $this, array('id_pegawai' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_pegawai" => $id));
    }
}