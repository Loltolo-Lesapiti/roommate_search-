 <?php  
 session_start();  
 $connect = mysqli_connect("localhost", "root", "", "taas");  
 if(isset($_POST["username"]))  
 {  
      $query = "  
      SELECT * FROM user  
      WHERE email = '".$_POST["email"]."'  
      AND password = '".$_POST["password"]."'  
      ";  
      $result = mysqli_query($connect, $query);  
      if(mysqli_num_rows($result) > 0)  
      {  
           $_SESSION['username'] = $_POST['username'];  
           echo 'Yes';  
      }  
      else  
      {  
           echo 'No';  
      }  
 }  
 if(isset($_POST["action"]))  
 {  
      unset($_SESSION["username"]);  
 }  
 ?>  