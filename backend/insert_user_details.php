<?php
//insert.php  
$connect = mysqli_connect("localhost", "root", "", "taas");
if(!empty($_POST))
{
 $output = '';
 $dob=mysqli_real_escape_string($connect, $_POST['dob']);
 
 $place=mysqli_real_escape_string($connect, $_POST['place']);
 
 $name=mysqli_real_escape_string($connect, $_POST['name']);
 
 $price=mysqli_real_escape_string($connect, $_POST['price']);
 
 $description=mysqli_real_escape_string($connect, $_POST['msg']);
 
 $gender=mysqli_real_escape_string($connect, $_POST['gender']);

   $query = "INSERT INTO user_details(name, dob, gender, price, place_id, description)
                  VALUES ('$name','$dob','$gender','$price','$place','$description')";
    if(mysqli_query($connect, $query))
    {
     
    }
    header('location:../pages/profile_image.php');
     
}
?>
