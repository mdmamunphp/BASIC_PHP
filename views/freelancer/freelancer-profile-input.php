<?php
if(isset($_SESSION['id'])){
 $get = $_SESSION['id'];
 echo $get ;
?>



<div class="single-page-header freelancer-header" data-background-image="assets/images/single-freelancer.jpg">

	<div class="container">
		<div class="row">
      <?php
      $m = new Models();
      if($sql = $m->View("*", "freelancers", "", ['id'=> $get])){
            while($result = $sql->fetch_object()){

              ?>
			<div class="col-md-12">

				<div class="single-page-header-inner">
					<div class="left-side">

						<div class="header-image freelancer-avatar"><img src="views/freelancer/reg_images/<?php echo $get ;?>.jpeg" alt=""></div>
						<div class="header-details">
							<h3><?php echo $result->name ; ?><span></span></h3>
							<ul>
								<li><div class="star-rating" data-rating="5.0"></div></li>
								<li><img class="flag" src="assets/images/flags/de.svg" alt="">Germany</li>
								<li><div class="verified-badge-with-title">Verified</div></li>
							</ul>
						</div>
					</div>
				</div>
        <?php

          }
          };
         ?>
			</div>
		</div>
	</div>
</div>


<!-- Page Content
================================================== -->
<div class="container">
	<div class="row">
    <?php
    $m = new Models();
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      echo $_POST['sub'];

        $ext = checkExt('pic');
        if($ext){
         // $pname = md5("{$get}-jani-na");
          move_uploaded_file($_FILES['pic']['tmp_name'], "views/freelancer/reg_images/{$get}cv.{$ext}");
                echo "Account created successfully. Please verify your email";
        }
    else{


          $file = fopen("views/freelancer/freelancer_txt_file/{$get}.txt", "w") or die("file not open");
          fwrite($file, $_POST['description']) or die();
          fclose($file);


    		$arr = array(
          "first_name" => $_POST['first_name'],
    		  "last_name" => $_POST['last_name'],
          "country_id" => $_POST['country_id'],
    		  "category_id" => $_POST['category_id'],
           "contact" => $_POST['contact'],
            "hourly_rate" => $_POST['hourly_rate'],
            "gender" => $_POST['gender'],
          "address" => $_POST['address'],

    		  'pic' => $ext
    		  //'picture' => $ext
        );
        print_r($arr);


    		if($m->Upd('freelancers', $arr, $get)){

    			$id = $m->Id;

    				$abcList = $_POST['skill_id'];

    			if($abcList){
    				foreach($abcList as $list){
    					$arr = [
    						'freelancer_id' => $_SESSION['id'],
    						'skill_id' => $list
    					];
              $m->Insert('freelancer_skills',$arr);
              Redirect('index.php?fre=freelancer_dashboard');
    				}

    			}

        }




    	  }
     }
    ?>

		<!-- Content -->
		<div class="col-xl-8 col-lg-8 content-right-offset">
  <form  action="" method="post" enctype="multipart/form-data">
    <div class="profile-overview">
      <div class="overview-item">
          <div class="submit-field">
           <strong><h3>First Name</h3> </strong>
           <strong>
         <input class="uploadButton-input attachment-box ripple-effect " type="text" name="first_name" placeholder="First Name">
       </strong>
       </div>
    </div>
      <div class="overview-item">

        <div class="submit-field">
            <strong><h3>Last Name</h3></strong>

          <input class="uploadButton-input attachment-box ripple-effect " type="text" name="last_name" placeholder="Last Name">

          </div>
      </div>
    </div>
			<!-- Page Content -->
			<div class="single-page-section">
				<h3 class="margin-bottom-25">About Me</h3>
        <div class="col-xl-12">
          <div class="submit-field">
            <textarea cols="30" rows="5" name="description" class="with-border"></textarea>

          </div>

          <div class="sidebar-widget">
              <h3>Job Category</h3>
              <select name="category_id" id="" class="selectpicker with-border" data-size="7" title="Select Category">

                <?php
                $sql = $m->View("*","category","","");
                while($d = $sql->fetch_object()){
                  echo "<option value='{$d->id}'>{$d->name}</option>";
                };


                ?>
              </select>
            </div>
            <div class="sidebar-widget">
              <h3>Skills</h3>
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


                <div class="clearfix"></div>
              </div>
            </div>
          </div>
          <div class="profile-overview">
            <div class="overview-item">
              <h3>Gender</h3>
                <strong>
                  <select name="gender">
                  <option value="">Chosese Gender</option>
                  <option value="1">Male</option>
                  <option value="2">Female</option>

                </select>
            </strong>
          </div>
            <div class="overview-item">
            <strong><h3>Hourly Rate</h3> </strong>
           <strong>
         <input class="uploadButton-input attachment-box ripple-effect " type="text" name="hourly_rate" placeholder="hourly rate">
       </strong>


  				</div>

          </div>
          <div class="profile-overview">
            <div class="overview-item"><strong>  <h3>Country</h3>
              <select name="country_id" id="">
  							<?php
  								$sql = $m->View("*","country","","");
  								while($d = $sql->fetch_object()){
  									echo "<option value='{$d->id}'>{$d->name}</option>";
  								};


  							?>

  						</select>
            </strong></div>
            <div class="overview-item">


                <h3>Address</h3>
                <input class="uploadButton-input attachment-box ripple-effect " type="text" name="address" placeholder="address">
            </div>
          </div>
          <div class="profile-overview">

            <div class="overview-item">

                <h3>Contact No</h3>
                <input class="uploadButton-input attachment-box ripple-effect " type="text" name="contact" placeholder="enter your contact">
            </div>
            <div class="overview-item">

              <h3>Upload File</h3>
    					<div class="attachments-container row">

                <div class="uploadButton margin-top-5  col-sm-6">
                  <input class="uploadButton-input attachment-box ripple-effect " type="file" name="pic" accept="image/*, application/pdf" id="upload" multiple/>
                  <label class="uploadButton-button ripple-effect" for="upload">CV Submit</label>

                </div>

    					</div>
            </div>

          </div>


        </div>
        <button class="button full-width button-sliding-icon ripple-effect margin-top-10" type="submit" name="sub">Submit <i class="icon-material-outline-arrow-right-alt"></i></button>

          	</form>


			</div>




			<!-- Boxed List / End -->

		</div>


		<!-- Sidebar -->
		<div class="col-xl-4 col-lg-4">
			<div class="sidebar-container">
			</div>
		</div>

	</div>
</div>

<?php


}
 ?>
