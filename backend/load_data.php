<?php  
 //load_data.php  
 $connect = mysqli_connect("localhost", "root", "", "taas");  
 $output = '';  
 if(isset($_POST["brand_id"]))  
 {  
      if($_POST["brand_id"] != '')  
      {  
           //$sql = "SELECT * FROM user_details WHERE place_id = '".$_POST["brand_id"]."'";  
           $sql = "SELECT * FROM user_details INNER JOIN gallary ON user_details.name = gallary.user_name WHERE place_id = '".$_POST["brand_id"]."' ";  
      }  
      else  
      {  
           $sql = "SELECT * FROM user_details INNER JOIN gallary ON user_details.name = gallary.user_name";    
      }  
      $result = mysqli_query($connect, $sql);  
      while($row = mysqli_fetch_array($result))
      {  
      $path= $row["image"];
      $url=substr_replace($path, "", 0,3);
      ?>
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
      <div class="col-sm-2">  
                     <form method="post" action="index.php?action=add&id=<?php echo $row["id"]; ?>">  
                          <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">  
                               <img src="<?php echo $url; ?>" class="img-responsive img-circle" /><br />  
                               <h4 class="text-info"><?php echo $row["user_name"]; ?></h4>  
                               <input type="submit" name="view" style="margin-top:5px;" class="btn btn-success" value="connect" />  
                          </div>  
                     </form>  
                </div>  
  <?php
      }
 }
?>