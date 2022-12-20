

<?php
if($_SERVER['REQUEST_METHOD']==$_GET['id'])

	echo $_GET['id'];
	$arr = array(

		'id' => $_GET['id'],

	);

$m = new Models();

if($m->deleted('admin', $arr)){

	Redirect('index.php?a=view_admin');

}


?>




