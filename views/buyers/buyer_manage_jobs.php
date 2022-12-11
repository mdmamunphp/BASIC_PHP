
<?php
if(isset($_SESSION['id'])){

	$id = $_SESSION['id'];

	?>

<div class="dashboard-container">


<?php include'buyers_submenu.php'; ?>
	<div class="dashboard-content-container" data-simplebar>
		<div class="dashboard-content-inner" >
			
			<!-- Dashboard Headline -->
			<div class="dashboard-headline">
				<h3>Manage Jobs</h3>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Dashboard</a></li>
						<li>Manage Jobs</li>
					</ul>
				</nav>
			</div>
	
			<!-- Row -->
			<div class="row">

				<!-- Dashboard Box -->
				<div class="col-xl-12">
					<div class="dashboard-box margin-top-0">
						<div class="row">

					<!-- Dashboard Box -->
					<div class="col-xl-12">
						<div class="dashboard-box margin-top-0">

							
							<div class="headline">
								<h3><i class="icon-material-outline-business-center"></i> My Job Listings</h3>
							</div>
							<?php
							$m = new Models();
							// $get = $_GET['id'];
							if($sql = $m->View("*", "jobs", "", ['buyer_id'=>$_GET['id']])){
								while($value =$sql->fetch_object()){

									?>
									<div class="content">
										<ul class="dashboard-box-list">
											<li>
												<!-- Job Listing -->
												<div class="job-listing">

													<!-- Job Listing Details -->
													<div class="job-listing-details">

														<!-- Logo -->
<!-- 											<a href="#" class="job-listing-company-logo">
												<img src="images/company-logo-05.png" alt="">
											</a> -->

											<!-- Details -->
											<div class="job-listing-description">
												<h3 class="job-listing-title"><a href=""><?php echo $value->title ?></a> <span class="dashboard-status-button green">Pending Approval</span></h3>

												<!-- Job Listing Footer -->
												<div class="job-listing-footer">
													<ul>
														<li><i class="icon-material-outline-date-range"></i> Posted on 10 July, 2019</li>
														<li><i class="icon-material-outline-date-range"></i> Expiring on 10 August, 2019</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="buttons-to-right always-visible">
										<a href="index.php?buy=manage-candidates&id=<?php echo $value->id;
												// session_start();
										?>" class="button ripple-effect"><i class="icon-material-outline-supervisor-account"></i> Manage Candidates <span class="button-info">
											
											<?php
											$asd = $value->id;
											$query = "SELECT COUNT(*) as total FROM applicants WHERE Job_id= {$asd}";
														// echo $query;
											$result = $m->DBRaw($query);
											while ($v = $result->fetch_object()){
												echo $v->total;
											}
											?>



										</span></a>
										<a href="#" class="button gray ripple-effect ico" title="Edit" data-tippy-placement="top"><i class="icon-feather-edit"></i></a>
										<a href="#" class="button gray ripple-effect ico" title="Remove" data-tippy-placement="top"><i class="icon-feather-trash-2"></i></a>
									</div>
								</li>
							</ul>
						</div>
						<?php
					}
				}

				?>
			</div>
		</div>
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


