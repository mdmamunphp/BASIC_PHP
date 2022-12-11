<?php
include "../library/models.php";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$m = new Models();
	$data = array(
		'category_id' => $_POST['category_id']
	);
	$arr = array();
	$status = $m->View('*', 'skills', '', $data);
	
	if($status->num_rows > 0){
		while ($data = $status->fetch_assoc()){
			$arr[] = $data;
		}
	}
	header("Content-type:applocation.json");
	echo json_encode($arr);
	
}
die();