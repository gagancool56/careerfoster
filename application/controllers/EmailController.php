<?php
defined('BASEPATH') or exit('No direct script access allowed');

class EmailController extends CI_Controller
{
	public function __consturct()
	{
		parent::__construct();
		$this->load->helper('form');
	}

	public function submitcv()
	{
		if ($this->input->post()) {
			$this->load->library('form_validation');

			// echo '<pre>';
			// print_r($_FILES);
			// die;
			$this->form_validation->set_rules('firstname', 'First Name', 'required');
			$this->form_validation->set_rules('lastname', 'Last Name', 'required');
			$this->form_validation->set_rules('gender', 'Gender', 'required');
			$this->form_validation->set_rules('dob', 'Date of Birth', 'required');
			$this->form_validation->set_rules('phoneno', 'Phone no', 'required');
			$this->form_validation->set_rules('email', 'Email ID', 'required');
			$this->form_validation->set_rules('location', 'Location', 'required');
			$this->form_validation->set_rules('company', 'Company', 'required');
			$this->form_validation->set_rules('designation', 'Designation', 'required');
			$this->form_validation->set_rules('experience', 'Experience', 'required');
			$this->form_validation->set_rules('salary', 'Salary', 'required');
			$this->form_validation->set_rules('education', 'Qualification', 'required');
			$this->form_validation->set_rules('institute', 'Institute', 'required');
			$this->form_validation->set_rules('function', 'Function', 'required');
			$this->form_validation->set_rules('industry', 'Industry', 'required');
			$this->form_validation->set_rules('skills', 'Skills', 'required');

			if ($_FILES['resume']['name'] == '') {
				$this->form_validation->set_rules('resume', 'Resume', 'required');
			}

			if ($this->form_validation->run() === FALSE) {
				$this->load->view('contact');
			}
		}
	}
}
