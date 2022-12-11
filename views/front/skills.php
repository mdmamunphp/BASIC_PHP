<?php
$jsList = array("register");
$m = new Models();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	 
	


		$arr = array(
		  "name" => $_POST['name']
		 
	
		  //'picture' => $ext
		);  
		
		$m->Insert('skills',$arr);
	
	  
	  
 }
?>


<!-- Spacer -->

		<div id="titlebar" class="gradient">
			<div class="container">
				<div class="row">
					<div class="col-md-12">

						<h2>Add Skill</h2>

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
						

						<!-- Account Type -->
						
							
						<!-- Form -->
						<form  action="" method="post">
							<div class="input-with-icon-left">
								<i class="icon-material-outline-user"></i>
								<!-- NAME -->
								<input type="text" class="input-text with-border" name="name" placeholder="Enter Skill">
							</div>
							
							
							
					
						
					<button class="button full-width button-sliding-icon ripple-effect margin-top-10" type="submit"  name="sub">submit <i class="icon-material-outline-arrow-right-alt"></i></button>
						
						</form>
						
						<!-- Button -->
						
						
						<!-- Social Login -->
					
					</div>

				</div>
			</div>
		</div>


		<!-- Spacer -->
		<div class="margin-top-70"></div>
		<!-- Spacer / End-->



<!-- Spacer / End-->

