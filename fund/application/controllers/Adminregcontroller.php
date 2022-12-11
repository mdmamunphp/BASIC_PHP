

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminregController extends CI_Controller {


 public function donate_add_confirm()
			{
				$data['title'] = "register Confirm";

				$this->load->helper('form');

				$this->load->library('form_validation');
				

				$this->form_validation->set_rules('name', 'Full Name', 'required');
			//	$this->form_validation->set_rules('address', 'address', 'required');
			//	$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			//	$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[12]');
			//	$this->form_validation->set_rules('re_password', 'Retype Password', 'required|matches[password]');

				if ($this->form_validation->run() == FALSE)
				{
					$data['title'] = "register Confirm";
					$this->load->view('admin/donatpeopleadd', $data);

				}
				else{

					

					$this->load->helper('file');	

					$text = $this->input->post('short_description');
					
					
					$data = [

						"people_id" => $this ->input->post("people_id"),
						"amount" => $this ->input->post("amount"),
						"name" => $this ->input->post("name"),
						"designation" => $this ->input->post("designation"),
						"email" => $this ->input->post("email"),
						"contact" => $this ->input->post("contact"),
						"address" => $this ->input->post("address"),
						
						"images" => fileExtension("images")
					//	"address" => $string,

					];
				
				

					if($this->om->InsertData("donate_people", $data)){

						

						$id = $this->om->Id;
						$ext = $data['images'];
						// echo $ext;
						// print_r($data);
						// die();

						$this->load->model("custom_model");
						$folder ='donate_reg/txt';
						textFile($text, $folder, $id);

					
					
					$this->custom_model->UploadImg(
						"donate_reg/images",
						"{$id}.{$ext}",
						"images"

					);

					$this->custom_model->ResizeImg(
						"donate_reg/images/{$id}.{$ext}",
						"./images/{$id}-re.{$ext}",
						"350",
						"150"
					);
					list($width, $height) = getimagesize("donate_reg/images/{$id}.{$ext}");
					
					$x_axis =floor(($width-100)/2);
					$y_axis =floor(($height-50)/2);

					$this->custom_model->CropImg(
						"donate_reg/images/{$id}.{$ext}",
						"./donate_reg/images/{$id}-cr.{$ext}",
						"100",
						"50",
						$x_axis,
						$y_axis
					);

					$this->custom_model->WaterMark(
						"donate_reg/images/{$id}.{$ext}",
						"donate_reg/images/{$id}-w.{$ext}",
						"donate_reg/images/logo.{$ext}"
						
					);
						$text = "donate_reg/images/admin/reg/{$id}.txt"; 

						$this->session->set_flashdata('s', $text);
						$this->session->set_flashdata('success', 'save successfully');

						redirect(base_url( "admin/donatpeopleadd"), "refresh");

					
					}else{
						$this->session->set_flashdata('success', 'save successfully');
						$data['title'] = "register Confirm";
					$this->load->view('admin/donatpeopleadd', $data);

					}

				
					

					
				
				}
			}


				/**************************************** gallery add *******************************************************/

										
						public function gallery_add_confirm()
						{
							$data['title'] = "register Confirm";

							$this->load->helper('form');

							$this->load->library('form_validation');
							

							$this->form_validation->set_rules('title', 'Full Name', 'required');
						//	$this->form_validation->set_rules('address', 'address', 'required');
						//	$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
						//	$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[12]');
						//	$this->form_validation->set_rules('re_password', 'Retype Password', 'required|matches[password]');

							if ($this->form_validation->run() == FALSE)
							{
								$data['title'] = "register Confirm";
								$this->load->view('admin/donatpeopleadd', $data);

							}
							else{

								

								$this->load->helper('file');	

								$text = $this->input->post('short_description');
								
								
								$data = [

									"title" => $this ->input->post("title"),
									"img_date" => $this ->input->post("img_date"),
									"people_img" => $this ->input->post("people_img"),									
									"event_id" => $this ->input->post("event_id"),
								
									"images" => fileExtension("images"),
									"homepageimages" => fileExtension("homepageimages")
								//	"address" => $string,

								];
							
							

								if($this->om->InsertData("gallery", $data)){								

									$id = $this->om->Id;
									$ext = $data['images'];
									// echo $ext;
									// print_r($data);
									// die();

									$this->load->model("custom_model");
									$folder ='gallery/txt';
									textFile($text, $folder, $id);

								
								
								$this->custom_model->UploadImg(
									"gallery/images",
									"{$id}.{$ext}",
									"images"

								);
								$this->custom_model->UploadImg(
									"gallery/images/homepage",
									"{$id}.{$ext}",
									"homepageimages"

								);

											
				          		/********************************* gallery page  images ********************************/		
						
						$this->custom_model->Img(
							"gallery/images/{$id}.{$ext}",
							"./gallery/images/{$id}-gallerypage.{$ext}",
							"277.5",
							"300"
						);
						$this->custom_model->hoverImg(
							"gallery/images/{$id}.{$ext}",
							"./gallery/images/{$id}-gallerypagehover.{$ext}",
							"800",
							"533"
						);
	/*****************************gallery page  images end ********************************/
				
				

			                    	/*************************************home page  images ********************************/		
						
								$this->custom_model->Img(
									"gallery/images/homepage/{$id}.{$ext}",
									"./gallery/images/homepage/{$id}-homepage.{$ext}",
									"337",
									"300"
								);
								$this->custom_model->hoverImg(
									"gallery/images/homepage/{$id}.{$ext}",
									"./gallery/images/homepage/{$id}-homepagehover.{$ext}",
									"800",
									"533"
								);

						/***************************** home page  images end ********************************/	
								
									$text = "gallery/images/admin/reg/{$id}.txt"; 

									$this->session->set_flashdata('s', $text);
									$this->session->set_flashdata('success', 'save successfully');

									redirect(base_url( "admin/donatpeopleadd"), "refresh");

								
								}else{
									$this->session->set_flashdata('success', 'save successfully');
									$data['title'] = "register Confirm";
								$this->load->view('admin/donatpeopleadd', $data);

								}

							
								

								
							
							}
						}
 
 /***********************************************************gallery add end ******************************************/


							/***********************************************************************causes add ****************************************************/

							
 public function causes_add_confirm()
 {
	 $data['title'] = "register Confirm";

	 $this->load->helper('form');

	 $this->load->library('form_validation');
	 

	 $this->form_validation->set_rules('title', 'Full Name', 'required');
 //	$this->form_validation->set_rules('address', 'address', 'required');
 //	$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
 //	$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[12]');
 //	$this->form_validation->set_rules('re_password', 'Retype Password', 'required|matches[password]');

	 if ($this->form_validation->run() == FALSE)
	 {
		 $data['title'] = "register Confirm";
		 $this->load->view('admin/donatpeopleadd', $data);

	 }
	 else{

		 

		 $this->load->helper('file');	

		 $text = $this->input->post('designation');
		 
		 
		 $data = [

			 "title" => $this ->input->post("title"),
			 "amount" => $this ->input->post("amount"),			 			
			 "images" => fileExtension("images")	    	

		 ];
	 
	 
		
		 if($this->om->InsertData("causes", $data)){

			 

			 $id = $this->om->Id;
			 $ext = $data['images'];

			// echo $ext;
			
			// print_r($data);
			// die();
			 $this->load->model("custom_model");
			 $folder ='causes/txt';
			 textFile($text, $folder, $id);

		 
		 
		 $this->custom_model->UploadImg(
			 "causes/images",
			 "{$id}.{$ext}",
			 "images"

		 );

		 $this->custom_model->ResizeImg(
			 "causes/images/{$id}.{$ext}",
			 "./causes/images/{$id}-re.{$ext}",
			 "350",
			 "150"
		 );

			 $text = "causes/images/admin/reg/{$id}.txt"; 

			 $this->session->set_flashdata('s', $text);
			 $this->session->set_flashdata('success', 'save successfully');

			 redirect(base_url( "admin/donatpeopleadd"), "refresh");

		 
		 }else{
			 $this->session->set_flashdata('success', 'save successfully');
			 $data['title'] = "register Confirm";
		 $this->load->view('admin/donatpeopleadd', $data);

		 }

	 
		 

		 
	 
	 }
 }

	 /****************************************************caueses add end *************************************/
	 


	 		/*********************************************************************** events add ****************************************************/

							
 public function events_add_confirm()
 {
	 $data['title'] = "register Confirm";

	 $this->load->helper('form');

	 $this->load->library('form_validation');
	 

	 $this->form_validation->set_rules('title', 'Full Name', 'required');
 //	$this->form_validation->set_rules('address', 'address', 'required');
 //	$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
 //	$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[12]');
 //	$this->form_validation->set_rules('re_password', 'Retype Password', 'required|matches[password]');

	 if ($this->form_validation->run() == FALSE)
	 {
		 $data['title'] = "register Confirm";
		 $this->load->view('admin/donatpeopleadd', $data);

	 }
	 else{

		 

		 $this->load->helper('file');	

		 $text = $this->input->post('description');
		 
		 
		 $data = [

			 "title" => $this ->input->post("title"),
			 "date" => $this ->input->post("date"),			 			
			 "time" => $this ->input->post("time"),
			 "location" => $this ->input->post("location"),
			 "images" => fileExtension("images")	    	

		 ];
	 
	 
		
		 if($this->om->InsertData("events", $data)){

			 

			 $id = $this->om->Id;
			 $ext = $data['images'];

			// echo $ext;
			// echo $text;
		//	 print_r($data);
		//	 die();
			 $this->load->model("custom_model");
			 $folder ='events/txt';
			 textFile($text, $folder, $id);

		 
		 
		 $this->custom_model->UploadImg(
			 "events/images",
			 "{$id}.{$ext}",
			 "images"

		 );

		 $this->custom_model->ResizeImg(
			 "events/images/{$id}.{$ext}",
			 "./events/images/{$id}-re.{$ext}",
			 "350",
			 "150"
		 );

			 $text = "events/images/admin/reg/{$id}.txt"; 

			 $this->session->set_flashdata('s', $text);
			 $this->session->set_flashdata('success', 'save successfully');

			 redirect(base_url( "admin/donatpeopleadd"), "refresh");

		 
		 }else{
			 $this->session->set_flashdata('success', 'save successfully');
			 $data['title'] = "register Confirm";
		 $this->load->view('admin/donatpeopleadd', $data);

		 }

	 
		 

		 
	 
	 }
 }

	 /**************************************************** events add end *************************************/
	 


	 	/*********************************************************************** blog add ****************************************************/

							
 public function blog_add_confirm()
 {
	 $data['title'] = "register Confirm";

	 $this->load->helper('form');

	 $this->load->library('form_validation');
	 

	 $this->form_validation->set_rules('title', 'Full Name', 'required');
 //	$this->form_validation->set_rules('address', 'address', 'required');
 //	$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
 //	$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[12]');
 //	$this->form_validation->set_rules('re_password', 'Retype Password', 'required|matches[password]');

	 if ($this->form_validation->run() == FALSE)
	 {
		 $data['title'] = "register Confirm";
		 $this->load->view('admin/donatpeopleadd', $data);

	 }
	 else{

		 

		 $this->load->helper('file');	

		 $text = $this->input->post('description');
		 
		 
		 $data = [

			 "title" => $this ->input->post("title"),
			 "date" => $this ->input->post("date"),				
			 "images" => fileExtension("images")	    	

		 ];
	 
	 
		
		 if($this->om->InsertData("blog", $data)){

			 

			 $id = $this->om->Id;
			 $ext = $data['images'];

			// echo $ext;
			// echo $text;
		//	 print_r($data);
		//	 die();
			 $this->load->model("custom_model");
			 $folder ='blog/txt';
			 textFile($text, $folder, $id);

		 
		 
		 $this->custom_model->UploadImg(
			 "blog/images",
			 "{$id}.{$ext}",
			 "images"

		 );

		 $this->custom_model->ResizeImg(
			 "blog/images/{$id}.{$ext}",
			 "./blog/images/{$id}-re.{$ext}",
			 "350",
			 "150"
		 );

			 $text = "blog/images/admin/reg/{$id}.txt"; 

			 $this->session->set_flashdata('s', $text);
			 $this->session->set_flashdata('success', 'save successfully');

			 redirect(base_url( "admin/donatpeopleadd"), "refresh");

		 
		 }else{
			 $this->session->set_flashdata('success', 'save successfully');
			 $data['title'] = "register Confirm";
		 $this->load->view('admin/donatpeopleadd', $data);

		 }

	 
		 

		 
	 
	 }
 }

	 /**************************************************** blog add end *************************************/
	 
	 	 	/*********************************************************************** member add ****************************************************/

			  public function admin_add_confirm()
			  {
				  $data['title'] = "register Confirm";
	 
				  $this->load->helper('form');
	 
				  $this->load->library('form_validation');
				  
	 
				  $this->form_validation->set_rules('name', 'Full Name', 'required');
			  //	$this->form_validation->set_rules('address', 'address', 'required');
			  //	$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			  //	$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[12]');
			  //	$this->form_validation->set_rules('re_password', 'Retype Password', 'required|matches[password]');
	 
				  if ($this->form_validation->run() == FALSE)
				  {
					  $data['title'] = "register Confirm";
					  $this->load->view('admin/donatpeopleadd', $data);
	 
				  }
				  else{
	 
					  
	 
					  $this->load->helper('file');	
	 
					 // $text = $this->input->post('description');
					  
					  
					  $data = [
	 
						 
						  "name" => $this ->input->post("name"),
						  "email" => $this ->input->post("email"),
						  "password" => $this ->input->post("password"),					 
						  "designation" => $this ->input->post("designation"),					
						  "phone" => $this ->input->post("phone"),
						  "address" => $this ->input->post("address"),					 
						  "images" => fileExtension("images")
					  //	"address" => $string,
	 
					  ];
				  
				  
	 
					  if($this->om->InsertData("admin", $data)){
	 
						  
	 
						  $id = $this->om->Id;
						  $ext = $data['images'];
						  // echo $ext;
						  // print_r($data);
						  // die();
	 
						  $this->load->model("custom_model");
						 // $folder ='member/txt';
						 // textFile($text, $folder, $id);
	 
					  
					  
					  $this->custom_model->UploadImg(
						  "admin/images",
						  "{$id}.{$ext}",
						  "images"
	 
					  );
	 
					  $this->custom_model->ResizeImg(
						  "admin/images/{$id}.{$ext}",
						  ".admin/images/{$id}-re.{$ext}",
						  "350",
						  "300"
					  );
					 
	 
					 
						  $text = "admin/images/admin/reg/{$id}.txt"; 
	 
						  $this->session->set_flashdata('s', $text);
						  $this->session->set_flashdata('success', 'save successfully');
	 
						  redirect(base_url( "admin/donatpeopleadd"), "refresh");
	 
					  
					  }else{
						  $this->session->set_flashdata('success', 'save successfully');
						  $data['title'] = "register Confirm";
					  $this->load->view('admin/donatpeopleadd', $data);
	 
					  }
	 
				  
					  
	 
					  
				  
				  }
			  }
	 
	 
		  /**************************************************** admin add end *************************************/
	 	/*********************************************************************** member add ****************************************************/

		 public function member_add_confirm()
		 {
			 $data['title'] = "register Confirm";

			 $this->load->helper('form');

			 $this->load->library('form_validation');
			 

			 $this->form_validation->set_rules('name', 'Full Name', 'required');
		 //	$this->form_validation->set_rules('address', 'address', 'required');
		 //	$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		 //	$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[12]');
		 //	$this->form_validation->set_rules('re_password', 'Retype Password', 'required|matches[password]');

			 if ($this->form_validation->run() == FALSE)
			 {
				 $data['title'] = "register Confirm";
				 $this->load->view('admin/donatpeopleadd', $data);

			 }
			 else{

				 

				 $this->load->helper('file');	

				// $text = $this->input->post('description');
				 
				 
				 $data = [

					
					 "name" => $this ->input->post("name"),
					 "email" => $this ->input->post("email"),
					 "password" => $this ->input->post("password"),					 
					 "designation" => $this ->input->post("designation"),					
					 "phone" => $this ->input->post("phone"),
					 "address" => $this ->input->post("address"),					 
					 "images" => fileExtension("images")
				 //	"address" => $string,

				 ];
			 
			 

				 if($this->om->InsertData("member", $data)){

					 

					 $id = $this->om->Id;
					 $ext = $data['images'];
					 // echo $ext;
					 // print_r($data);
					 // die();

					 $this->load->model("custom_model");
					// $folder ='member/txt';
					// textFile($text, $folder, $id);

				 
				 
				 $this->custom_model->UploadImg(
					 "member/images",
					 "{$id}.{$ext}",
					 "images"

				 );

				 $this->custom_model->ResizeImg(
					 "member/images/{$id}.{$ext}",
					 ".member/images/{$id}-re.{$ext}",
					 "350",
					 "150"
				 );
				

				
					 $text = "member/images/admin/reg/{$id}.txt"; 

					 $this->session->set_flashdata('s', $text);
					 $this->session->set_flashdata('success', 'save successfully');

					 redirect(base_url( "admin/donatpeopleadd"), "refresh");

				 
				 }else{
					 $this->session->set_flashdata('success', 'save successfully');
					 $data['title'] = "register Confirm";
				 $this->load->view('admin/donatpeopleadd', $data);

				 }

			 
				 

				 
			 
			 }
		 }


	 /**************************************************** member add end *************************************/
	 

	 
	 	/***********************************************************************  Volunteer add ****************************************************/

		 public function volunteer_add_confirm()
		 {
			 $data['title'] = "register Confirm";

			 $this->load->helper('form');

			 $this->load->library('form_validation');
			 

			 $this->form_validation->set_rules('name', 'Full Name', 'required');
		 //	$this->form_validation->set_rules('address', 'address', 'required');
		 //	$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		 //	$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[12]');
		 //	$this->form_validation->set_rules('re_password', 'Retype Password', 'required|matches[password]');

			 if ($this->form_validation->run() == FALSE)
			 {
				 $data['title'] = "register Confirm";
				 $this->load->view('admin/donatpeopleadd', $data);

			 }
			 else{

				 

				 $this->load->helper('file');	

				 $text = $this->input->post('messege');
				 
				 
				 $data = [

					
					 "name" => $this ->input->post("name"),
					 "email" => $this ->input->post("email"),							
					 "phone" => $this ->input->post("phone"),
					 "address" => $this ->input->post("address"),					 
					 "images" => fileExtension("images")
				 //	"address" => $string,

				 ];
			 
			 

				 if($this->om->InsertData("volunteer", $data)){

					 

					 $id = $this->om->Id;
					 $ext = $data['images'];
					 // echo $ext;
					 // print_r($data);
					 // die();

					 $this->load->model("custom_model");
					 $folder ='volunteer/txt';
					 textFile($text, $folder, $id);

				 
				 
				 $this->custom_model->UploadImg(
					 "volunteer/images",
					 "{$id}.{$ext}",
					 "images"

				 );

				 $this->custom_model->ResizeImg(
					 "volunteer/images/{$id}.{$ext}",
					 ".volunteer/images/{$id}-re.{$ext}",
					 "350",
					 "150"
				 );
				

				
					 $text = "volunteer/images/admin/reg/{$id}.txt"; 

					 $this->session->set_flashdata('s', $text);
					 $this->session->set_flashdata('success', 'save successfully');

					 redirect(base_url( "admin/donatpeopleadd"), "refresh");

				 
				 }else{
					 $this->session->set_flashdata('success', 'save successfully');
					 $data['title'] = "register Confirm";
				 $this->load->view('admin/donatpeopleadd', $data);

				 }

			 
				 

				 
			 
			 }
		 }


 	/****************************************************  Volunteer add end *************************************/



		}
