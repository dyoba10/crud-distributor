<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_model extends CI_Model
{
    private $_table = "tbl_barang";

    public $kd_barang;
    public $nm_barang;

    public function rules()
    {
        return [
            ['field' => 'kd_barang',
            'label' => 'Kode Barang',
            'rules' => 'required'],

            ['field' => 'nm_barang',
            'label' => 'Nama Barang',
            'rules' => 'required'],
            
        ];
    }

    public function getKd(){
        return $this->db->get('kd_barang')->result();
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["kd_barang" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->kd_barang = $post["kd_barang"];
        $this->nm_barang = $post["nm_barang"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->kd_barang = $post["kd_barang"];
        $this->nm_barang = $post["nm_barang"];
        $this->db->update($this->_table, $this, array('kd_barang' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("kd_barang" => $id));
    }
}