<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paket extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("paket_model");
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data["paket"] = $this->paket_model->getAll();
		$this->load->view("admin/paket/list", $data);
	}

	public function add()
	{
		$paket = $this->paket_model;
		$validation = $this->form_validation;
		$validation->set_rules($paket->rules());

		if ($validation->run()) {
			$paket->save();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
		}

		$this->load->view("admin/paket/new_form");
	}

	public function edit($id = null)
	{
		if (!isset($id)) redirect('admin/paket');

		$paket = $this->paket_model;
		$validation = $this->form_validation;
		$validation->set_rules($paket->rules());

		if ($validation->run()) {
			$paket->update();
			$this->session->set_flashdata('success', 'Berhasil diubah');
		}

		$data["paket"] = $paket->getById($id);
		if (!$data["paket"]) show_404();

		$this->load->view("admin/paket/edit_form", $data);
	}

	public function delete($id = null)
	{
		if (!isset($id)) show_404();

		if ($this->paket_model->delete($id)) {
			redirect(site_url('admin/paket'));
		}
	}
}