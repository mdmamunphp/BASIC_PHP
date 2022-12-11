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
 		$results = $m->View("*", "freelancers", "", ['id'=>$_GET['id']]);
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
 			"first_name" => $_POST['first_name'],
      	"last_name" => $_POST['last_name'],
 			"email" => $_POST['email'],
 			"password" => $_POST['password'],
 			"gender" => $_POST['gender'],
 			"country_id" => $_POST['country_id'],
 			"category_id" => $_POST['category_id'],
 			"type" => '4',
 			'pic' => $ext


		  //'picture' => $ext
 		);


 		if($m->Upd('freelancers', $arr,$_GET['id'])){


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
 				<?php
 				$results = $m->View("*", "freelancers", "", ['id'=>$_GET['id']]);
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
					<!-- Welcome Text -->


					<!-- Form -->

					<form  action="" method="post" enctype="multipart/form-data">
						<div class="input-with-icon-left">
							<i class="icon-material-outline-user"></i>
							<!-- NAME -->
							<input type="text" class="input-text with-border" name="name" value="<?php echo $data->name ?>"  placeholder="Enter Your Name">
						</div>
						<span class="emali-status"></span>
						<div class="input-with-icon-left">

							<i class="icon-material-baseline-mail-outline"></i>
							<!-- EMAIL -->

							<input type="text" class="input-text with-border" name="email" value="<?php echo $data->email ?>"   placeholder="Email Address" requrede/>
						</div>

						<div class="input-with-icon-left" title="Should be at least 8 characters long" data-tippy-placement="bottom">

							<i class="icon-material-outline-lock"></i>
							<!-- password -->
							<input type="text" class="input-text with-border" name="password" value="<?php echo $data->password ?>"   placeholder="Password">
						</div>

						<div class="input-with-icon-left">
							<select name="gender">
								<option {$selected}	value="1">male</option>
								<option value="2">female</option>
							</select>
						</div>

						<div class="input-with-icon-left">
							<select name="country_id" value="<?php echo $data->country_id ?>" id="">
								<?php
								$sql = $m->View("*","country","","");
								while($d = $sql->fetch_object()){
									echo "<option {$selected} value='{$d->id}'>{$d->name}</option>";
								};


								?>

							</select>

						</div>
						<div class="input-with-icon-left">
							<select name="category_id" value="<?php echo $data->category_id ?>" id="">
								<?php
								$sql = $m->View("*","category","","");
								while($d = $sql->fetch_object()){
									echo "<option {$selected} value='{$d->id}'>{$d->name}</option>";
								};


								?>

							</select>

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

				</div>
			</div>
		</div>
	</div>
<?php
};
?>
