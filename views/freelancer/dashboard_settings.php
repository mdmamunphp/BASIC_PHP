
<?php
include "freelancer_submenu.php";
?>

<!-- Dashboard Container -->
<?php
	$m = new Models();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 $msg = 0;
 if ($_POST['first_name'] == '' || empty($_POST['first_name']) || strlen(trim($_POST['first_name'])) == 0) {
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
		 "hourly_rate" => $_POST['hourly_rate'],
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

	<!-- Dashboard Content
	================================================== -->
	<div class="dashboard-content-container" data-simplebar>
		<div class="dashboard-content-inner" >

			<!-- Dashboard Headline -->
			<div class="dashboard-headline">
				<h3>Settings</h3>
				<?php

				if ($sql = $m->View("*", "freelancers", "", ['id' =>$_GET['id']])) {

						while($data = $sql->fetch_object()){



					?>



				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="index.php?fre=freelancer_dashboard">Dashboard</a></li>
						<li>Settings</li>
					</ul>
				</nav>
			</div>

			<!-- Row -->
			<div class="row">
					<form  action="" method="post" enctype="multipart/form-data">
				<!-- Dashboard Box -->
				<div class="col-xl-12">
					<div class="dashboard-box margin-top-0">

						<!-- Headline -->
						<div class="headline">
							<h3><i class="icon-material-outline-account-circle"></i> My Account</h3>
						</div>

						<div class="content with-padding padding-bottom-0">

							<div class="row">

								<div class="col-auto">
									<div class="avatar-wrapper" data-tippy-placement="bottom" title="Change Avatar">
										<img class="profile-pic" src="images/user-avatar-placeholder.png" alt="" />
										<div class="upload-button"></div>
										<input class="file-upload" type="file" accept="image/*"/>
									</div>
								</div>

								<div class="col">
									<div class="row">

										<div class="col-xl-6">
											<div class="submit-field">
												<h5>First Name</h5>
												<input type="text" class="with-border" name="first_name"value="<?php echo $data->first_name ; ?>">
											</div>
										</div>

										<div class="col-xl-6">
											<div class="submit-field">
												<h5>Last Name</h5>
												<input type="text" class="with-border"name="last_name" value="<?php echo $data->last_name ; ?>">
											</div>
										</div>

										<div class="col-xl-6">
											<!-- Account Type -->
											<div class="submit-field">
												<h5>Account Type</h5>
												<div class="account-type">
													<div>
														<input type="radio" value="4" name="type" id="freelancer-radio" class="account-type-radio" checked/>
														<label for="freelancer-radio" class="ripple-effect-dark"><i class="icon-material-outline-account-circle"></i> Freelancer</label>
													</div>

													<div>
														<input type="radio" value="3" name="type" id="employer-radio" class="account-type-radio"/>
														<label for="employer-radio" class="ripple-effect-dark"><i class="icon-material-outline-business-center"></i> Employer</label>
													</div>
												</div>
											</div>
										</div>

										<div class="col-xl-6">
											<div class="submit-field">
												<h5>Email</h5>
												<input type="text" name="email"class="with-border" value="<?php echo $data->email ; ?>">
											</div>
										</div>

									</div>
								</div>
							</div>

						</div>
					</div>
				</div>

				<!-- Dashboard Box -->
				<div class="col-xl-12">
					<div class="dashboard-box">

						<!-- Headline -->
						<div class="headline">
							<h3><i class="icon-material-outline-face"></i> My Profile</h3>
						</div>

						<div class="content">
							<ul class="fields-ul">
							<li>
								<div class="row">
									<div class="col-xl-4">
										<div class="submit-field">
											<div class="bidding-widget">
												<!-- Headline -->
												<span class="bidding-detail">Set your <strong>minimal hourly rate</strong></span>

												<!-- Slider -->
												<div class="bidding-value margin-bottom-10">$<span id="biddingVal"></span></div>
												<input class="bidding-slider" type="text" name="hourly_rate" value="<?php echo $data->hourly_rate ;?>" data-slider-handle="custom" data-slider-currency="$" data-slider-min="5" data-slider-max="150"data-slider-value="<?php echo $data->hourly_rate ;?>" data-slider-step="1" />
											</div>
										</div>
									</div>

									<div class="col-xl-4">
										<div class="submit-field">
											<h5>Skills <i class="help-icon" data-tippy-placement="right" title="Add up to 10 skills"></i></h5>
											<!-- Skills List -->

											<div class="keywords-container">
												<div class="keyword-input-container">

													<input type="text" name="skill_id" value="" class="keyword-input with-border" placeholder="e.g. Angular, Laravel"/>

													<button class="keyword-input-button ripple-effect"><i class="icon-material-outline-add"></i></button>
												</div>


												<div class="keywords-list">
													<span class="keyword"><span class="keyword-remove"></span><span class="keyword-text">Angular</span></span>
													<span class="keyword"><span class="keyword-remove"></span><span class="keyword-text">Vue JS</span></span>
													<span class="keyword"><span class="keyword-remove"></span><span class="keyword-text">iOS</span></span>
													<span class="keyword"><span class="keyword-remove"></span><span class="keyword-text">Android</span></span>
													<span class="keyword"><span class="keyword-remove"></span><span class="keyword-text">Laravel</span></span>
												</div>
												<div class="clearfix"></div>
											</div>
										</div>
									</div>

									<div class="col-xl-4">
										<div class="submit-field">
											<h5>Attachments</h5>

											<!-- Attachments -->
											<div class="attachments-container margin-top-0 margin-bottom-0">
												<div class="attachment-box ripple-effect">
													<span>Cover Letter</span>
													<i>PDF</i>
													<button class="remove-attachment" data-tippy-placement="top" title="Remove"></button>
												</div>
												<div class="attachment-box ripple-effect">
													<span>Contract</span>
													<i>DOCX</i>
													<button class="remove-attachment" data-tippy-placement="top" title="Remove"></button>
												</div>
											</div>
											<div class="clearfix"></div>

											<!-- Upload Button -->
											<div class="uploadButton margin-top-0">
												<input class="uploadButton-input" type="file"value="<?php echo $data->pic ; ?>" name="pic"accept="image/*, application/pdf" id="upload" multiple/>
												<label class="uploadButton-button ripple-effect" for="upload">Upload Files</label>
												<span class="uploadButton-file-name">Maximum file size: 10 MB</span>
											</div>

										</div>
									</div>
								</div>
							</li>
							<li>
							
								<div class="row">
									<div class="col-xl-6">
										<div class="submit-field">
											<h5>Tagline</h5>
											<select name="category_id" value="<?php echo $data->category_id ?>" id="">
												<?php
												$sql = $m->View("*","category","","");
												while($d = $sql->fetch_object()){
													$selected = ($d->id == $data->category_id)?" selected":"";
													echo "<option {$selected} value='{$d->id}'>{$d->name}</option>";
												};


												?>

											</select>
										</div>
										<div class="submit-field">
											<h5>Gender</h5>
											<select name="gender">
												<option value="">select gender</option>
												<option	value="1">male</option>
												<option value="2">female</option>
											</select>
										</div>

									</div>

									<div class="col-xl-6">
										<div class="submit-field">
											<h5>Nationality</h5>
											<select name="country_id" value="<?php echo $data->country_id ?>" id="">
												<?php

												$sql = $m->View("*","country","","");
												while($d = $sql->fetch_object()){
													$selected = ($d->id == $data->country_id)?" selected":"";
													echo "<option {$selected} value='{$d->id}'>{$d->name}</option>";
												};


												?>

											</select>
										</div>
									</div>

									<div class="col-xl-12">
										<div class="submit-field">
											<h5>Introduce Yourself</h5>
											<textarea cols="30" rows="5" class="with-border">Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.</textarea>
										</div>
									</div>

								</div>
							</li>
						</ul>
						</div>
					</div>
				</div>

				<!-- Dashboard Box -->
				<div class="col-xl-12">
					<div id="test1" class="dashboard-box">

						<!-- Headline -->
						<div class="headline">
							<h3><i class="icon-material-outline-lock"></i> Password & Security</h3>
						</div>

						<div class="content with-padding">
							<div class="row">
								<div class="col-xl-4">
									<div class="submit-field">
										<h5>Current Password</h5>
										<input type="text" value="<?php echo $data->password ; ?>" class="with-border">
									</div>
								</div>

								<div class="col-xl-4">
									<div class="submit-field">
										<h5>New Password</h5>
										<input type="text" name ="password" value="<?php echo $data->password ; ?>" placeholder="new password"class="with-border">
									</div>
								</div>



								<div class="col-xl-12">
									<div class="checkbox">
										<input type="checkbox" id="two-step" checked>
										<label for="two-step"><span class="checkbox-icon"></span> Enable Two-Step Verification via Email</label>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Button -->
				<div class="col-xl-12">
					<button type="submit" class="button ripple-effect big margin-top-30">Save Changes</button>
				</div>
</form>
			</div>

			<!-- Row / End -->
			<?php
		};

			};
			?>
			<!-- Footer -->
			<div class="dashboard-footer-spacer"></div>
			<div class="small-footer margin-top-15">
				<div class="small-footer-copyrights">
					© 2019 <strong>Hireo</strong>. All Rights Reserved.
				</div>
				<ul class="footer-social-links">
					<li>
						<a href="#" title="Facebook" data-tippy-placement="top">
							<i class="icon-brand-facebook-f"></i>
						</a>
					</li>
					<li>
						<a href="#" title="Twitter" data-tippy-placement="top">
							<i class="icon-brand-twitter"></i>
						</a>
					</li>
					<li>
						<a href="#" title="Google Plus" data-tippy-placement="top">
							<i class="icon-brand-google-plus-g"></i>
						</a>
					</li>
					<li>
						<a href="#" title="LinkedIn" data-tippy-placement="top">
							<i class="icon-brand-linkedin-in"></i>
						</a>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<!-- Footer / End -->

		</div>
	</div>
	<!-- Dashboard Content / End -->

</div>
<!-- Dashboard Container / End -->


<!-- Wrapper / End -->


<!-- Scripts
================================================== -->
