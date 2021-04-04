<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Distribusi_model extends CI_Model
{
    private $_table = "tbl_distribusi";

    public $kd_distribusi;
    public $id_pegawai;
    public $kd_barang;
    public $jumlah;

    public function rules()
    {
        return [
            
            ['field' => 'kd_distribusi',
            'label' => 'Kode Distribusi',
            'rules' => 'required'],
            
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["kd_distribusi" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->kd_distribusi = $post["kd_distribusi"];
        $this->id_pegawai = $post["id_pegawai"];
        $this->kd_barang = $post["kd_barang"];
        $this->jumlah = $post["jumlah"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->kd_distribusi = $post["kd_distribusi"];
        $this->id_pegawai = $post["id_pegawai"];
        $this->kd_barang = $post["kd_barang"];
        $this->jumlah = $post["jumlah"];
        $this->db->update($this->_table, $this, array('kd_distribusi' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("kd_distribusi" => $id));
    }
}