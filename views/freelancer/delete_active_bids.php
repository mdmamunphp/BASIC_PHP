<?php

if($_SERVER['REQUEST_METHOD']= 'GET'){
$sql = $_GET['id'];
$m = new Models();
  $m->deleted('applicants',$sql );
  }
  echo "ok";
  // Redirect('index.php?fre=my-active-bids');
?>
