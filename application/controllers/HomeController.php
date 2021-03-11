<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller
{
	public function __construct(){
		parent::__construct();

	}

	public function index()
	{
		$this->load->view('index');
	}

	public function about_us()
	{
		$this->load->view('about');
	}
	
	public function contact_us()
	{
		$this->load->view('contact');
	}

	public function services()
	{
		$this->load->view('services');
	}

	public function industries_served()
	{
		$this->load->view('industries_served');
	}

	public function diversity_illusion()
	{
		$this->load->view('diversity_illusion');
	}

	public function contact_us()
	{
		$this->load->view('contact');
	}

	public function faq()
	{
		$this->load->view('faq');
	}
}