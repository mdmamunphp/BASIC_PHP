<?php
function randStr($length){

}
function checkExt($field){
    $ext = "";
    if($_FILES[$field]['name']){
      $extension = pathinfo($_FILES[$field]['name']);
      $ext = strtolower($extension['extension']);
      if($ext != 'jpg' && $ext != 'png' && $ext != 'gif' && $ext != 'jpeg'  && $ext != 'pdf'){
        $ext = "";
      }
    }
    return $ext;
}
function Redirect($url){
  echo "<script>self.location='{$url}';</script>";
  die();
}

function cutWordString($string, $strword, $strchar){
  $str = $string;
  $givenCharect = $strchar;
  $givenWord = $strword;
  $Character = substr($str, 0, $givenCharect);
  $Word = str_word_count($Character);

  if(strlen($str) < $Character) {
    $strRestult = wordwrap($str, strlen($str));
    $strRestult = explode("\n", $strRestult);
    $strRestult = $strRestult[0] ." <a href='#'>Read more</a>";
    echo $strRestult;
  } else{
    if($Word > $givenWord){
      echo "<h1>You can give at least ".$givenWord." words.</h1>";
    }else{
       $strRestult = wordwrap($str, $givenCharect);
       $strRestult = explode("\n", $strRestult);
       $strRestult = $strRestult[0] ."....";
       echo $strRestult;
    }
  }

};


//echo "<br/>====================<br/>";
//cutWordString($string1, 10, 70);
