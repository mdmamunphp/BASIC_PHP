

<?php
 $m = new Models();

 $get =$_GET['id'];

?>


<div class="single-page-header freelancer-header" data-background-image="assets/images/single-freelancer.jpg">

	<div class="container">
		<div class="row">
      <?php
      if($sql = $m->View("*", "applicants", "", ['id'=> $_GET['id']])){
            while($result = $sql->fetch_object()){

              ?>
			<div class="col-md-12">

				<div class="single-page-header-inner">
					<div class="left-side">

						<div class="header-image freelancer-avatar"><img src="views/freelancer/apply_images/<?php echo $get; ?>.png" alt=""></div>
						<div class="header-details">
							<h3>company name<span></span></h3>
							<ul>
								<li><div class="star-rating" data-rating="5.0"></div></li>
								<li><img class="flag" src="assets/images/flags/de.svg" alt="">Germany</li>
								<li><div class="verified-badge-with-title">Verified</div></li>
							</ul>
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

			<!-- Page Content -->
			<div class="single-page-section">
				<h3 class="margin-bottom-25">Cover Letter</h3>
				<p>
        	<?php

					     $myfile = fopen("views/freelancer/cover_letter/{$result->id}.txt", "r") or die("Unable to open file!");
    						echo fread($myfile,filesize("views/freelancer/cover_letter/{$result->id}.txt"));
    						fclose($myfile);

        			?>
       </p>
			</div>
		</div>


		<!-- Sidebar -->
		<div class="col-xl-4 col-lg-4">
			<div class="sidebar-container">

				<!-- Profile Overview -->
				<div class="profile-overview">
					<div class="overview-item"><strong>$<?php echo $result->amount; ?></strong><span>Hourly Rate</span></div>
					<div class="overview-item"><strong><?php echo $result->delivery_time ; ?></strong><span>Delivery Time</span></div>

				</div>

				<!-- Button -->
        <a href="#small-dialog" class="apply-now-button popup-with-zoom-anim margin-bottom-50">Aproved jobs <i class="icon-material-outline-arrow-right-alt"></i></a>


				<!-- Freelancer Indicators -->
				<div class="sidebar-widget">
					<div class="freelancer-indicators">

						<!-- Indicator -->
						<div class="indicator">
							<strong>88%</strong>
							<div class="indicator-bar" data-indicator-percentage="88"><span></span></div>
							<span>Job Success</span>
						</div>

						<!-- Indicator -->
						<div class="indicator">
							<strong>100%</strong>
							<div class="indicator-bar" data-indicator-percentage="100"><span></span></div>
							<span>Recommendation</span>
						</div>

						<!-- Indicator -->
						<div class="indicator">
							<strong>90%</strong>
							<div class="indicator-bar" data-indicator-percentage="90"><span></span></div>
							<span>On Time</span>
						</div>

						<!-- Indicator -->
						<div class="indicator">
							<strong>80%</strong>
							<div class="indicator-bar" data-indicator-percentage="80"><span></span></div>
							<span>On Budget</span>
						</div>
					</div>
				</div>

				<!-- Widget -->
				<div class="sidebar-widget">
					<h3>Social Profiles</h3>
					<div class="freelancer-socials margin-top-25">
						<ul>
							<li><a href="#" title="Dribbble" data-tippy-placement="top"><i class="icon-brand-dribbble"></i></a></li>
							<li><a href="#" title="Twitter" data-tippy-placement="top"><i class="icon-brand-twitter"></i></a></li>
							<li><a href="#" title="Behance" data-tippy-placement="top"><i class="icon-brand-behance"></i></a></li>
							<li><a href="#" title="GitHub" data-tippy-placement="top"><i class="icon-brand-github"></i></a></li>

						</ul>
					</div>
				</div>

				<!-- Widget -->
				<div class="sidebar-widget">
					<h3>Skills</h3>
					<div class="task-tags">
						<span>iOS</span>
						<span>Android</span>
						<span>mobile apps</span>
						<span>design</span>
						<span>Python</span>
						<span>Flask</span>
						<span>PHP</span>
						<span>WordPress</span>
					</div>
				</div>

				<!-- Widget -->


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

<?php

}
};

 ?>
<!-- Spacer -->
<div class="margin-top-15"></div>
<!-- Spacer / End-->

<!-- Footer
