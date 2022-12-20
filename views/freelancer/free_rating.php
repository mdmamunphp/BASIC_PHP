<?php

if(isset($_GET['id'])){
echo $_GET['id'];

$msg="";


if ($msg) {
 echo $msg;
}
else {
  $m = new Models();


 $arr = array(
   "freelancer_rating" => $_POST['rating_point']


   //'picture' => $ext
 );


  if($m->Upd('jobs', $arr,$_GET['id'])){


          }


        }
      }


 ?>
