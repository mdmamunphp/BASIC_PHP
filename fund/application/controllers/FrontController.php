<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FrontController extends CI_Controller {

	
	public function index()
	{
		$this->load->view('index');
	}

	public function about()
	{
		
			$this->load->view('front/about');

	
	}

	public function causes() 
	{
		$this->load->helper('file');
		$this->load->helper('text');
		
		$res = $this->om->view("*", "causes");
		foreach($res as $p){
			
			

			$text = base_url("causes/txt/{$p->id}.txt");

			
			

		}
		//$string = file_get_contents($text);
		$data['string'] = file_get_contents($text);
		$this->load->view('front/causes', $data , false);
	}

	public function donate()
	{
		$this->load->view('front/donate');
	}

	public function blog()
	{
		$this->load->view('front/blog');
	}

	public function gallery()
	{
		$this->load->view('front/gallery');
	}

	public function events()
	{
		$this->load->view('front/events');
	}

	public function contact()
	{
		$this->load->view('front/contact');
	}

	public function blogdetails()
	{
		$this->load->view('front/blog-details');
	}


}
