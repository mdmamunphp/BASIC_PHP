<?php

$fid = $_SESSION['id'];


 ?>
<div class="dashboard-content-container" data-simplebar>
  <div class="dashboard-content-inner" >

			<!-- Dashboard Headline -->
			<div class="dashboard-headline">
				<h3>Howdy, Tom!</h3>
				<span>We are glad to see you again!</span>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="index.php?fre=freelancer_dashboard">Dashboard</a></li>
					</ul>
				</nav>
			</div>

			<!-- Fun Facts Container -->
			<div class="fun-facts-container">
				<div class="fun-fact" data-fun-fact-color="#36bd78">
				<?php
        $m = new Models();
				$query ="SELECT count(jobs.freelancer_id) as Totalfreid,jobs.title
				 from jobs where jobs.freelancer_id = {$fid} GROUP by jobs.freelancer_id" ;
				$result = $m->DBRaw($query);
				while($jdata = $result->fetch_object()){

				  ?>

					<div class="fun-fact-text">

						<span>award</span>


			<h4>
				<?php echo ($jdata->Totalfreid)?$jdata->Totalfreid:0 ;	?>
			</h4>

					</div>
					<?php

}

	  ?>
					<div class="fun-fact-icon"><i class="icon-material-outline-gavel"></i></div>
				</div>
        <?php
      $m = new Models();
	  $result = $m->DBRaw("select freelancers.*,(SELECT count(applicants.freelancer_id)
	  from applicants where applicants.freelancer_id = {$_SESSION['id']} GROUP by applicants.freelancer_id)
	  as TotalJobs from freelancers where freelancers.id =  {$_SESSION['id']} order by freelancers.first_name asc limit 4 ");

      while($value = $result->fetch_object()){
        ?>

  				<a href="index.php?fre=my-active-bids&id=<?php echo $value ->id ?>" class="fun-fact" data-fun-fact-color="#b81b7f">


          <span>Jobs Applied</span>
					<div class="fun-fact-text">

						  <h4><?php echo ($value->TotalJobs)?$value->TotalJobs:0 ?></h4>

					</div>


					<div class="fun-fact-icon"><i class="icon-material-outline-business-center"></i></div>

          </a>

				<div class="fun-fact" data-fun-fact-color="#efa80f">
					<div class="fun-fact-text">
						<span>Reviews</span>
						<h4>28</h4>
					</div>
					<div class="fun-fact-icon"><i class="icon-material-outline-rate-review"></i></div>
				</div>

				<!-- Last one has to be hidden below 1600px, sorry :( -->
				<div class="fun-fact" data-fun-fact-color="#2a41e6">
					<div class="fun-fact-text">
						<span>This Month Views</span>
						<h4>987</h4>
					</div>
					<div class="fun-fact-icon"><i class="icon-feather-trending-up"></i></div>
				</div>
			</div>

			<!-- Row -->
			<div class="row">

				<div class="col-xl-8">
					<!-- Dashboard Box -->
					<div class="dashboard-box main-box-in-row">
						<div class="headline">
							<h3><i class="icon-feather-bar-chart-2"></i> Your Profile Views</h3>
							<div class="sort-by">
								<select class="selectpicker hide-tick">
									<option>Last 6 Months</option>
									<option>This Year</option>
									<option>This Month</option>
								</select>
							</div>
						</div>
						<div class="content">
							<!-- Chart -->
							<div class="chart">
								<canvas id="chart" width="100" height="45"></canvas>
							</div>
						</div>
					</div>
					<!-- Dashboard Box / End -->
				</div>
				<div class="col-xl-4">

					<!-- Dashboard Box -->
					<!-- If you want adjust height of two boxes
						 add to the lower box 'main-box-in-row'
						 and 'child-box-in-row' to the higher box -->
					<div class="dashboard-box child-box-in-row">
						<div class="headline">
							<h3><i class="icon-material-outline-note-add"></i> Notes</h3>
						</div>

						<div class="content with-padding">
							<!-- Note -->
							<div class="dashboard-note">
								<p>Meeting with candidate at 3pm who applied for Bilingual Event Support Specialist</p>
								<div class="note-footer">
									<span class="note-priority high">High Priority</span>
									<div class="note-buttons">
										<a href="#" title="Edit" data-tippy-placement="top"><i class="icon-feather-edit"></i></a>
										<a href="#" title="Remove" data-tippy-placement="top"><i class="icon-feather-trash-2"></i></a>
									</div>
								</div>
							</div>
							<!-- Note -->
							<div class="dashboard-note">
								<p>Extend premium plan for next month</p>
								<div class="note-footer">
									<span class="note-priority low">Low Priority</span>
									<div class="note-buttons">
										<a href="#" title="Edit" data-tippy-placement="top"><i class="icon-feather-edit"></i></a>
										<a href="#" title="Remove" data-tippy-placement="top"><i class="icon-feather-trash-2"></i></a>
									</div>
								</div>
							</div>
							<!-- Note -->
							<div class="dashboard-note">
								<p>Send payment to David Peterson</p>
								<div class="note-footer">
									<span class="note-priority medium">Medium Priority</span>
									<div class="note-buttons">
										<a href="#" title="Edit" data-tippy-placement="top"><i class="icon-feather-edit"></i></a>
										<a href="#" title="Remove" data-tippy-placement="top"><i class="icon-feather-trash-2"></i></a>
									</div>
								</div>
							</div>
						</div>
							<div class="add-note-button">
								<a href="#small-dialog" class="popup-with-zoom-anim button full-width button-sliding-icon">Add Note <i class="icon-material-outline-arrow-right-alt"></i></a>
							</div>
					</div>
					<!-- Dashboard Box / End -->
				</div>
			</div>
			<!-- Row / End -->

			<!-- Row -->
			<div class="row">

				<!-- Dashboard Box -->
				<div class="col-xl-6">
					<div class="dashboard-box">
						<div class="headline">
							<h3><i class="icon-material-baseline-notifications-none"></i> Notifications</h3>
							<button class="mark-as-read ripple-effect-dark" data-tippy-placement="left" title="Mark all as read">
									<i class="icon-feather-check-square"></i>
							</button>
						</div>
						<div class="content">

							<ul class="dashboard-box-list">
                <?php
                $arr =array(
                  'buyers.id'=>'jobs.buyer_id',
                  'jobs.freelancer_id' => $fid
                );


                $select = "jobs.*, buyers.name as bname";
                $table ="jobs, buyers";
                  if($sql = $m->View($select, $table, "", "", $arr)){
                while($data=$sql->fetch_object()){
                 ?>
								<li>

									<span class="notification-icon"><i class="icon-material-outline-group"></i></span>
									<span class="notification-text">

										<strong><?php echo $data->bname ; ?></strong> Award jobs </br><a href="#"><?php echo $data->title ; ?> </a>
									</span>
									<!-- Buttons -->
									<div class="buttons-to-right">
										<a href="#" class="button ripple-effect ico" title="Mark as read" data-tippy-placement="left"><i class="icon-feather-check-square"></i></a>
									</div>


								</li>
                <?php
              }
            }

                 ?>
							</ul>
						</div>
					</div>
				</div>

				<!-- Dashboard Box -->
				<div class="col-xl-6">
					<div class="dashboard-box">
						<div class="headline">
							<h3><i class="icon-material-outline-assignment"></i> Orders</h3>
						</div>
						<div class="content">
							<ul class="dashboard-box-list">
								<li>
									<div class="invoice-list-item">
									<strong>Professional Plan</strong>
										<ul>
											<li><span class="unpaid">Unpaid</span></li>
											<li>Order: #326</li>
											<li>Date: 12/08/2019</li>
										</ul>
									</div>
									<!-- Buttons -->
									<div class="buttons-to-right">
										<a href="pages-checkout-page.html" class="button">Finish Payment</a>
									</div>
								</li>
								<li>
									<div class="invoice-list-item">
									<strong>Professional Plan</strong>
										<ul>
											<li><span class="paid">Paid</span></li>
											<li>Order: #264</li>
											<li>Date: 10/07/2019</li>
										</ul>
									</div>
									<!-- Buttons -->
									<div class="buttons-to-right">
										<a href="pages-invoice-template.html" class="button gray">View Invoice</a>
									</div>
								</li>
								<li>
									<div class="invoice-list-item">
									<strong>Professional Plan</strong>
										<ul>
											<li><span class="paid">Paid</span></li>
											<li>Order: #211</li>
											<li>Date: 12/06/2019</li>
										</ul>
									</div>
									<!-- Buttons -->
									<div class="buttons-to-right">
										<a href="pages-invoice-template.html" class="button gray">View Invoice</a>
									</div>
								</li>
								<li>
									<div class="invoice-list-item">
									<strong>Professional Plan</strong>
										<ul>
											<li><span class="paid">Paid</span></li>
											<li>Order: #179</li>
											<li>Date: 06/05/2019</li>
										</ul>
									</div>
									<!-- Buttons -->
									<div class="buttons-to-right">
										<a href="pages-invoice-template.html" class="button gray">View Invoice</a>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<?php
      };

       ?>
