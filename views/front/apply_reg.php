<?php
$jsList = array("register");
$m = new Models();
$get=$_GET['id'];
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	extract($_POST);

		$ext = checkExt('pic');

	$arr = array(
		"job_id" => $get,
		"freelancer_id" => $_SESSION['id'],
		"delivery_time" => $_POST['delivery_time'],
		"amount" => $_POST['amount'],
		"pic" => $ext
	);

	if ($m->Insert('applicants',$arr)) {
		$Id = $m->Id;
		if($ext){
				//$pname = md5("{$Id}-jani-na");
				move_uploaded_file($_FILES['pic']['tmp_name'], "views/freelancer/apply_images/{$Id}.{$ext}");
			}
			if(isset($_POST['cover_letter'])){
				$file = fopen("views/freelancer/cover_letter/{$Id}.txt", "w") or die("file not open");
		fwrite($file, $_POST['cover_letter']) or die();
		fclose($file);
			}

			Redirect('index.php?f=home');
	}


}
?>

	<!-- Dashboard Content
		================================================== -->
