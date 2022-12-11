<?php
if(isset($_GET['id'])){
    $bid=$_GET['id'];

include "buyers_submenu.php";





?>
<!-- Dashboard Content
================================================== -->
<div class="dashboard-content-container" data-simplebar>
  <div class="dashboard-content-inner" >

    <!-- Dashboard Headline -->
    <div class="dashboard-headline">
      <h3>Reviews</h3>

      <!-- Breadcrumbs -->
      <nav id="breadcrumbs" class="dark">
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">Dashboard</a></li>
          <li>Reviews</li>
        </ul>
      </nav>
    </div>

    <!-- Row -->
    <div class="row">

      <!-- Dashboard Box -->
      <div class="col-xl-6">
        <div class="dashboard-box margin-top-0">

          <!-- Headline -->
          <div class="headline">
            <h3><i class="icon-material-outline-business"></i> Rate Emoloyeer</h3>
          </div>

          <div class="content">
            <ul class="dashboard-box-list">
              <?php
               $m = new Models();
              $arr =array(
                'category.id'=>'jobs.category_id',
                'freelancers.id'=>'jobs.freelancer_id',
                'buyer_id' => $bid
              );
              $select = "jobs.*, freelancers.name as fname, category.name as cname";
              $table ="jobs, freelancers, category";
                if($sql = $m->View($select, $table, "", "", $arr)){
              while($data=$sql->fetch_object()){
                  $id = $data->id;
                  $results = $data->buyer_rating;

                  if($results < 1){
                    echo "ok";

               ?>
              <li>
                <div class="boxed-list-item">
                  <!-- Content -->
                  <div class="item-content">
                    <h4><?php echo $data->cname; ?></h4>
                    <span class="company-not-rated margin-bottom-5">Not Rated</span>
                  </div>
                </div>

                <a href="#small-dialog-2" class="popup-with-zoom-anim button ripple-effect margin-top-5 margin-bottom-10"><i class="icon-material-outline-thumb-up"></i> Leave a Review</a>
              </li>
          <?php
          }
              if($results > 0){

           ?>
              <li>
                <div class="boxed-list-item">
                  <!-- Content -->
                  <div class="item-content">
                    <h4><?php echo $data->cname; ?></h4>
                    <div class="item-details margin-top-10">
                      <div class="star-rating" data-rating="5.0"></div>
                      <div class="detail-item"><i class="icon-material-outline-date-range"></i> May 2019</div>
                    </div>
                    <div class="item-description">
                      <p>Great clarity in specification and communication. I got payment really fast. Really recommend this employer for his professionalism. I will work for him again with pleasure.</p>
                    </div>
                  </div>
                </div>
                <a href="#small-dialog-1" class="popup-with-zoom-anim button gray ripple-effect margin-top-5 margin-bottom-10"><i class="icon-feather-edit"></i> Edit Review</a>
              </li>

              <?php
            }
            }
          }

               ?>

            </ul>
          </div>
        </div>

        <!-- Pagination -->
        <div class="clearfix"></div>
        <div class="pagination-container margin-top-40 margin-bottom-0">
          <nav class="pagination">
            <ul>
              <li><a href="#" class="ripple-effect current-page">1</a></li>
              <li><a href="#" class="ripple-effect">2</a></li>
              <li><a href="#" class="ripple-effect">3</a></li>
              <li class="pagination-arrow"><a href="#" class="ripple-effect"><i class="icon-material-outline-keyboard-arrow-right"></i></a></li>
            </ul>
          </nav>
        </div>
        <div class="clearfix"></div>
        <!-- Pagination / End -->

      </div>

      <!-- Dashboard Box -->
      <div class="col-xl-6">
        <div class="dashboard-box margin-top-0">

          <!-- Headline -->
          <div class="headline">
            <h3><i class="icon-material-outline-face"></i> Rate Freelancer</h3>
          </div>

          <div class="content">
            <ul class="dashboard-box-list">

              <?php
              $arr =array(
                'category.id'=>'jobs.category_id',
                'freelancers.id'=>'jobs.freelancer_id',
                'buyer_id' => $bid
              );
              $select = "jobs.*, freelancers.id as fid, category.name as cname";
              $table ="jobs, freelancers, category";
                if($sql = $m->View($select, $table, "", "", $arr)){
              while($data=$sql->fetch_object()){
                  $id = $data->id;
                      $fid = $data->freelancer_id;
                  $fre_rating =$data->freelancer_rating;
               if($fre_rating > 0){
                 ?>
              <li>
                <div class="boxed-list-item">
                  <!-- Content -->
                  <div class="item-content">
                    <h4><?php echo $data->cname ?></h4>
                    <div class="item-details margin-top-10">
                      <div class="star-rating" data-rating="5.0"></div>
                      <div class="detail-item"><i class="icon-material-outline-date-range"></i> August 2019</div>
                    </div>
                    <div class="item-description">
                      <p>Excellent programmer - helped me fixing small issue.</p>
                    </div>
                  </div>
                </div>
              </li>
              <?php
            }
          }
}
               ?>

            </ul>
          </div>
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



<!-- Edit Review Popup
================================================== -->
<!-- Edit Review Popup / End -->


<!-- Leave a Review for Freelancer Popup
================================================== -->
<div id="small-dialog-2" class="zoom-anim-dialog mfp-hide dialog-with-tabs">

<!--Tabs -->
<div class="sign-in-form">

  <ul class="popup-tabs-nav">
  </ul>

  <div class="popup-tabs-container">

    <!-- Tab -->
    <div class="popup-tab-content" id="tab2">

      <!-- Welcome Text -->
      <div class="welcome-text">
        <h3>Leave a Review</h3>
        <span>Rate <a href="#">Peter Valentín</a> for the project <a href="#">Simple Chrome Extension</a> </span>
      </div>

      <!-- Form -->
      <form method="post" action="index.php?buy=buy_rating&id=<?php echo $id;?>"  id="leave-review-form">
        <div class="feedback-yes-no">
          <strong>Your Rating</strong>

          <strong>
            <select name="rating_point">
              <option   value="1">One Star</option>
              <option  value="2">Two Star</option>
              <option value="3">Three Star</option>
              <option value="4">Four Star</option>
              <option value="5">Five Star</option>
            </select>

          </strong>
          <div class="leave-rating">
            <input type="radio" name="rating" id="rating-radio-1" value="1" required>
            <label for="rating-radio-1" class="icon-material-outline-star"></label>
            <input type="radio" name="rating" id="rating-radio-2" value="2" required>
            <label for="rating-radio-2" class="icon-material-outline-star"></label>
            <input type="radio" name="rating" id="rating-radio-3" value="3" required>
            <label for="rating-radio-3" class="icon-material-outline-star"></label>
            <input type="radio" name="rating" id="rating-radio-4" value="4" required>
            <label for="rating-radio-4" class="icon-material-outline-star"></label>
            <input type="radio" name="rating" id="rating-radio-5" value="5" required>
            <label for="rating-radio-5" class="icon-material-outline-star"></label>
          </div><div class="clearfix"></div>
        </div>

        <textarea class="with-border" placeholder="Comment" name="comment" id="message2" cols="7" required></textarea>

      </form>

      <!-- Button -->
      <button class="button full-width button-sliding-icon ripple-effect" type="submit" name="sub"form="leave-review-form">Leave a Review <i class="icon-material-outline-arrow-right-alt"></i></button>

    </div>

  </div>
</div>
</div>
<!-- Leave a Review Popup / End -->
<?php
};

 ?>
