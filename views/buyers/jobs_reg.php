<?php
$jsList = array("register");
$m = new Models();
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	extract($_POST);

		$ext = checkExt('pic');

	$arr = array(
		"title" => $_POST['title'],
		//"description" => $_POST['description'],
		"job_type" => $_POST['job_type'],
		"buyer_id" => $_SESSION['id'],
		"category_id" => $_POST['category_id'],
		"location" => $_POST['location'],
		"min_rate" => $_POST['min_rate'],
		"max_rate" => $_POST['max_rate'],
		"pic" => $ext
	);

	if ($m->Insert('jobs',$arr)) {
		$Id = $m->Id;
		if($ext){
				$pname = md5("{$Id}-jani-na");
				move_uploaded_file($_FILES['pic']['tmp_name'], "views/buyers/images/{$pname}.{$ext}");
			}
		$abcList = $_POST['skill_id'];

		$file = fopen("views/buyers/Buyer_txt_file/{$Id}.txt", "w") or die("file not open");
		fwrite($file, $_POST['description']) or die();
		fclose($file);


		if($abcList){
			foreach($abcList as $list){
				$arr = [
					'job_id' => $Id,
					'skill_id' => $list
				];
				$m->Insert('jobs_skills',$arr);
			}

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
					<h3>Post a Job</h3>

					<!-- Breadcrumbs -->
					<nav id="breadcrumbs" class="dark">
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="#">Dashboard</a></li>
							<li>Post a Job</li>
						</ul>
					</nav>
				</div>

				<!-- Row -->
				<form  action="" method="post" enctype="multipart/form-data">
					<div class="row">

						<!-- Dashboard Box -->
						<div class="col-xl-12">
							<div class="dashboard-box margin-top-0">

								<!-- Headline -->
								<div class="headline">
									<h3><i class="icon-feather-folder-plus"></i> Job Submission Form</h3>
								</div>

								<div class="content with-padding padding-bottom-10">
									<div class="row">

										<div class="col-xl-4">
											<div class="submit-field">
												<h5>Job Title</h5>
												<input type="text"  name="title"  class="with-border">
											</div>
										</div>

										<div class="col-xl-4">
											<div class="submit-field">
												<h5>Job Type</h5>
												<select name="job_type" class="selectpicker with-border" data-size="7" title="Select Job Type">
													<option value="1">Full Time</option>
													<option value="2">Freelance</option>
													<option value="3">Part Time</option>
													<option value="4">Internship</option>
													<option value="5">Temporary</option>
												</select>
											</div>
										</div>

										<div class="col-xl-4">
											<div class="submit-field">
												<h5>Job Category</h5>
												<select name="category_id" id="" class="selectpicker with-border" data-size="7" title="Select Category">

													<?php
													$sql = $m->View("*","category","","");
													while($d = $sql->fetch_object()){
														echo "<option value='{$d->id}'>{$d->name}</option>";
													};


													?>
												</select>
											</div>
										</div>

										<div class="col-xl-4">
											<div class="submit-field">
												<h5>Location</h5>
												<div class="input-with-icon">
													<div id="autocomplete-container">
														<input  class="with-border" name="location"type="text" placeholder="Type Address">
													</div>
													<i class="icon-material-outline-location-on"></i>
												</div>
											</div>
										</div>

										<div class="col-xl-4">
											<div class="submit-field">
												<h5>Salary</h5>
												<div class="row">
													<div class="col-xl-6">
														<div class="input-with-icon">
															<input class="with-border" type="text" name="min_rate" placeholder="Min">
															<i class="currency">USD</i>
														</div>
													</div>
													<div class="col-xl-6">
														<div class="input-with-icon">
															<input class="with-border" type="text" name="max_rate"placeholder="Max">
															<i class="currency">USD</i>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="col-xl-4">
											<div class="submit-field">
												<h5>Tags <span>(skills)</span>  <i class="help-icon" data-tippy-placement="right"></i></h5>
												<div class="keywords-container">
													<div class="keyword-input-container">
														<select class="test" name="skill_id[]" id="test" multiple="multiple">

															<option value=''>Choose skills Frist</option>;
															<?php
															$sql = $m->View("*","skills","","");
															while($d = $sql->fetch_object()){
																echo "<option value='{$d->id}'>{$d->name}</option>";
															};


															?>

														</select>
													</div>
													<div class="keywords-list"><!-- keywords go here --></div>
													<div class="clearfix"></div>
												</div>

											</div>
										</div>

										<div class="col-xl-12">
											<div class="submit-field">
												<h5>Job Description</h5>
												<textarea cols="30" rows="5" name="description" class="with-border"></textarea>
												<div class="uploadButton margin-top-30">
													<input class="uploadButton-input" type="file" name="pic" accept="image/*, application/pdf" id="upload" multiple/>
													<label class="uploadButton-button ripple-effect" for="upload">Upload Files</label>
													<span class="uploadButton-file-name">Images or documents that might be helpful in describing your job</span>
												</div>
											</div>
										</div>

									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-12">
							<button type="submit" class="button ripple-effect big margin-top-30"><i class="icon-feather-plus"></i> Post a Job</button>
						</div>

					</div>
				</form>
				<!-- Row / End -->
