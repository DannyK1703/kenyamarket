<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
		$this->load->view('inc/header');
		$this->load->view('navbar');
		$this->load->view('welcome_message');
		$this->load->view('inc/footer');
	}
	public function perdiodique()
	{
		$this->load->model('emplacement');
		$data['emplacementsP']=$this->emplacement->getAttributionsVendeurs();
		$data['dates']=$this->emplacement->getDates();
		$o=0;
		foreach($data['emplacementsP'] as $emp){
			$data['nombres'][$emp->idemplacement.$emp->idcategorie.$emp->date_debut]=$this->emplacement->getNbreAttbyEmplacement($emp->idemplacement,$emp->date_debut,$emp->date_fin,$emp->idcategorie);
			$o=$o+1;
			
		}
		//var_dump($o);die();
		$this->load->view('inc/header');
		$this->load->view('navbar');
		
		$this->load->view('periodique',$data);
		$this->load->view('inc/footer');
		
	}
	public function emplacements()
	{
		$this->load->model('emplacement');
		$data['emplacements']=$this->emplacement->getAttributionsEnCours();
		
		$data['dates']=$this->emplacement->getDates();
		$this->load->view('inc/header');
		$this->load->view('navbar');
		
		$this->load->view('emplacements',$data);
		$this->load->view('inc/footer');
		
	}

	public function apropos(){
		$this->load->view('inc/header');
		$this->load->view('navbar');
		$this->load->view('apropos');
		$this->load->view('inc/footer');
	}


	
}
