<?php



$id = $_GET['id'];

 ?>
 <section>
 <div class="single-page-header freelancer-header" data-background-image="assets/images/single-freelancer.jpg">

 	<div class="container">
 		<div class="row">
      <?php
      $m = new Models();
     $results = $m->DBRaw("select * from applicants where applicants.freelancer_id ='".$_GET['id']."' order by id desc limit 4");

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
 	<div class="col-sm-12">
   <!-- Job Listing Details -->
   <div class="job-listing-details">

      <a href="index.php?fre=freelancer_apply_details&id=<?php echo $value->id ;?>" class="job-listing with-apply-button">
     <!-- Logo -->
     <div class="job-listing-company-logo">
       <img src="assets/images/company-logo-01.png" alt="">
     </div>


     <!-- Details -->
     <div class="job-listing-description">
       <?php
       $sql=$m->View("*", "applicants", "", ['applicants.job_id'=> $id]);
       while ($value = $results->fetch_object()){
        ;?>
       <h3 class="job-listing-title">
         <?php
          echo $value->title ;
          ?>
    </h3>
      <?php
      }

       ?>
       <!-- Job Listing Footer -->
       <div class="job-listing-footer">
         <ul>
           <li><i class="icon-material-outline-business"></i> Hexagon <div class="verified-badge" title="Verified Employer" data-tippy-placement="top"></div></li>
           <li><i class="icon-material-outline-location-on"></i> San Francissco</li>
           <li><i class="icon-material-outline-business-center"></i> Full Time</li>
           <li><i class="icon-material-outline-assets-time"></i> 2 days ago</li>
         </ul>
       </div>
     </div>

     <!-- Apply Button -->
     <span class="list-apply-button ripple-effect">Apply Now</span>

   </div>



</div>
</a>
<?php
}


 ?>

</div>
</div>
</div>
</section>
