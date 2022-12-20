
<?php
include "freelancer_submenu.php";
?>

<!-- Dashboard Container -->


	<!-- Dashboard Content
	================================================== -->
	<div class="dashboard-content-container" data-simplebar>
		<div class="dashboard-content-inner" >

			<!-- Dashboard Headline -->
			<div class="dashboard-headline">
				<h3>My Active Bids</h3>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Dashboard</a></li>
						<li>My Active Bids</li>
					</ul>
				</nav>
			</div>

			<!-- Row -->
			<div class="row">

				<!-- Dashboard Box -->
				<div class="col-xl-12">
					<div class="dashboard-box margin-top-0">

						<!-- Headline -->
						<div class="headline">
							<h3><i class="icon-material-outline-gavel"></i> Bids List</h3>
						</div>
						<?php
						$m = new Models();
					 $results = $m->DBRaw("select * from applicants where applicants.freelancer_id ='{$_GET['id']}' order by id desc limit 4");

					 //  $results = $m->DBRaw("select applicants.*,(SELECT jobs.id,jobs.title from jobs where applicants.jobs_id = jobs.id GROUP by jobs.title)
					 //  from applicants where applicants.freelancer_id ='{$_GET['id']}'
					 // order by applicants.id asc limit 4 ");
						// $rel = [
						//   'applicants.job_id' => 'jobs.id',
						//   'applicants.freelancer_id' => $_GET['id']
						// ];
						// $select = "applicants.* , jobs.title as tname, jobs.location";
						// $table = "applicants, jobs, freelancers";
						// if($results = $m->View($select, $table, "", $rel)){
						while ($value = $results->fetch_object()){
							$id = $value->id ;

						?>
						<div class="content">
							<ul class="dashboard-box-list">
								<li>
									<!-- Job Listing -->
									<div class="job-listing width-adjustment">

										<!-- Job Listing Details -->
										<div class="job-listing-details">

											<!-- Details -->
											<div class="job-listing-description">
												<h3 class="job-listing-title"><a href="index.php?fre=freelancer_apply_details&id=<?php echo $value->id ;?>">WordPress Guru Needed</a></h3>
											</div>
										</div>
									</div>

									<!-- Task Details -->
									<ul class="dashboard-task-info">
										<li><strong>$<?php echo $value->amount ; ?></strong><span>Hourly Rate</span></li>
										<li><strong><?php echo $value->delivery_time ; ?></strong><span>Delivery Time</span></li>
									</ul>

									<!-- Buttons -->
									<div class="buttons-to-right always-visible">
										<a href="#small-dialog" class="popup-with-zoom-anim button dark ripple-effect ico" title="Edit Bid" data-tippy-placement="top"><i class="icon-feather-edit"></i></a>
										<a href="index.php?fre=delete_active_bids&id=<?php echo $value->id ; ?>" class="button red ripple-effect ico" title="Cancel Bid" data-tippy-placement="top"><i class="icon-feather-trash-2"></i></a>
									</div>
								</li>



							</ul>
						</div>
						<?php
						}

						 ?>
					</div>
				</div>

			</div>
			<!-- Row / End -->

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

</div>
<!-- Wrapper / End -->

<!-- Edit Bid Popup
================================================== -->

<!-- Edit Bid Popup / End -->

<!-- Scripts
================================================== -->
