<?php
$m = new Models();
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	extract($_POST);
	$msg = 0;
	if($_POST['email'] == '' || empty($_POST['email']) || strlen(trim($_POST['email']))==0){
		$msg .= "Email Required";
	}
	if($msg){
		echo $msg;
	} else{
		$arr = [
			'email'=>$_POST['email'],
			'password'=>md5($_POST['password']),
			'type'=>$type
		];
		if($type == 1){
			$results = $m->View("*", 'admin', "", $arr);
			if($results->num_rows > 0){
				while($result = $results->fetch_object()){
					$_SESSION['id'] = $result->id;
					$_SESSION['name'] = $result->name;
					$_SESSION['type'] = $result->type;
						$_SESSION['pic'] = $result->pic;
					Redirect('index.php?a=admin_dashboard');
				}
			}
		}
		if($type == 2){
			$results = $m->View("*", 'admin', "", $arr);
			if($results->num_rows > 0){
				while($result = $results->fetch_object()){
					$_SESSION['id'] = $result->id;
					$_SESSION['name'] = $result->name;
					$_SESSION['type'] = $result->type;
						$_SESSION['pic'] = $result->pic;

					Redirect('index.php?a=admin_dashboard');
				}
			}
		}
		if($type == 3){
			$results = $m->View("*", 'buyers', "", $arr);
			if($results->num_rows > 0){
				while($result = $results->fetch_object()){
					$_SESSION['id'] = $result->id;
					$_SESSION['name'] = $result->name;
					$_SESSION['type'] = $result->type;
						$_SESSION['pic'] = $result->pic;
					Redirect('index.php?buy=buyers_dashboard');
				}
			}
		}
		if($type == 4){
			$results = $m->View("*", 'freelancers', "", $arr);
			if($results->num_rows > 0){
				while($result = $results->fetch_object()){
					$_SESSION['id'] = $result->id;
					$_SESSION['name'] = $result->name;
					$_SESSION['type'] = $result->type;
						$_SESSION['pic'] = $result->pic;
					Redirect('index.php?fre=freelancer_dashboard');
				}
			}
		}
		else{
			echo "Invalid Email or Password";
		}
	}
}

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
							<select name="type">
								<option value="">Select Type</option>
								<option value="1">Super Admin</option>
								<option value="2">Admin</option>
								<option value="3">Buyers</option>
								<option value="4">Freelancers</option>

							</select>
						</div>
						<div class="input-with-icon-left">
							<i class="icon-material-baseline-mail-outline"></i>
							<input type="text" class="input-text with-border" name="email" id="email" placeholder="Email Address" required/>
						</div>
						<div class="input-with-icon-left">
							<i class="icon-material-outline-lock"></i>
							<input type="password" class="input-text with-border" name="password" id="password" placeholder="Password" required/>
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
