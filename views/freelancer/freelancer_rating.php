<?php
if(isset($_GET['id'])){

	// echo $_GET['freeid'];

	$m = new Models();
	$arr = array(

		"freelancer_id" => $_GET['id']
	);

	if($m->Upd('jobs', $arr, $_SESSION['get'])){
	};
	Redirect('index.php?buy=buyers_dashboard');
}
?>
