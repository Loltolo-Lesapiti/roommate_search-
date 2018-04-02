<?php
  // Create database connection
 $conn = mysqli_connect("localhost", "root", "", "taas");

  // If upload button is clicked ...
  if(!empty($_POST)) {     
// Setting the variables.
 

 $email=mysqli_real_escape_string($conn, $_POST['email']);
 
 $password=mysqli_real_escape_string($conn, $_POST['password']);
//Inserting items into the database
$sql= "INSERT INTO user(email, password)
                VALUES ('$email','$password')";
    // execute query
    if(mysqli_query($conn, $sql)){
      echo "Data successfully added";
    }else{
      echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
  }

?>