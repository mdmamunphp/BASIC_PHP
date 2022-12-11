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

	  	$ext = checkExt('pic');
		$arr = array(
		  "name" => $_POST['name'],
			 "first_name" => "",
			 "last_name" => "",
			  "email" => $_POST['email'],
			  "password" => md5($_POST['password']),
			  "level" => "",
			  "gender" => "",
			  "country_id" => "",
			  "category_id" => "",
			  "contact" => "",
			  "address" => "",
			  "hourly_rate" => "",
			  "type" => '4',
			  'pic' => $ext


		  //'picture' => $ext
		);

		if($m->Insert('freelancers', $arr)){
			$id = $m->Id;

			if($ext){
				$pname = md5("{$id}-jani-na");
				move_uploaded_file($_FILES['pic']['tmp_name'], "views/freelancer/reg_images/{$id}.{$ext}");
							echo "Account created successfully. Please verify your email";
			}

				$abcList = "";
			if($abcList){
				foreach($abcList as $list){
					$arr = [
						'freelancer_id' => $id,
						'skill_id' => $list
					];
					$m->Insert('freelancer_skills',$arr);
				}

			}
			$results=$m->View("*", 'freelancers', "", $arr);

				while($result = $results->fetch_object()){
					$_SESSION['id'] = $result->id;
					$_SESSION['name'] = $result->name;
					$_SESSION['type'] = $result->type;
						$_SESSION['pic'] = $result->pic;
					Redirect('index.php?fre=freelancer-profile-input');
				}



		}
		else{
			echo "Email already exist";
		}


	  }
 }
?>
<!-- Spacer -->
<div id="titlebar" class="gradient">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Freeleancer Register</h2>
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
					<span>Already have an account? <a href="pages-login.html">Log In!</a></span>
				</div>
				<!-- Account Type -->

				<!-- Form -->
				      <div class="account-type">
							<div class="social-login-buttons">
								<button class="facebook-login ripple-effect"><a style="color:white;" href="index.php?f=freeleancer_reg">Freelancer</a></button>
								<button class="google-login ripple-effect"><i class="fas fa-user-tie"></i> <a style="color:white;" href="index.php?f=buyers_reg">Employer</a></button>
							</div>
						</div>
				<form  action="" method="post" enctype="multipart/form-data">
					<div class="input-with-icon-left">
								<i class="icon-material-outline-user"></i>
								<!-- NAME -->
								<input type="text" class="input-text with-border" name="name" placeholder="Enter User Name">
							</div>

									<span class="emali-status"></span>
							<div class="input-with-icon-left">

								<i class="icon-material-baseline-mail-outline"></i>
								<!-- EMAIL -->

								<input type="text" class="input-text with-border" name="email"  placeholder="Email Address" requrede/>
							</div>

							<div class="input-with-icon-left" title="Should be at least 8 characters long" data-tippy-placement="bottom">

								<i class="icon-material-outline-lock"></i>
									<!-- password -->
								<input type="text" class="input-text with-border" name="password"  placeholder="Password">
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
	</div>
</div>
