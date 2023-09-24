<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
       $this->load->model('register_model');
       
    }

    public function index() {
        $arrData['register_detail'] = $this->register_model->get_all_register_detail();
        $this->load->view('list', $arrData);
    }

    public function add() {
        if ($this->input->post('btnadd')) {
            $arrData['first_name'] = $this->input->post('txtFname');
            $arrData['last_name'] = $this->input->post('txtLname');
            $arrData['Department'] = $this->input->post('txtDepartment');
            $arrData['email'] = $this->input->post('txtEmail');
            $arrData['joining_date'] = $this->input->post('txtjoining_date');

            $insert = $this->register_model->insert($arrData);
            if ($insert) {
                redirect('register');
            }
        }
        $this->load->view('add');
    }

    public function edit($id) {
        $arrData['register_detail'] = $this->register_model->get_id_wise_register_detail($id);

        if ($this->input->post('btnEdit')) {
            $editData['first_name'] = $this->input->post('txtFname');
            $editData['last_name'] = $this->input->post('txtLname');
            $editData['Department'] = $this->input->post('txtDepartment');
            $editData['email'] = $this->input->post('txtEmail');
            $editData['joining_date'] = $this->input->post('txtjoining_date');

            $update = $this->register_model->update($editData, $id);
            if ($update) {
                redirect('register');
            }
        }
        $this->load->view('edit', $arrData);
    }

    public function delete($id) {
        $delete = $this->register_model->delete($id);
        if ($delete) {
            redirect('register');
        }
    }

}