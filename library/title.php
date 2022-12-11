<?php
if(isset($_GET['f'])){
	if($_GET['f'] =='home'){
		echo "Welcome our Website";
	}
	else if($_GET['f']=='about'){
		echo "About Us";
	}
	else if($_GET['f']=='blog'){
		echo "Blog";
	}
	else if($_GET['f']=='register'){
		echo "Sign Up";
	}
	else if($_GET['f']=='login'){
		echo "Login";
	}
	else if($_GET['f']=='freeleancer_reg'){
		echo "Freeleancer SignUp";
	}
	else if($_GET['f']=='buyers_reg'){
		echo "Employer SignUp";
	}
	else{
		echo "404! Page not Found";
	}
}

else if(isset($_GET['a'])){
	if($_GET['a'] == 'admin_dashboard'){
		echo " superadmin";
	}else if($_GET['a']=='category'){
		echo "category";
	}
	else if($_GET['a']=='view_admin'){
		echo "view admin";
	}
	else if($_GET['a']=='view_category'){
		echo "view category";
	}
	else if($_GET['a']=='country'){
		echo "country";
	}
	else if($_GET['a']=='view_country'){
		echo "view country";
	}
	else if($_GET['a']=='skills'){
		echo "skills";
	}
	else if($_GET['a']=='view_skills'){
		echo "view skills";
	}
	else if($_GET['a']=='payment_method'){
		echo "payment_method";
	}
	else if($_GET['a']=='view_payment_method'){
		echo "view payment_method";
	}
	else if($_GET['a']=='view_buyers'){
		echo "view buyers";
	}
	else if($_GET['a']=='view_freeleancer'){
		echo "view freeleancer";
	}
	else if($_GET['a']=='edit_freeleancer'){
		echo "edit freeleancer";
	}
	else{
		echo "404! Page not Found";
	}
}

else if(isset($_GET['fre'])){
  	if($_GET['fre'] =='freelancer_dashboard'){
		echo "freelancer";
	}
	else{
		echo "404! Page not Found";
	}
}

else{
	echo "Upwork";
}




?>
