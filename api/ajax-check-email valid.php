<?php

	include '../library/model.php';


	if($_SERVER['REQUEST_METHOD']=='POST'){
		$m = new Models();
		$data = array(
		'email' => $_POST['email']
		);
		$status = $m->View('*','users','',$data);
		if($status -> num_rows > 0){

			echo "0";
		}
		else{

			echo "1";
		};

	};
	die();
