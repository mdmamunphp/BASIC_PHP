<?php

    function fileExtension($field){

        if($_FILES[$field]['name'] != ""){

            $ext = pathinfo($_FILES[$field]['name']);
            $ext = strtolower($ext['extension']);
            if($ext != "jpg" && $ext != "png" && $ext != "gif" && $ext != "jpeg" && $ext != "mp4" && $ext != "txt" && $ext != "pdf" && $ext != "docx"){

                return '';

            }

            return $ext;
          
           
        }
        return "";
    }
   function fileExt($field){

        if($_FILES[$field]['name'] != ""){

            $ext = pathinfo($_FILES[$field]['name']);
            $ext = strtolower($ext['extension']);
            if($ext != "jpg" && $ext != "png" && $ext != "gif" && $ext != "jpeg" && $ext != "mp4" && $ext != "txt" && $ext != "pdf" && $ext != "docx"){

                return '';

            }

            //return $ext;
            else if($ext == 'mp4'){
                return 'lession/video/'.$_FILES[$field]['name'];
            }
            else if($ext == 'docx'){
                return 'lession/docx/'.$_FILES[$field]['name'];
            }
            else if($ext == 'txt'){
                return 'lession/txt/'.$_FILES[$field]['name'];
            }
            else if($ext == 'pdf'){
                return 'lession/pdf/'.$_FILES[$field]['name'];
            }
         //  return 'lession'.$_FILES[$field]['name'];
           
         //  return 'lession/txt'.$_FILES[$field]['name'];
           
        }
        return "";
    }

    function textFile($field,$folder, $id){

       
       
        if ( ! write_file("{$folder}/{$id}.txt",  $field))
        {
                write_file("{$folder}/{$id}.txt", $field);
        }
       
    }




?>
