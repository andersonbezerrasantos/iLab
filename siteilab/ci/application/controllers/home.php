<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller{

	public function index(){

		/*Carregando uma view olamundo.php*/
		$this->load->view('menu');
		$this->load->view('home');
		$this->load->view('footer');

	}

	public function calendario(){
		$this->load->view('menu');
		$this->load->view('calendario');
		$this->load->view('footer');
	}
	
	public function sobre(){
		$this->load->view('menu');
		$this->load->view('sobre');
		$this->load->view('footer');
	}

	public function ajuda(){
		$this->load->view('menu');
		$this->load->view('ajuda');
		$this->load->view('footer');
	}

	public function login(){
		$this->load->view('menu');
		$this->load->view('login');
		$this->load->view('footer');
	}

	/*calendários por área*/

	public function ciencias_exatas(){
		$this->load->view('menu');
		$this->load->view('ciencias_exatas');
		$this->load->view('footer');
	}
	public function ciencias_biologicas(){
		$this->load->view('menu');
		$this->load->view('ciencias_biologicas');
		$this->load->view('footer');
	}
	public function ciencias_humanas(){
		$this->load->view('menu');
		$this->load->view('ciencias_humanas');
		$this->load->view('footer');
	}

}