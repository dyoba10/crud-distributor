<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Apotek_model extends CI_Model
{
    private $_table = "barang";

    public $id_barang;
    public $tanggal;
    public $ed;
    public $asal;
    public $jml_masuk;
    public $jml_keluar;
    public $sisa;
    public $ket;

    public function rules()
    {
        return [
            ['field' => 'jml_masuk',
            'label' => 'Jumlah Masuk',
            'rules' => 'numeric'],

            ['field' => 'jml_keluar',
            'label' => 'Jumlah Keluar',
            'rules' => 'numeric'],
            
            ['field' => 'sisa',
            'label' => 'sisa',
            'rules' => 'numeric']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_barang" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_barang = uniqid();
        $this->tanggal = $post["tanggal"];
        $this->ed = $post["ed"];
        $this->asal = $post["asal"];
        $this->jml_masuk = $post["jml_masuk"];
        $this->jml_keluar = $post["jml_keluar"];
        $this->sisa = $post["sisa"];
        $this->ket = $post["ket"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_barang = $post["id"];
        $this->tanggal = $post["tanggal"];
        $this->ed = $post["ed"];
        $this->asal = $post["asal"];
        $this->jml_masuk = $post["jml_masuk"];
        $this->jml_keluar = $post["jml_keluar"];
        $this->sisa = $post["sisa"];
        $this->ket = $post["ket"];
        $this->db->update($this->_table, $this, array('id_barang' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_barang" => $id));
    }
}