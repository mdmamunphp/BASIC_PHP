<?php
include "admin_submenu.php";
?>
<div class="dashboard-content-container"data-simplebar>
	<div class="dashboard-content-inner" >
		<div class="dashboard-box margin-top-0">
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
			} else {
				$arr = array(
				"name" => $_POST['name'],
				"email" => $_POST['email'],
				"password" => $_POST['pass'],
				"type" => '2'
			
				//'picture' => $ext
				);
				
				$m->Insert('admin',$arr);			
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
								<li><a href="#">Admin</a></li>
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
						<form  action="" method="post">
							<div class="input-with-icon-left">
								<i class="icon-material-outline-user"></i>
								<!-- NAME -->
								<input type="text" class="input-text with-border" name="name" placeholder="Enter Your Name">
							</div>
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
							
							
							<div class="input-with-icon-left"  data-tippy-placement="bottom">
								<i class="icon-material-outline-lock"></i>
								<!-- address -->
								<input type="file" class="input-text with-border" name="pic" placeholder="image">
							</div>
							<button class="button full-width button-sliding-icon ripple-effect margin-top-10" type="submit"  name="sub">Register <i class="icon-material-outline-arrow-right-alt"></i></button>
							
						</form>
						
						<!-- Button -->
						
						
						<!-- Social Login -->
						<div class="social-login-separator"><span>or</span></div>
						<div class="social-login-buttons">
							<button class="facebook-login ripple-effect"><i class="icon-brand-facebook-f"></i> Register via Facebook</button>
							<button class="google-login ripple-effect"><i class="icon-brand-google-plus-g"></i> Register via Google+</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
		<!-- Spacer -->
	</div>
</div>
<!-- Spacer / End-->
<!-- Spacer / End-->