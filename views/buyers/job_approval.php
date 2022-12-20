<?php
if(isset($_GET['freeid'])){

	// echo $_GET['freeid'];

	$m = new Models();
	$arr = array(

		"freelancer_id" => $_GET['freeid']
	);  

	if($m->Upd('jobs', $arr, $_SESSION['get'])){
	};
	Redirect('index.php?buy=buyers_dashboard');
}
?>
