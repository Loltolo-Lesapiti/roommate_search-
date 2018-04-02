<?php  
 //delete.php
 include "image_upload.php";
 if(!empty($_POST["path"]))  
 {  
      if(unlink($_POST["path"]))  
      {  
           echo 'Image Deleted';

           $sql="DELETE FROM gallary WHERE image= $path";
           $result = mysqli_query($connect, $sql);
      }  
 }  
 ?>  