<?php

	session_start();

	include "views/front/header.php";
	include "library/model.php";
	include "helper/our_helper.php";



?>
<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->
<header id="header-container" class="fullwidth">

		<?php
			include "views/subpage/menu.php";

		?>
	<!-- Header / End -->

</header>

<div class="clearfix">

</div>
<div class="container-fluid" id="navigation" id="nav1">
				<ul class="nav justify-content-center pl-5" id="responsive">
							<li class="nav-item "><a href="index.php?reg=register" class="nav-link"class="current">Graphics & Design </a>
								<ul class="dropdown-nav">

										<li><a href="jobs-list-layout-full-page-map-OpenStreetMap.php">Full Page List + Map</a></li>

						    	</ul>

							</li>

							<li class="nav-item"><a href="index.php?b=blog" class="nav-link"class="current">Digital Marketing</a>
								<ul class="dropdown-nav">

										<li><a href="jobs-list-layout-full-page-map-OpenStreetMap.php">Full Page List + Map</a></li>


						    	</ul>

							</li>
							<li class="nav-item"><a href="index.php?mod=moderator"class="nav-link" class="current">Writing & Translation</a>
									<ul class="dropdown-nav">

										<li><a href="jobs-list-layout-full-page-map-OpenStreetMap.php">Full Page List + Map</a></li>
										<li><a href="jobs-grid-layout-full-page-map-OpenStreetMap.php">Full Page Grid + Map</a></li>

						    	</ul>
							</li>
							<li class="nav-item"><a href="index.php?oh=customer"class="nav-link" class="current">Video & Animation</a>
									<ul class="dropdown-nav">

										<li><a href="jobs-list-layout-full-page-map-OpenStreetMap.php">Full Page List + Map</a></li>

						    	</ul>


							</li>



							<li class="nav-item"><a href="index.php?b=blog"class="nav-link" class="current">Programming & Tech</a>
								<ul class="dropdown-nav">

										<li><a href="jobs-list-layout-full-page-map-OpenStreetMap.php">Full Page List + Map</a></li>

						    	</ul>

							</li>
							<li class="nav-item"><a href="index.php?l=login"class="nav-link" class="current">Music & Audio</a>
								<ul class="dropdown-nav">

										<li><a href="jobs-list-layout-full-page-map-OpenStreetMap.php">Full Page List + Map</a></li>
										<li><a href="jobs-grid-layout-full-page-map-OpenStreetMap.php">Full Page Grid + Map</a></li>

						    	</ul>

							</li>
							<li class="nav-item"><a href="index.php?reg=register"class="nav-link" class="current">Lifestyle</a>
								<ul class="dropdown-nav">

										<li><a href="jobs-list-layout-full-page-map-OpenStreetMap.php">Full Page List + Map</a></li>
										<li><a href="jobs-grid-layout-full-page-map-OpenStreetMap.php">Full Page Grid + Map</a></li>

						    	</ul>

							</li>



			<!--  <li class="nav-item">
				<a class="nav-link active" href="#">Active</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="#">Link</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="#">Link</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link disabled" href="#">Disabled</a>
			  </li> -->
			</ul>

		</div>
<!-- Header Container / End -->
<?php
	include "system/controller.php";
?>



<?php

	include "views/front/footer.php";
?>
