<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index(){

		$this->load->view('menu');
		$this->load->view('home');
		$this->load->view('footer');
	}

	public function ajuda(){

		$this->load->view('menu');
		$this->load->view('ajuda');
		$this->load->view('footer');
	}

}
