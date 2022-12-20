
<?php
if(isset($_GET['a'])){
	if (file_exists("views/front/".$_GET['b'].".php")){
		include "views/front/".$_GET['b'].".php";
		
		}else{
		include "views/front/pages-404.php";
		}

		

	}
	else if(isset($_GET['mod'])){
		if (file_exists("views/moderator/".$_GET['mod'].".php")){
			include "views/moderator/".$_GET['mod'].".php";
			
			}else{
			include "views/front/pages-404.php";
			}

			

		}
		else if(isset($_GET['oh'])){
		if (file_exists("views/customer/".$_GET['oh'].".php")){
			include "views/customer/".$_GET['oh'].".php";
			
			}else{
			include "views/front/pages-404.php";
			}

			

		}
		else if(isset($_GET['b'])){
		if (file_exists("views/customer/".$_GET['b'].".php")){
			include "views/customer/".$_GET['b'].".php";
			
			}else{
			include "views/front/pages-404.php";
			}

		}
	
		else if(isset($_GET['f'])){
		if (file_exists("views/front/".$_GET['f'].".php")){
			include "views/front/".$_GET['f'].".php";
			
			}else{
			include "views/front/pages-404.php";
			}

			

		}
		else if(isset($_GET['a'])){
		if (file_exists(".$_GET['a'].".php)){
			include "".$_GET['a'].".php";
			
			}else{
			include "views/front/pages-404.php";
			}

			

		}
		
		
		else if(isset($_GET['l'])){
		if (file_exists("views/front/".$_GET['l'].".php")){
			include "views/front/".$_GET['l'].".php";
			
			}else{
			include "views/front/pages-404.php";
			}

			

		}
		else if(isset($_GET['c'])){
			
		if (file_exists("views/customer/".$_GET['c'].".php")){
			include "views/front/".$_GET['c'].".php";
			
			}
		else{
			include "views/front/pages-404.php";
			}

			

		}
		
		
	else{
		include "views/front/home.php";
	}


?>