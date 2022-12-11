<?php
$jsList = array("register");
$m = new Models();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	  $msg = 0;
	  if ($_POST['name'] == '' || empty($_POST['name']) || strlen(trim($_POST['name'])) == 0) {
		$msg .= "Full Name Required";
	  }
	  if ($_POST['email'] == '' || empty($_POST['email']) || strlen(trim($_POST['email'])) == 0) {
		$msg .= "Full Name Required";
	  }

	  if ($msg) {
		echo $msg;
	  }
	  else {


		$arr = array(
		  "name" => $_POST['name'],
		  "email" => $_POST['email'],
		  "password" => $_POST['pass'],
		  "name" => $_POST['country']

		  //'picture' => $ext
		);



	  }
 }
?>


<!-- Spacer -->

		<div id="titlebar" class="gradient">
			<div class="container">
				<div class="row">
					<div class="col-md-12">

						<h2>Register</h2>

						<!-- Breadcrumbs -->
						<nav id="breadcrumbs" class="dark">
							<ul>
								<li><a href="#">Home</a></li>
								<li>Register</li>
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
							<h3 style="font-size: 26px;">Let's create your account!</h3>
							<span>Already have an account? <a href="index.php?f=login">Log In!</a></span>
						</div>

						<!-- Account Type -->
						<div class="account-type" style="color:blue;">
							<div class="social-login-buttons">
								<button class="facebook-login ripple-effect" style="color:blue;"><a style="color:white;" href="index.php?f=freeleancer_reg">Freelancer</a></button>
								<button class="google-login ripple-effect"><i class="fas fa-user-tie"></i> <a style="color:white;" href="index.php?f=buyers_reg"> Employer</a></button>
							</div>
						<!--	<div>
								<input type="radio" name="account-type-radio" id="freelancer-radio" class="account-type-radio" checked/>
								</i><button class="facebook-login ripple-effect"><a style="color:white;" href="index.php?f=freeleancer_reg">Freelancer</a></button>
							</div>

							<div>
								<input type="radio" name="account-type-radio" id="employer-radio" class="account-type-radio"/>
								<label for="employer-radio" class="ripple-effect-dark"><i class="icon-material-outline-business-center"></i><a style="color:white;" href="index.php?f=employer_reg"> Employer</a></label>
							</div> -->
						</div>

						<!-- Form
						<form  action="" method="post">
							<div class="input-with-icon-left">
								<i class="icon-material-outline-user"></i>
								<!-- NAME -->
								<input type="text" class="input-text with-border" name="name" placeholder="Enter Your Name">
							</div>-->
									<span class="emali-status"></span>
							<div class="input-with-icon-left">

								<i class="icon-material-baseline-mail-outline"></i>
								<!-- EMAIL -->

								<input type="text" class="input-text with-border" name="email"  placeholder="Email Address">
							</div>

							<div class="input-with-icon-left" title="Should be at least 8 characters long" data-tippy-placement="bottom">

								<i class="icon-material-outline-lock"></i>
									<!-- password -->
								<input type="text" class="input-text with-border" name="pass"  placeholder="Password">
							</div>

							<div class="input-with-icon-left" title="Should be at least 8 characters long" data-tippy-placement="bottom">
								<i class="icon-material-outline-lock"></i>
									<!-- address -->
								<input type="text" class="input-text with-border" name="country"  placeholder="country">
							</div>
							<div class="input-with-icon-left"  data-tippy-placement="bottom">
								<i class="icon-material-outline-lock"></i>
									<!-- address -->
								<input type="file" class="input-text with-border" name="pic" placeholder="image">
							</div>
					<button class="button full-width button-sliding-icon ripple-effect margin-top-10" type="submit"  name="sub">Submit <i class="icon-material-outline-arrow-right-alt"></i></button>

						</form>

						<!-- Button -->


						<!-- Social Login -->
						<div class="social-login-separator"><span>or</span></div>
						<div class="social-login-buttons">
							<button class="facebook-login ripple-effect"><i class="icon-brand-facebook-f"></i> <a href="https://www.facebook.com/login/">Register via Facebook</a></button>
							<button class="google-login ripple-effect"><i class="icon-brand-google-plus-g"></i> <a href="https://www.Gmail.com">Register via Google+<a/></button>
						</div>
					</div>

				</div>
			</div>
		</div>


		<!-- Spacer -->
		<div class="margin-top-70"></div>
		<!-- Spacer / End-->



<!-- Spacer / End-->
