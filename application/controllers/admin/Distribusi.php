<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Distribusi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Distribusi_model");
        $this->load->model("Barang_model");
        $this->load->model("Pegawai_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["distribusi"] = $this->Distribusi_model->getAll();
        $data["kodebarang"] = $this->Barang_model->getAll();
        $data["idpegawai"] = $this->Pegawai_model->getAll();
        $this->load->view("admin/distribusi/list", $data);
        
    }

    public function add()
    {
        $data["distribusi"] = $this->Distribusi_model->getAll();
        $data["kodebarang"] = $this->Barang_model->getAll();
        $data["idpegawai"] = $this->Pegawai_model->getAll();
        
        
        $distribusi = $this->Distribusi_model;
        $validation = $this->form_validation;
        $validation->set_rules($distribusi->rules());

        if ($validation->run()) {
            $distribusi->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        
        $this->load->view("admin/distribusi/new_form", $data);
        
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/distribusi');
        
        $data["distribusi"] = $this->Distribusi_model->getAll();
        $data["kodebarang"] = $this->Barang_model->getAll();
        $data["idpegawai"] = $this->Pegawai_model->getAll();
        $distribusi = $this->Distribusi_model;
        $validation = $this->form_validation;
        $validation->set_rules($distribusi->rules());

        if ($validation->run()) {
            $distribusi->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["distribusi"] = $distribusi->getById($id);
        if (!$data["distribusi"]) show_404();
        
        $this->load->view("admin/distribusi/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->Distribusi_model->delete($id)) {
            redirect(site_url('admin/distribusi'));
        }
    }
}