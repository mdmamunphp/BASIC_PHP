<?php
$m = new Models();
extract($_POST);
if($res = $m->View("*","jobs","",['id'=> $_GET['id']])){
while($data = $res->fetch_object()){
?>
<!-- Titlebar
================================================== -->
<div class="single-page-header" data-background-image="images/single-job.jpg">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="single-page-header-inner">
					<div class="left-side">
						<div class="header-image"><a href="single-company-profile.html"><img src="views/buyers/images/<?php echo $_GET['id'];?>.jpeg" alt=''></a></div>
						<div class="header-details">
							<?php
							echo "<h3>{$data->title}</h3>";
							?>
							</h3>
							<h5>About the Employer</h5>
							<ul>
								<li><a href="single-company-profile.html"><i class="icon-material-outline-business"></i> King</a></li>
								<li><div class="star-rating" data-rating="4.9"></div></li>
								<li><img class="flag" src="images/flags/gb.svg" alt=""> <?php echo $data->location ;?></li>
								<li><div class="verified-badge-with-title">Verified</div></li>
							</ul>
						</div>
					</div>
					<div class="right-side">
						<div class="salary-box">
							<div class="salary-type">Salary</div>
							<div class="salary-amount"><?php echo  $data->min_rate ;?>-<?php echo $data->max_rate ;?></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Page Content
================================================== -->
<div class="container">
	<div class="row">
		<!-- Content -->
		<div class="col-xl-8 col-lg-8 content-right-offset">
			<div class="single-page-section">
				<h3 class="margin-bottom-25"><?php echo $data-> title ;?></h3>
				<p>
					<?php
					$myfile = fopen("views/buyers/Buyer_txt_file/{$data->id}.txt", "r") or die("Unable to open file!");
					echo fread($myfile,filesize("views/buyers/Buyer_txt_file/{$data->id}.txt"));
					fclose($myfile);
					?>
					<p>
					</div>
	

					


					<!-- <div class="single-page-section">
						<h3 class="margin-bottom-30">Location</h3>
						<div id="single-job-map-container">
							<div id="singleListingMap" data-latitude="51.507717" data-longitude="-0.131095" data-map-icon="im im-icon-Hamburger">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.7017977391797!2d90.46154106429711!3d23.758011094403987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b7e3e869c29b%3A0xf3c9838029442d17!2sKhilgaon!5e0!3m2!1sen!2sbd!4v1577272339183!5m2!1sen!2sbd" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
							</div>
						</div>
					</div> -->
					<div class="single-page-section">
					
						<!-- Listings Container -->
						
					</div>
				</div>
				<!-- Sidebar -->
				<div class="col-xl-4 col-lg-4">
					<div class="sidebar-container">
						<!-- <a href="#small-dialog" class="apply-now-button popup-with-zoom-anim">Apply Now <i class="icon-material-outline-arrow-right-alt"></i></a> -->
						<!-- Sidebar Widget -->
						<div class="sidebar-widget">
							<div class="job-overview">
								<div class="job-overview-headline">Job Summary</div>
								<div class="job-overview-inner">
									<ul>
										<li>
											<i class="icon-material-outline-location-on"></i>
											<span>Location</span>
											<h5><?php echo $data->location ?></h5>
										</li>
										<li>
											<i class="icon-material-outline-business-center"></i>
											<span>Job Type</span>
											<h5><?php echo $data->job_type ?></h5>
										</li>
										<li>
											<i class="icon-material-outline-business-center"></i>
											<span>Catagory</span>
											<?php
											$arr = [
											'jobs.id'=>$_GET['id'],
											'category.id '=> "jobs.category_id"
											];
											$Select ="jobs.*,category.name caname";
											$table = 'jobs,category';
											if ($sql = $m->View($Select, $table, "", "", $arr)) {
											while($result = $sql->fetch_object()){
											echo $result->caname;
											}
											}
											?>
											<!-- <h5><?php echo $data->job_type ?></h5> -->
										</li>
										<li>
											<i class="icon-material-outline-local-atm"></i>
											<span>Salary</span>
											<h5><?php echo $data->min_rate ;?>-<?php echo $data->max_rate ;?></h5>
										</li>
										<li>
											<i class="icon-material-outline-assets-time"></i>
											<span>Date Posted</span>
											<h5><?php echo $data->date ;?></h5>
										</li>
										<li>
											<i class="icon-material-outline-assets-time"></i>
											<span>Exit date</span>
											<h5><?php
											$postdate ='$data->date';
											$date = strtotime($postdate);
											echo $date;
											// date_add($date, date_interval_create_from_date_string('1 year 35 days'));
											// echo date_format($date, 'Y-m-d');
											?></h5>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- Sidebar Widget -->
						<div class="sidebar-widget">
							<h3>Bookmark or Share</h3>
							<!-- Bookmark Button -->
							<button class="bookmark-button margin-bottom-25">
							<span class="bookmark-icon"></span>
							<span class="bookmark-text">Bookmark</span>
							<span class="bookmarked-text">Bookmarked</span>
							</button>
							<!-- Copy URL -->
							<div class="copy-url">
								<input id="copy-url" type="text" value="" class="with-border">
								<button class="copy-url-button ripple-effect" data-clipboard-target="#copy-url" title="Copy to Clipboard" data-tippy-placement="top"><i class="icon-material-outline-file-copy"></i></button>
							</div>
							<!-- Share Buttons -->
							<div class="share-buttons margin-top-25">
								<div class="share-buttons-trigger"><i class="icon-feather-share-2"></i></div>
								<div class="share-buttons-content">
									<span>Interesting? <strong>Share It!</strong></span>
									<ul class="share-buttons-icons">
										<li><a href="#" data-button-color="#3b5998" title="Share on Facebook" data-tippy-placement="top"><i class="icon-brand-facebook-f"></i></a></li>
										<li><a href="#" data-button-color="#1da1f2" title="Share on Twitter" data-tippy-placement="top"><i class="icon-brand-twitter"></i></a></li>
										<li><a href="#" data-button-color="#dd4b39" title="Share on Google Plus" data-tippy-placement="top"><i class="icon-brand-google-plus-g"></i></a></li>
										<li><a href="#" data-button-color="#0077b5" title="Share on LinkedIn" data-tippy-placement="top"><i class="icon-brand-linkedin-in"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Apply for a job popup
		================================================== -->
		<div id="small-dialog" class="zoom-anim-dialog mfp-hide dialog-with-tabs">
			<!--Tabs -->
			<div class="sign-in-form">
				<ul class="popup-tabs-nav">
					<li><a href="#tab">Apply Now</a></li>
				</ul>
				<div class="popup-tabs-container">
					<!-- Tab -->
					<div class="popup-tab-content" id="tab">
						<!-- Welcome Text -->
						<div class="welcome-text">
							<h3>Attach File With CV</h3>
						</div>
						<form method="post" id="apply-now-form" action="index.php?f=apply_reg&id=<?php echo $value->id;?>" enctype="multipart/form-data">
							<div class="input-with-icon-left">
								<label  for="cover_letter">	Cover Letter</label>
								<textarea cols="10" rows="2" id="cover_letter"name="cover_letter" class="with-border"></textarea>
							</div>
							<div class="input-with-icon-left mb-3">
								<label  for="date">Delivery date</label>
								<input type="date" id="date" name="delivery_time"class="form-control" />
							</div>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text">$</span>
								</div>
								<input type="text" class="form-control" name="amount" aria-label="Amount (to the nearest dollar)">
								<div class="input-group-append">
									<span class="input-group-text">.00</span>
								</div>
							</div>
							<div class="uploadButton">
								<input class="uploadButton-input" type="file" name="pic" accept="image/*, application/pdf" id="upload-cv" />
								<label class="uploadButton-button ripple-effect" for="upload-cv">Select File</label>
								<span class="uploadButton-file-name">Upload your CV / resume relevant file. <br> Max. file size: 50 MB.</span>
							</div>
						</form>
						<button class="button margin-top-35 full-width button-sliding-icon " type="submit" form="apply-now-form">Apply Now </button>
						<!-- Button -->
					</div>
					<!-- Apply for a job popup / End -->
					<?php
					};
					};
					?>
				</div>
			</div>
		</div>
		<div class="boxed-list-item">


</div>