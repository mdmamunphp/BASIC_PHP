<?php
	include "views/front/header.php";
	
?>

<?php
$m = new Models();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $msg = 0;
  if ($_POST['email'] == '' || empty($_POST['email']) || strlen(trim($_POST['email'])) == 0) {
    $msg .= "Full Name Required"; 
		
  }

  if ($msg) {
    echo $msg;
  } else {
    $arr = [
      'email'=>$_POST['email'],
      'password'=>$_POST['password'],
      'type'=>$_POST['type']
    ];
    $results = $m->View("*", 'admin', "", $arr);
    if($results->num_rows > 0){
		while($res=$results->fetch_object()){
			
			$_SESSION['id'] =$res->id;
			$_SESSION['name'] =$res->name;
			$_SESSION['type'] =$res->type;
			Redirect('admin_dashboard.php');
		
		}
     echo "valid";
    }
    else{
      echo "Invalid Email or Password";
    }
  }
}

//'required|valid_email|min:10|max:20'
?>
<!-- Titlebar
================================================== -->
<div id="titlebar" class="gradient">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<h2>Log In</h2>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="#">Home</a></li>
						<li>Log In</li>
					</ul>
				</nav>

			</div>
		</div>
	</div>
</div>


<!-- Page Content
================================================== -->
<div class="container">
	<div class="row">
		<div class="col-xl-5 offset-xl-3">


			<div class="login-register-page">
				<!-- Welcome Text -->
				<div class="welcome-text">
					<h3>We're glad to see you again!</h3>
					<span>Don't have an account? <a href="register.php">Sign Up!</a></span>
				</div>
					
				<!-- Form -->
				<form method="post" action="" id="login-form">
					<div class="input-with-icon-left">
						<i class="icon-material-baseline-mail-outline"></i>
						<input type="text" class="input-text with-border" name="email" id="email" placeholder="Email Address" required/>
					</div>

					<div class="input-with-icon-left">
						<i class="icon-material-outline-lock"></i>
						<input type="password" class="input-text with-border" name="password" id="password" placeholder="Password" required/>
					</div>
				
					<div class="input-with-icon-left">
						<i class="icon-material-outline-lock"></i>
						<input type="password" class="input-text with-border" name="type" id="type" required/>
					</div>
					<a href="#" class="forgot-password">Forgot Password?</a>
				</form>
				
				<!-- Button -->
				<button class="button full-width button-sliding-icon ripple-effect margin-top-10" type="submit" form="login-form">Log In <i class="icon-material-outline-arrow-right-alt"></i></button>
				
				<!-- Social Login -->
				<div class="social-login-separator"><span>or</span></div>
				<div class="social-login-buttons">
					<button class="facebook-login ripple-effect"><i class="icon-brand-facebook-f"></i> Log In via Facebook</button>
					<button class="google-login ripple-effect"><i class="icon-brand-google-plus-g"></i> Log In via Google+</button>
				</div>
			</div>

		</div>
	</div>
</div>




		<!-- Spacer -->
		<div class="margin-top-70"></div>
		<!-- Spacer / End-->



<!-- Spacer / End-->


<?php
	include "views/front/footer.php";
?>