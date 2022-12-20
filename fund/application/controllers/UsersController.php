<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UsersController extends CI_Controller {

	
	public function index()
	{
		$data['title'] = 'dashboard';

		$data['content'] =	$this->load->view('users/content', '', true);

		$this->load->view('users/master', $data, false);
	}

	

	public function blogview() 
	{
		$data['title'] = 'dashboard';

		$data['content'] = $this->load->view('users/blogview', '', true);

		$this->load->view('users/master', $data, false);
	}

	public function blogpost() 
	{
		$data['title'] = 'dashboard';

		$data['content'] = $this->load->view('users/blogpost', '', true);

		$this->load->view('users/master', $data, false);
	}


	


}
