<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EmailController extends CI_Controller {
	public function __consturct() {
		parent::__consturct();
		$this->load->helper('form');

	}

	public function justEmail() {
		if ($this->input->post()) {
			$this->load->library('form_validation');

			$this->form_validation->set_rules('first_name', 'First Name', 'required');
			$this->form_validation->set_rules('last_name', 'Last Name', 'required');
			$this->form_validation->set_rules('gender', 'Gender', 'required');
			$this->form_validation->set_rules('dob', 'Date of Birth', 'required');
			$this->form_validation->set_rules('email_id', 'Email ID', 'required');
			$this->form_validation->set_rules('location', 'Location', 'required');
			$this->form_validation->set_rules('company', 'Company', 'required');
			$this->form_validation->set_rules('designation', 'Designation', 'required');
			$this->form_validation->set_rules('experience', 'Experience', 'required');
			$this->form_validation->set_rules('annual_salary', 'Annual Salary', 'required');
		}
	}

}