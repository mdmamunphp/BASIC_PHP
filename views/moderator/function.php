
<?php
if(isset($_GET['b'])){
	if (file_exists("views/front/".$_GET['b'].".php")){
		include "views/front/".$_GET['b'].".php";
		
		}else{
		include "views/front/pages-404.php";
		}

		

	}
	else{
		include "index.php";
	}


?>