<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Apotek extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Apotek_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["apotek"] = $this->Apotek_model->getAll();
        $this->load->view("admin/apotek/list", $data);
    }

    public function add()
    {
        $apotek = $this->Apotek_model;
        $validation = $this->form_validation;
        $validation->set_rules($apotek->rules());

        if ($validation->run()) {
            $apotek->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/apotek/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/apotek');
       
        $apotek = $this->Apotek_model;
        $validation = $this->form_validation;
        $validation->set_rules($apotek->rules());

        if ($validation->run()) {
            $apotek->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["apotek"] = $apotek->getById($id);
        if (!$data["apotek"]) show_404();
        
        $this->load->view("admin/apotek/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->Apotek_model->delete($id)) {
            redirect(site_url('admin/apotek'));
        }
    }
}