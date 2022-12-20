
    <?php
	
		if($_SERVER['REQUEST_METHOD']= 'GET'){
		$sql = $_GET['id'];
		$m = new Models();
	    $m->deleted('buyers',$sql );
			}
			Redirect('index.php?a=view_buyers');
    ?>


