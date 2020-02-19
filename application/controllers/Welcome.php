<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('templates/header');
		// $this->load->view('templates/little-top-navbar');
		$this->load->view('templates/navbar-guest');
		$this->load->view('home');
		$this->load->view('templates/footer');
	}

	public function login()
	{
		$this->load->view('templates/header');
		$this->load->view('pages/login');
		$this->load->view('templates/footer');
	}
	public function mitra()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/little-top-navbar');
		$this->load->view('templates/navbar-user');
		$this->load->view('pages/mitra');
		$this->load->view('templates/footer');
	}
}
