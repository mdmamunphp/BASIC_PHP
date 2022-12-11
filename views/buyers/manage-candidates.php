<?php
if(isset($_GET['id'])){
	$_SESSION['get'] = $_GET['id'];
	?>
	<!-- Wrapper -->
	<div id="wrapper">

<!-- Header Container
	================================================== -->



	<!-- Dashboard Container -->
	<div class="dashboard-container">

	<!-- Dashboard Sidebar
		================================================== -->

		<!-- Dashboard Sidebar / End -->


	<!-- Dashboard Content
		================================================== -->
		<div class="dashboard-content-container" data-simplebar>
			<div class="dashboard-content-inner" >

				<!-- Dashboard Headline -->
				<div class="dashboard-headline">
					<h3>Manage Candidates</h3>
					<span class="margin-top-7">Job Applications for <a href="#">Full Stack PHP Developer</a></span>

					<!-- Breadcrumbs -->
					<nav id="breadcrumbs" class="dark">
						<ul>
							<li><a href="index.php?f=home">Home</a></li>
							<li><a href="index.php?buy=buyers_dashboard">Dashboard</a></li>
							<li><a href="index.php?buy=buyer_manage_jobs&id=35">Manage Jobs</a></li>
						</ul>
					</nav>
				</div>

				<!-- Row -->
				<div class="row">
					<?php





					if($sql = $m->View("*", "applicants", "", ['Job_id'=>$_GET['id']])){
						while($result = $sql->fetch_object()){
							$abc = $result->freelancer_id;

							if($abc){
								$rel = [
									'freelancers.id' => 'applicants.freelancer_id',
									'jobs.id' => 'applicants.job_id',
									'buyers.id' => 'jobs.buyer_id'
									//'freelancers.id'=>'jobs.freelancer_id'
								];
								$select = "applicants.*, freelancers.first_name fname, freelancers.id fid";
								$table = 'applicants, freelancers, jobs, buyers';

								if($sql = $m->View($select, $table, "", ['Job_id'=>$_GET['id']], $rel)){

									while($results = $sql->fetch_object()){
										$fname = $results->fname

										?>
										<div class="col-xl-12">
											<div class="dashboard-box margin-top-0">

												<!-- Headline -->
												<div class="headline">
													<h3><i class="icon-material-outline-supervisor-account"></i> 3 Candidates</h3>
													<p>  </p>
												</div>

												<div class="content">
													<ul class="dashboard-box-list">
														<li>
															<!-- Overview -->
															<div class="freelancer-overview manage-candidates">
																<div class="freelancer-overview-inner">

																	<!-- Avatar -->
																	<div class="freelancer-avatar">
																		<div class="verified-badge"></div>
																		<a href="#"><img

																			src= "<?php echo 'views/freelancer/reg_images/'. $abc.'.jpg'; ?>" ></a>
																		</div>

																		<!-- Name -->
																		<div class="freelancer-name">
																			<h4>	<a href="index.php?fre=freelancer-profile&id=<?php echo $results->fid ;
																				?>"><img class="flag" src="images/flags/au.svg" alt="" title="Australia" data-tippy-placement="top"><?php echo $fname ; ?></a></h4>

																			<!-- Details -->
																			<span class="freelancer-detail-item"><a href="#"><i class="icon-feather-mail"></i> <span class="__cf_email__" data-cfemail="76051f18120f36130e171b061a135815191b">[email&#160;protected]</span></a></span>
																			<span class="freelancer-detail-item"><i class="icon-feather-phone"></i> (+61) 123-456-789</span>

																			<!-- Rating -->
																			<div class="freelancer-rating">
																				<div class="star-rating" data-rating="5.0"></div>
																			</div>

																			<!-- Buttons -->
																			<div class="buttons-to-right always-visible margin-top-25 margin-bottom-5">
																				<a href="#" class="button ripple-effect"><i class="icon-feather-file-text"></i> Download CV</a>

																				<form action="" method="post">
																<!-- <a href="index.php?buy=job_approval&id=<?php echo $results->id ;
																echo $get;?>" class="button dark ripple-effect"><i class="icon-feather-mail"></i> Job Approval


															</a> -->
															<a href="index.php?buy=job_approval&freeid=<?php echo $results->fid ;
															?>"> job approval</a>
														</form>
														<a href="#" class="button gray ripple-effect ico" title="Remove Candidate" data-tippy-placement="top"><i class="icon-feather-trash-2"></i></a>
													</div>
												</div>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<?php
				}
			}
		}
	}
}
}
?>
</div>


</div>
</div>
<!-- Dashboard Content / End -->

</div>
<!-- Dashboard Container / End -->

</div>
