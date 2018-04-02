<?php  
//Connecting to database 
$conn= mysqli_connect("localhost", "root", "", "taas");

 if($_FILES['file']['name'] != '')  
 {  
      $output="";
      //$name=$_POST['Nickname'];
      $value=explode(".", $_FILES['file']['name']);
      $extension = end( $value);  
      $allowed_type = array("jpg", "jpeg", "png", "gif", "JPG", "JPEG", "PNG", "GIF");  
      if(in_array($extension, $allowed_type))  
      {  
           $new_name = rand() . "." . $extension;  
           $path = "../assets/images/" . $new_name;
           $url=substr_replace($path, "", 0,3);  
           if(move_uploaded_file($_FILES['file']['tmp_name'], $path))  
           {  
                echo '  
                     <div class="col-md-8">       
                          <img src="'.$path.'" class="img-responsive" width="200" height="200"  />  
                     </div>  
                     <div class="col-md-4">  
                          <button type="button" data-path="'.$path.'" id="remove_button" class="btn btn-danger">x</button>  
                     </div>
                      
                     '; 
                     //Inserting items into the database
        $sql= "INSERT INTO gallary(image)
                VALUES ('$path')";
    // execute query
    if(mysqli_query($conn, $sql)){
      echo "Data successfully added";
    }else{
      echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn); 
           }
      }  
      else  
      {  
           echo '<script>alert("Invalid File Formate")</script>';  
      }  
 }  
 else  
 {  
      echo '<script>alert("Please Select File")</script>';  
 } 
 } 
 ?>  