<!-- Header -->
<div id="header">
	<div class="container">

		<!-- Left Side Content -->
		<div class="left-side">

			<!-- Logo -->
			<div id="logo">
				<a href="index.php"><img src="assets/images/logo.png" alt=""></a>
			</div>

			<!-- Main Navigation -->
			<nav id="navigation">
				<ul id="responsive">

					<!-- 	<li class="nav-item"><a href="index.php?h=home.php" class="nav-link"class="current">Home</a></li>
						<li class="nav-item"><a href="index.php?b=blog" class="nav-link"class="current">blog</a></li>
						<li class="nav-item"><a href="index.php?mod=moderator"class="nav-link" class="current">moderator</a></li>
						<li   class="nav-item"><a href="index.php?oh=customer"class="nav-link" class="current">Ordar History</a></li>
						<li class="nav-item"><a href="index.php?l=login"class="nav-link" class="current">login</a></li>
						<li class="nav-item"><a href="index.php?b=blog"class="nav-link" class="current">register</a></li>
						<li class="nav-item"><a href="index.php?c=contact"class="nav-link" class="current">contact</a></li>
					-->



					<li><a href="index.php?f=home">Home</a></li>
		 				<?php
								if(isset($_SESSION['id'])){
									?>
									<li><a href="index.php?buy=jobs_reg">Post a Jobs</a></li>
									<?php
								}else{
									?>

									<li><a href="index.php?f=buyers_reg">Post a Jobs</a></li>

									<?php
								}

						?>
						<li><a href="index.php?f=contact">Contact</a></li>







				</ul>
			</nav>
				</div>

	<?php

		if(isset($_SESSION['id'])){
						// type ======== 1  ============= start
			if($_SESSION['type'] == 1){

						$_SESSION['id'];
					$m = new Models();
					$result = $m->View("*","admin","","");

					while($data = $result->fetch_object()){

							?>

						<div class="right-side">

						<!--  User Notifications -->
						<div class="header-widget hide-on-mobile">

							<!-- Notifications -->
							<div class="header-notifications">

								<!-- Trigger -->
								<div class="header-notifications-trigger">
									<a href="#"><i class="icon-feather-bell"></i><span>4</span></a>
								</div>

						<!-- Dropdown -->
						<div class="header-notifications-dropdown">

							<div class="header-notifications-headline">
								<h4>Notifications</h4>
								<button class="mark-as-read ripple-effect-dark" title="Mark all as read" data-tippy-placement="left">
									<i class="icon-feather-check-square"></i>
								</button>
							</div>

							<div class="header-notifications-content">
								<div class="header-notifications-scroll" data-simplebar>
									<ul>
										<!-- Notification -->
										<li class="notifications-not-read">
											<a href="dashboard-manage-candidates.html">
												<span class="notification-icon"><i class="icon-material-outline-group"></i></span>
												<span class="notification-text">
													<strong>Michael Shannah</strong> applied for a job <span class="color">Full Stack Software Engineer</span>
												</span>
											</a>
										</li>

										<!-- Notification -->
										<li>
											<a href="dashboard-manage-bidders.html">
												<span class="notification-icon"><i class=" icon-material-outline-gavel"></i></span>
												<span class="notification-text">
													<strong>Gilbert Allanis</strong> placed a bid on your <span class="color">iOS App Development</span> project
												</span>
											</a>
										</li>

										<!-- Notification -->
										<li>
											<a href="dashboard-manage-jobs.html">
												<span class="notification-icon"><i class="icon-material-outline-autorenew"></i></span>
												<span class="notification-text">
													Your job listing <span class="color">Full Stack PHP Developer</span> is expiring.
												</span>
											</a>
										</li>

										<!-- Notification -->
										<li>
											<a href="dashboard-manage-candidates.html">
												<span class="notification-icon"><i class="icon-material-outline-group"></i></span>
												<span class="notification-text">
													<strong>Sindy Forrest</strong> applied for a job <span class="color">Full Stack Software Engineer</span>
												</span>
											</a>
										</li>
									</ul>
								</div>
							</div>

						</div>

					</div>

					<!-- Messages -->
					<div class="header-notifications">
						<div class="header-notifications-trigger">
							<a href="#"><i class="icon-feather-mail"></i><span>3</span></a>
						</div>

						<!-- Dropdown -->
						<div class="header-notifications-dropdown">

							<div class="header-notifications-headline">
								<h4>Messages</h4>
								<button class="mark-as-read ripple-effect-dark" title="Mark all as read" data-tippy-placement="left">
									<i class="icon-feather-check-square"></i>
								</button>
							</div>

							<div class="header-notifications-content">
								<div class="header-notifications-scroll" data-simplebar>
									<ul>
										<!-- Notification -->
										<li class="notifications-not-read">
											<a href="dashboard-messages.html">
												<span class="notification-avatar status-online"><?php echo "<img src='views/admin/reg_images/{$_SESSION['id']}.jpeg' alt=''>" ?></span>
												<div class="notification-text">
													<strong>David Peterson</strong>
													<p class="notification-msg-text">Thanks for reaching out. I'm quite busy right now on many...</p>
													<span class="color">4 hours ago</span>
												</div>
											</a>
										</li>

										<!-- Notification -->
										<li class="notifications-not-read">
											<a href="dashboard-messages.html">
												<span class="notification-avatar status-offline"><?php echo "<img src='views/admin/reg_images/{$_SESSION['id']}.jpeg' alt=''>" ?></span>
												<div class="notification-text">
													<strong>Sindy Forest</strong>
													<p class="notification-msg-text">Hi Tom! Hate to break it to you, but I'm actually on vacation until...</p>
													<span class="color">Yesterday</span>
												</div>
											</a>
										</li>

										<!-- Notification -->
										<li class="notifications-not-read">
											<a href="dashboard-messages.html">
												<span class="notification-avatar status-online"><?php echo "<img src='views/admin/reg_images/{$_SESSION['id']}.jpeg' alt=''>" ?></span>
												<div class="notification-text">
													<strong>Marcin Kowalski</strong>
													<p class="notification-msg-text">I received payment. Thanks for cooperation!</p>
													<span class="color">Yesterday</span>
												</div>
											</a>
										</li>
									</ul>
								</div>
							</div>

							<a href="dashboard-messages.html" class="header-notifications-button ripple-effect button-sliding-icon">View All Messages<i class="icon-material-outline-arrow-right-alt"></i></a>
						</div>
					</div>

				</div>
				<!--  User Notifications / End -->

				<!-- User Menu -->

				<div class="header-widget">

					<!-- Messages -->
					<div class="header-notifications user-menu">
						<div class="header-notifications-trigger">
							<a href="#"><div class="user-avatar status-online"><?php echo "<img src='views/admin/reg_images/{$_SESSION['id']}.jpeg' alt=''>" ?></div></a>
						</div>

						<!-- Dropdown -->
						<div class="header-notifications-dropdown">

							<!-- User Status -->
							<div class="user-status">

								<!-- User Name / Avatar -->
								<div class="user-details">
									<div class="user-avatar status-online"><?php echo "<img src='views/admin/reg_images/{$_SESSION['id']}.jpeg' alt=''>" ?></div>
									<div class="user-name">
										Tom Smith <span>Freelancer</span>
									</div>
								</div>

								<!-- User Status Switcher -->
								<div class="status-switch" id="snackbar-user-status">
									<label class="user-online current-status">Online</label>
									<label class="user-invisible">Invisible</label>
									<!-- Status Indicator -->
									<span class="status-indicator" aria-hidden="true"></span>
								</div>
							</div>

							<ul class="user-menu-small-nav">
								<li><a href="dashboard.html"><i class="icon-material-outline-dashboard"></i> Dashboard</a></li>
								<li><a href="dashboard-settings.html"><i class="icon-material-outline-settings"></i> Settings</a></li>
								<li><a href="index.php?f=logout"><i class="icon-material-outline-power-settings-new"></i> Logout</a></li>
							</ul>

						</div>
					</div>

				</div>

				<!-- User Menu / End -->

				<!-- Mobile Navigation Button -->
				<span class="mmenu-trigger">
					<button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
				</span>

			</div>
				<?php
		     	}
			}

			//type ========= 1 ===== end
			// type ======== 2 ============= start
			if($_SESSION['type'] == 2){

					$_SESSION['id'];
					$m = new Models();
					$result = $m->View("*","admin","","");

					while($data = $result->fetch_object()){

							?>

						<div class="right-side">

						<!--  User Notifications -->
						<div class="header-widget hide-on-mobile">

							<!-- Notifications -->
							<div class="header-notifications">

								<!-- Trigger -->
								<div class="header-notifications-trigger">
									<a href="#"><i class="icon-feather-bell"></i><span>4</span></a>
								</div>

						<!-- Dropdown -->
						<div class="header-notifications-dropdown">

							<div class="header-notifications-headline">
								<h4>Notifications</h4>
								<button class="mark-as-read ripple-effect-dark" title="Mark all as read" data-tippy-placement="left">
									<i class="icon-feather-check-square"></i>
								</button>
							</div>

							<div class="header-notifications-content">
								<div class="header-notifications-scroll" data-simplebar>
									<ul>
										<!-- Notification -->
										<li class="notifications-not-read">
											<a href="dashboard-manage-candidates.html">
												<span class="notification-icon"><i class="icon-material-outline-group"></i></span>
												<span class="notification-text">
													<strong>Michael Shannah</strong> applied for a job <span class="color">Full Stack Software Engineer</span>
												</span>
											</a>
										</li>

										<!-- Notification -->
										<li>
											<a href="dashboard-manage-bidders.html">
												<span class="notification-icon"><i class=" icon-material-outline-gavel"></i></span>
												<span class="notification-text">
													<strong>Gilbert Allanis</strong> placed a bid on your <span class="color">iOS App Development</span> project
												</span>
											</a>
										</li>

										<!-- Notification -->
										<li>
											<a href="dashboard-manage-jobs.html">
												<span class="notification-icon"><i class="icon-material-outline-autorenew"></i></span>
												<span class="notification-text">
													Your job listing <span class="color">Full Stack PHP Developer</span> is expiring.
												</span>
											</a>
										</li>

										<!-- Notification -->
										<li>
											<a href="dashboard-manage-candidates.html">
												<span class="notification-icon"><i class="icon-material-outline-group"></i></span>
												<span class="notification-text">
													<strong>Sindy Forrest</strong> applied for a job <span class="color">Full Stack Software Engineer</span>
												</span>
											</a>
										</li>
									</ul>
								</div>
							</div>

						</div>

					</div>

					<!-- Messages -->
					<div class="header-notifications">
						<div class="header-notifications-trigger">
							<a href="#"><i class="icon-feather-mail"></i><span>3</span></a>
						</div>

						<!-- Dropdown -->
						<div class="header-notifications-dropdown">

							<div class="header-notifications-headline">
								<h4>Messages</h4>
								<button class="mark-as-read ripple-effect-dark" title="Mark all as read" data-tippy-placement="left">
									<i class="icon-feather-check-square"></i>
								</button>
							</div>

							<div class="header-notifications-content">
								<div class="header-notifications-scroll" data-simplebar>
									<ul>
										<!-- Notification -->
										<li class="notifications-not-read">
											<a href="dashboard-messages.html">
												<span class="notification-avatar status-online"><?php echo "<img src='views/admin/reg_images/{$_SESSION['id']}.jpeg' alt=''>" ?></span>
												<div class="notification-text">
													<strong>David Peterson</strong>
													<p class="notification-msg-text">Thanks for reaching out. I'm quite busy right now on many...</p>
													<span class="color">4 hours ago</span>
												</div>
											</a>
										</li>

										<!-- Notification -->
										<li class="notifications-not-read">
											<a href="dashboard-messages.html">
												<span class="notification-avatar status-offline"><?php echo "<img src='views/admin/reg_images/{$_SESSION['id']}.jpeg' alt=''>" ?></span>
												<div class="notification-text">
													<strong>Sindy Forest</strong>
													<p class="notification-msg-text">Hi Tom! Hate to break it to you, but I'm actually on vacation until...</p>
													<span class="color">Yesterday</span>
												</div>
											</a>
										</li>

										<!-- Notification -->
										<li class="notifications-not-read">
											<a href="dashboard-messages.html">
												<span class="notification-avatar status-online"><?php echo "<img src='views/admin/reg_images/{$_SESSION['id']}.jpeg' alt=''>" ?></span>
												<div class="notification-text">
													<strong>Marcin Kowalski</strong>
													<p class="notification-msg-text">I received payment. Thanks for cooperation!</p>
													<span class="color">Yesterday</span>
												</div>
											</a>
										</li>
									</ul>
								</div>
							</div>

							<a href="dashboard-messages.html" class="header-notifications-button ripple-effect button-sliding-icon">View All Messages<i class="icon-material-outline-arrow-right-alt"></i></a>
						</div>
					</div>

				</div>
				<!--  User Notifications / End -->

				<!-- User Menu -->

				<div class="header-widget">

					<!-- Messages -->
					<div class="header-notifications user-menu">
						<div class="header-notifications-trigger">
							<a href="#"><div class="user-avatar status-online"><?php echo "<img src='views/admin/reg_images/{$_SESSION['id']}.jpeg' alt=''>" ?></div></a>
						</div>

						<!-- Dropdown -->
						<div class="header-notifications-dropdown">

							<!-- User Status -->
							<div class="user-status">

								<!-- User Name / Avatar -->
								<div class="user-details">
									<div class="user-avatar status-online"><?php echo "<img src='views/admin/reg_images/{$_SESSION['id']}.jpeg' alt=''>" ?></div>
									<div class="user-name">
										Tom Smith <span>Freelancer</span>
									</div>
								</div>

								<!-- User Status Switcher -->
								<div class="status-switch" id="snackbar-user-status">
									<label class="user-online current-status">Online</label>
									<label class="user-invisible">Invisible</label>
									<!-- Status Indicator -->
									<span class="status-indicator" aria-hidden="true"></span>
								</div>
							</div>

							<ul class="user-menu-small-nav">
								<li><a href="index.php?a=admin_dashboard"><i class="icon-material-outline-dashboard"></i> Dashboard</a></li>
								<li><a href="dashboard-settings.html"><i class="icon-material-outline-settings"></i> Settings</a></li>
								<li><a href="index.php?f=logout"><i class="icon-material-outline-power-settings-new"></i> Logout</a></li>
							</ul>

						</div>
					</div>

				</div>

				<!-- User Menu / End -->

				<!-- Mobile Navigation Button -->
				<span class="mmenu-trigger">
					<button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
				</span>

			</div>
				<?php
			  }
			}
			// type ======== 3  ============= start
			if($_SESSION['type'] == 3){

				$_SESSION['id'];
					$m = new Models();
					$result = $m->View("*","buyers","","","");

					while($data = $result->fetch_object()){


							?>

						<div class="right-side">

						<!--  User Notifications -->
						<div class="header-widget hide-on-mobile">

							<!-- Notifications -->
							<div class="header-notifications">

								<!-- Trigger -->
								<div class="header-notifications-trigger">
									<a href="#"><i class="icon-feather-bell"></i><span>4</span></a>
								</div>

						<!-- Dropdown -->
						<div class="header-notifications-dropdown">

							<div class="header-notifications-headline">
								<h4>Notifications</h4>
								<button class="mark-as-read ripple-effect-dark" title="Mark all as read" data-tippy-placement="left">
									<i class="icon-feather-check-square"></i>
								</button>
							</div>

							<div class="header-notifications-content">
								<div class="header-notifications-scroll" data-simplebar>
									<ul>
										<!-- Notification -->
										<li class="notifications-not-read">
											<a href="dashboard-manage-candidates.html">
												<span class="notification-icon"><i class="icon-material-outline-group"></i></span>
												<span class="notification-text">
													<strong>Michael Shannah</strong> applied for a job <span class="color">Full Stack Software Engineer</span>
												</span>
											</a>
										</li>

										<!-- Notification -->
										<li>
											<a href="dashboard-manage-bidders.html">
												<span class="notification-icon"><i class=" icon-material-outline-gavel"></i></span>
												<span class="notification-text">
													<strong>Gilbert Allanis</strong> placed a bid on your <span class="color">iOS App Development</span> project
												</span>
											</a>
										</li>

										<!-- Notification -->
										<li>
											<a href="dashboard-manage-jobs.html">
												<span class="notification-icon"><i class="icon-material-outline-autorenew"></i></span>
												<span class="notification-text">
													Your job listing <span class="color">Full Stack PHP Developer</span> is expiring.
												</span>
											</a>
										</li>

										<!-- Notification -->
										<li>
											<a href="dashboard-manage-candidates.html">
												<span class="notification-icon"><i class="icon-material-outline-group"></i></span>
												<span class="notification-text">
													<strong>Sindy Forrest</strong> applied for a job <span class="color">Full Stack Software Engineer</span>
												</span>
											</a>
										</li>
									</ul>
								</div>
							</div>

						</div>

					</div>

					<!-- Messages -->
					<div class="header-notifications">
						<div class="header-notifications-trigger">
							<a href="#"><i class="icon-feather-mail"></i><span>3</span></a>
						</div>

						<!-- Dropdown -->
						<div class="header-notifications-dropdown">

							<div class="header-notifications-headline">
								<h4>Messages</h4>
								<button class="mark-as-read ripple-effect-dark" title="Mark all as read" data-tippy-placement="left">
									<i class="icon-feather-check-square"></i>
								</button>
							</div>

							<div class="header-notifications-content">
								<div class="header-notifications-scroll" data-simplebar>
									<ul>
										<!-- Notification -->
										<li class="notifications-not-read">
											<a href="dashboard-messages.html">
												<span class="notification-avatar status-online"><?php echo "<img src='views/buyers/reg_images/{$_SESSION['id']}.jpeg' alt=''>" ?></span>
												<div class="notification-text">
													<strong>David Peterson</strong>
													<p class="notification-msg-text">Thanks for reaching out. I'm quite busy right now on many...</p>
													<span class="color">4 hours ago</span>
												</div>
											</a>
										</li>

										<!-- Notification -->
										<li class="notifications-not-read">
											<a href="dashboard-messages.html">
												<span class="notification-avatar status-offline"><?php echo "<img src='views/buyers/reg_images/{$_SESSION['id']}.jpeg' alt=''>" ?></span>
												<div class="notification-text">
													<strong>Sindy Forest</strong>
													<p class="notification-msg-text">Hi Tom! Hate to break it to you, but I'm actually on vacation until...</p>
													<span class="color">Yesterday</span>
												</div>
											</a>
										</li>

										<!-- Notification -->
										<li class="notifications-not-read">
											<a href="dashboard-messages.html">
												<span class="notification-avatar status-online"><?php echo "<img src='views/buyers/reg_images/{$_SESSION['id']}.jpeg' alt=''>" ?></span>
												<div class="notification-text">
													<strong>Marcin Kowalski</strong>
													<p class="notification-msg-text">I received payment. Thanks for cooperation!</p>
													<span class="color">Yesterday</span>
												</div>
											</a>
										</li>
									</ul>
								</div>
							</div>

							<a href="dashboard-messages.html" class="header-notifications-button ripple-effect button-sliding-icon">View All Messages<i class="icon-material-outline-arrow-right-alt"></i></a>
						</div>
					</div>

				</div>
				<!--  User Notifications / End -->

				<!-- User Menu -->

				<div class="header-widget">

					<!-- Messages -->
					<div class="header-notifications user-menu">
						<div class="header-notifications-trigger">
							<a href="#"><div class="user-avatar status-online"><?php echo "<img src='views/buyers/reg_images/{$_SESSION['id']}.jpeg' alt=''>" ?></div></a>
						</div>

						<!-- Dropdown -->
						<div class="header-notifications-dropdown">

							<!-- User Status -->
							<div class="user-status">

								<!-- User Name / Avatar -->
								<div class="user-details">
									<div class="user-avatar status-online"><?php echo "<img src='views/buyers/reg_images/{$_SESSION['id']}.jpeg' alt=''>" ?></div>
									<div class="user-name">
										Tom Smith <span>Freelancer</span>
									</div>
								</div>

								<!-- User Status Switcher -->
								<div class="status-switch" id="snackbar-user-status">
									<label class="user-online current-status">Online</label>
									<label class="user-invisible">Invisible</label>
									<!-- Status Indicator -->
									<span class="status-indicator" aria-hidden="true"></span>
								</div>
							</div>

							<ul class="user-menu-small-nav">
								<li><a href="index.php?buy=buyers_dashboard"><i class="icon-material-outline-dashboard"></i> Dashboard</a></li>
								<li><a href="dashboard-settings.html"><i class="icon-material-outline-settings"></i> Settings</a></li>
								<li><a href="index.php?f=logout"><i class="icon-material-outline-power-settings-new"></i> Logout</a></li>
							</ul>

						</div>
					</div>

				</div>

				<!-- User Menu / End -->

				<!-- Mobile Navigation Button -->
				<span class="mmenu-trigger">
					<button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
				</span>

			</div>
				<?php
			 }
			}
			// type ======== 4  ============= start
			if($_SESSION['type'] == 4){

			$id =	$_SESSION['id'];
					$m = new Models();
					$result = $m->View("*", "freelancers", "", ['id' =>$id]);

					while($data = $result->fetch_object()){

							?>

						<div class="right-side">

						<!--  User Notifications -->
						<div class="header-widget hide-on-mobile">

							<!-- Notifications -->
							<div class="header-notifications">

								<!-- Trigger -->
								<div class="header-notifications-trigger">
									<a href="#"><i class="icon-feather-bell"></i><span>4</span></a>
								</div>

						<!-- Dropdown -->
						<div class="header-notifications-dropdown">

							<div class="header-notifications-headline">
								<h4>Notifications</h4>
								<button class="mark-as-read ripple-effect-dark" title="Mark all as read" data-tippy-placement="left">
									<i class="icon-feather-check-square"></i>
								</button>
							</div>

							<div class="header-notifications-content">
								<div class="header-notifications-scroll" data-simplebar>
									<ul>
										<!-- Notification -->
										<li class="notifications-not-read">
											<a href="dashboard-manage-candidates.html">
												<span class="notification-icon"><i class="icon-material-outline-group"></i></span>
												<span class="notification-text">
													<strong>Michael Shannah</strong> applied for a job <span class="color">Full Stack Software Engineer</span>
												</span>
											</a>
										</li>

										<!-- Notification -->
										<li>
											<a href="dashboard-manage-bidders.html">
												<span class="notification-icon"><i class=" icon-material-outline-gavel"></i></span>
												<span class="notification-text">
													<strong>Gilbert Allanis</strong> placed a bid on your <span class="color">iOS App Development</span> project
												</span>
											</a>
										</li>

										<!-- Notification -->
										<li>
											<a href="dashboard-manage-jobs.html">
												<span class="notification-icon"><i class="icon-material-outline-autorenew"></i></span>
												<span class="notification-text">
													Your job listing <span class="color">Full Stack PHP Developer</span> is expiring.
												</span>
											</a>
										</li>

										<!-- Notification -->
										<li>
											<a href="dashboard-manage-candidates.html">
												<span class="notification-icon"><i class="icon-material-outline-group"></i></span>
												<span class="notification-text">
													<strong>Sindy Forrest</strong> applied for a job <span class="color">Full Stack Software Engineer</span>
												</span>
											</a>
										</li>
									</ul>
								</div>
							</div>

						</div>

					</div>

					<!-- Messages -->
					<div class="header-notifications">
						<div class="header-notifications-trigger">
							<a href="#"><i class="icon-feather-mail"></i><span>3</span></a>
						</div>

						<!-- Dropdown -->
						<div class="header-notifications-dropdown">

							<div class="header-notifications-headline">
								<h4>Messages</h4>
								<button class="mark-as-read ripple-effect-dark" title="Mark all as read" data-tippy-placement="left">
									<i class="icon-feather-check-square"></i>
								</button>
							</div>

							<div class="header-notifications-content">
								<div class="header-notifications-scroll" data-simplebar>
									<ul>
										<!-- Notification -->
										<li class="notifications-not-read">
											<a href="dashboard-messages.html">
												<span class="notification-avatar status-online"><?php echo "<img src='views/freelancer/reg_images/{$_SESSION['id']}.jpeg' alt=''>" ?></span>
												<div class="notification-text">
													<strong>David Peterson</strong>
													<p class="notification-msg-text">Thanks for reaching out. I'm quite busy right now on many...</p>
													<span class="color">4 hours ago</span>
												</div>
											</a>
										</li>

										<!-- Notification -->
										<li class="notifications-not-read">
											<a href="dashboard-messages.html">
												<span class="notification-avatar status-offline"><?php echo "<img src='views/freelancer/reg_images/{$_SESSION['id']}.jpeg' alt=''>" ?></span>
												<div class="notification-text">
													<strong>Sindy Forest</strong>
													<p class="notification-msg-text">Hi Tom! Hate to break it to you, but I'm actually on vacation until...</p>
													<span class="color">Yesterday</span>
												</div>
											</a>
										</li>

										<!-- Notification -->
										<li class="notifications-not-read">
											<a href="dashboard-messages.html">
												<span class="notification-avatar status-online"><?php echo "<img src='views/freelancer/reg_images/{$_SESSION['id']}.jpeg' alt=''>" ?></span>
												<div class="notification-text">
													<strong>Marcin Kowalski</strong>
													<p class="notification-msg-text">I received payment. Thanks for cooperation!</p>
													<span class="color">Yesterday</span>
												</div>
											</a>
										</li>
									</ul>
								</div>
							</div>

							<a href="dashboard-messages.html" class="header-notifications-button ripple-effect button-sliding-icon">View All Messages<i class="icon-material-outline-arrow-right-alt"></i></a>
						</div>
					</div>

				</div>
				<!--  User Notifications / End -->

				<!-- User Menu -->

				<div class="header-widget">

					<!-- Messages -->
					<div class="header-notifications user-menu">
						<div class="header-notifications-trigger">
							<a href="#"><div class="user-avatar status-online"><?php echo "<img src='views/freelancer/reg_images/{$_SESSION['id']}.jpeg' alt=''>" ?></div></a>
						</div>

						<!-- Dropdown -->
						<div class="header-notifications-dropdown">

							<!-- User Status -->
							<div class="user-status">

								<!-- User Name / Avatar -->
								<div class="user-details">
									<div class="user-avatar status-online">

								<a href="index.php?fre=freelancer-profile&id=<?php echo $_SESSION['id'] ;?>">	<?php echo "<img src='views/freelancer/reg_images/{$_SESSION['id']}.jpeg' alt=''>" ?> </a></div>
									<div class="user-name">
										<?php echo $data->first_name ; ?> <span>Freelancer</span>
									</div>
								</div>

								<!-- User Status Switcher -->
								<div class="status-switch" id="snackbar-user-status">
									<label class="user-online current-status">Online</label>
									<label class="user-invisible">Invisible</label>
									<!-- Status Indicator -->
									<span class="status-indicator" aria-hidden="true"></span>
								</div>
							</div>

							<ul class="user-menu-small-nav">
								<li><a href="index.php?fre=freelancer_dashboard"><i class="icon-material-outline-dashboard"></i> Dashboard</a></li>
								<li><a href="index.php?fre=dashboard_settings&id=<?php echo $_SESSION['id'] ;?> "><i class="icon-material-outline-settings"></i> Settings</a></li>
								<li><a href="index.php?f=logout"><i class="icon-material-outline-power-settings-new"></i> Logout</a></li>
							</ul>

						</div>
					</div>

				</div>

				<!-- User Menu / End -->

				<!-- Mobile Navigation Button -->
						<span class="mmenu-trigger">
							<button class="hamburger hamburger--collapse" type="button">
								<span class="hamburger-box">
									<span class="hamburger-inner"></span>
								</span>
							</button>
						</span>

					</div>
			<?php
			}
	}
			// type ================= 4 =============== end

		}



		else{
			?>

				<div class="right-side">
				<div class="header-widget">
					<div class="user-details" style="padding-top:30%;">
						<div style="padding-right:10%";>
							<a href="index.php?f=register"><span>SingUp</span></a>
						</div>
						<div style="padding-left:10%";>
							<a href="index.php?f=login"><span>Login</span></a>
						</div>
					</div>
				</div>
			</div>

		<?php
			};
			?>
			<div class="clearfix"></div>
			<!-- Main Navigation / End -->


		<!-- Left Side Content / End -->


		<!-- Right Side Content / End -->
