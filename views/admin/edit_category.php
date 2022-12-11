<?php
include "admin_submenu.php";
?>
<div class="dashboard-content-container" data-simplebar>
		<div class="dashboard-content-inner" >
<?php
$jsList = array("register");
$m = new Models();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	
	
		$arr = array(
		  "name" => $_POST['name'],
		  "short_description" => $_POST['short_description']
	
		);  

		
		if($m->Upd('category', $arr,$_GET['id'])){


 		}

	  
	  
 }
?>


<div my class="shabuj">
		<form  action="" method="post"  ><!-- Row -->
			<div class="row">

				<!-- Dashboard Box -->
				<div class="col-xl-12">
					<div class="dashboard-box margin-top-0">

						<!-- Headline -->
						<div class="headline">
							<h3><i class="icon-feather-folder-plus" class="input-text with-border" name="name" placeholder="Enter Country"></i> Add Catagory</h3>
							<?php
				 				$results = $m->View("*", "category", "", ['id'=>$_GET['id']]);
				 				while($data = $results->fetch_object()){

		 					?>
						</div>

						<div class="content with-padding padding-bottom-10">
							<div class="row col-sm-6">
							
								<i class="icon-material-outline-user"></i>
								<!-- NAME -->
								<input type="text" class="input-text with-border" value="<?php echo $data->name ; ?>" name="name">
								<input type="text" class="input-text with-border" value="<?php echo $data->short_description ; ?>" name="short_description">
							</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-12">
					<button type="submit" class="button ripple-effect big margin-top-30"><i class="icon-feather-plus"></i> Submit</button>
				</div>
			</form>
			<!-- Row / End -->

</div>
<?php

};
?>

