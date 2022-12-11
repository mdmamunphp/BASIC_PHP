<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {

	
	public function index()
	{
		$data['title'] = 'Admin';

		$data['content'] =	$this->load->view('admin/content', '', true);

		$this->load->view('admin/master', $data, false);

	//	$this->load->view('admin/master');
	}

	

	public function donatpeopleadd() 
	{
		$data['title'] = 'donat people add';

		$data['content'] = $this->load->view('admin/donatpeopleadd', '', true);

		$this->load->view('admin/master', $data, false);
	}
	
	public function allview() 
	{
		$data['title'] = 'donat people add';

		$data['content'] = $this->load->view('admin/allview', '', true);

		$this->load->view('admin/master', $data, false);
	}

	public function blogpost() 
	{
		$data['title'] = 'dashboard';

		$data['content'] = $this->load->view('admin/blogpost', '', true);

		$this->load->view('admin/master', $data, false);
	}


	


	


}
