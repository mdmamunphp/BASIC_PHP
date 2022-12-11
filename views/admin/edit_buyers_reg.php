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
 		$results = $m->View("*", "buyers", "", ['id'=>$_GET['id']]);
 		while ($d = $results->fetch_object()) {
 			$old_ext = $d->pic;
 		}
 		if($ext){
 			if(file_exists("assets/images/{$_GET['id']}.{$old_ext}")){
 				unlink("assets/images/{$_GET['id']}.{$old_ext}");
 			}
 			move_uploaded_file($_FILES['pic']['tmp_name'], "assets/images/{$_GET['id']}.{$ext}");
 		}
 		else{
 			$ext = $old_ext;
 		};

		$arr = array(
		  "name" => $_POST['name'],
		  "email" => $_POST['email'],
		  "designation" => $_POST['designation'],
		  "password" => $_POST['pass'],

		  "type" => '3',
		  "pic" => $ext

		  //'picture' => $ext
		);

if($m->Upd('buyers', $arr,$_GET['id'])){


 		}
	  }
 }

?>


<!-- Spacer -->

		<div id="titlebar" class="gradient">
			<div class="container">
				<div class="row">
					<div class="col-md-12">

						<h2>Edit Employer Register</h2>
						<?php
 				$results = $m->View("*", "buyers", "", ['id'=>$_GET['id']]);
 				while($data = $results->fetch_object()){
 					?>

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


						<!-- Form -->
						<form  action="" method="post" enctype="multipart/form-data">
							<div class="input-with-icon-left">
								<i class="icon-material-outline-user"></i>
								<!-- NAME -->
								<input type="text" class="input-text with-border" value="<?php echo $data->name ; ?>" name="name" placeholder="Enter Your Name">
							</div>
							<div class="input-with-icon-left">
								<i class="icon-material-outline-user"></i>
								<!-- NAME -->
								<input type="text" class="input-text with-border"  value="<?php echo $data->designation ; ?>" name="designation" placeholder="Enter Your Designation">
							</div>
									<span class="emali-status"></span>
							<div class="input-with-icon-left">
								<i class="icon-material-baseline-mail-outline"></i>
								<input type="text" class="input-text with-border" value="<?php echo $data->email ; ?>"  name="email"  placeholder="Email Address">
							</div>

							<div class="input-with-icon-left" title="Should be at least 8 characters long" data-tippy-placement="bottom">

								<i class="icon-material-outline-lock"></i>
									<!-- password -->
								<input type="text" class="input-text with-border" value="<?php echo $data->password ?>" name="pass"  placeholder="Password">
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

<?php } ?>

<!-- Spacer / End-->
