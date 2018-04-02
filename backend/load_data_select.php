 <?php  
 //fetch.php  
 if(isset($_POST["id"]))  
 {  
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "taas");  
      $query = "SELECT * FROM user_details INNER JOIN gallary ON user_details.id = gallary.image_id ORDER BY id desc";
      $result = mysqli_query($connect, $query);  
      while($row = mysqli_fetch_array($result))  
      {  
           $output = '  
                <p><img src="'.$row["image"].'" class="img-responsive img-thumbnail" /></p>  
                <p><label>Name : '.$row['name'].'</label></p>  
                <p><label>Address : </label><br />'.$row['place_id'].'</p>  
                <p><label>Gender : </label>'.$row['gender'].'</p>  
                <p><label>Designation : </label>'.$row['description'].'</p>  
                <p><label>Age : </label>'.$row['dob'].' Years</p>  
           ';  
      }  
      echo $output;  
 }  
 ?>  