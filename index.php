<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Taas Online Roomate Search</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">-->

    <!-- Custom styles for this template -->
    <link href="assets/css/small-business.css" rel="stylesheet">

    </style>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">TAAS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Help</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <!-- Heading Row -->
      <div class="row my-4">
        <div class="col-lg-8">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img2.png" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
    <h5>We care</h5>
    <p>Our members are everything to us. We love you.</p>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img3.jpg" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
    <h5>Meet</h5>
    <p>The best staff with incredible services on the planet</p>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img4.jpg" alt="Third slide">
  <div class="carousel-caption d-none d-md-block">
    <h5>Taas roomi</h5>
    <p>The best roommate search search in the world</p>
  </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
        </div>
        <!-- /.col-lg-8 -->
        <div class="dropdown show">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Make your first move
  </a>
  <?php  
                if(isset($_SESSION['username']))  
                {  
                ?>  
                <div align="center">  
                     <h1>Welcome - <?php echo $_SESSION['username']; ?></h1><br />  
                     <a href="#" id="logout">Logout</a>  
                </div>  
                <?php  
                }  
                ?>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" name="login" data-toggle="modal" data-target="#loginModal" >GET A ROOMMATE</a>
    <a class="dropdown-item" href="pages/login.php">POST A ROOM</a>
  </div>
</div>
        <!-- /.col-md-4 -->
      </div>
      <!-- /.row -->

      <!-- Call to Action Well -->
      <div class="card text-white bg-secondary my-4 text-center">
        <div class="card-body">
          <p class="text-white m-0">Look for your idle roommate anywhere in Nairobi with Taas</p>
        </div>
      </div>
      <!--Quick description-->
      <div id="info">
      <h3>About Taas</h3>
      <p>Taas is an online roomate search engine based in Nairobi Kenya. It allows residents moving to live in Nirobi easily secure 
       their idle roommates and settle quickly. Also, Taas allows the landlords or people with rooms and looking for the roommates 
       post their rooms/appartments in our site for easy selection by our members</p>
       <h3>Why Taas</h3>

      </div>
     <style type="text/css">
        #info{
          height: 300px;
          width: 100%;
          }
     </style>
      <!--Embending a google map to indicate our location in the map-->
      <div id="map"></div>
      <!--Styling the map-->
      <style type="text/css">
        #map{
          height: 300px;
          width: 100%;
        }
      </style>
    </div>

   <!--Login modal-->
    <div class="modal" id="loginModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">LOGIN FORM</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">  
                     <label>Email</label>  
                     <input type="text" name="email" id="email" class="form-control" />  
                     <br />  
                     <label>Password</label>  
                     <input type="password" name="password" id="password" class="form-control" />  
                     <br />  
                     <button type="button" name="login_button" id="login_button" class="btn btn-warning">Login</button>  
                </div>  
      <div class="modal-footer">
        <button type="button" name="age" id="age"  data-toggle="modal" data-target="#add_data_Modal" class="btn btn-warning" data-dismiss="modal">New User</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
 <script>  
 $(document).ready(function(){  
      $('#login_button').click(function(){  
           var email = $('#email').val();  
           var password = $('#password').val();  
           if(email != '' && password != '')  
           {  
                $.ajax({  
                     url:"backend/action.php",  
                     method:"POST",  
                     data: {email:email, password:password},  
                     success:function(data)  
                     {  
                          //alert(data);  
                          if(data == 'No')  
                          {  
                               alert("Wrong Data");  
                          }  
                          else  
                          {  
                               $('#loginModal').hide();  
                               window.location.href = "pages/users.php"; 
                          }  
                     }  
                });  
           }  
           else  
           {  
                alert("Both Fields are required");  
           }  
      });  
      $('#logout').click(function(){  
           var action = "logout";  
           $.ajax({  
                url:"action.php",  
                method:"POST",  
                data:{action:action},  
                success:function()  
                {  
                     location.reload();  
                }  
           });  
      });  
 });  
 </script>  
 
<!--Register form modal-->
 
<div id="add_data_Modal" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Registration form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="post" id="insert_form">
     <label">Email address</label>
    <input type="email" class="form-control" id="email"  name="email" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    <br/>
    <label>Password</label>
    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
    <br/>
    <label>Confirm Password</label>
    <input type="password" name="confirm_password" class="form-control" id="confirm_password" placeholder="Password">
    <br/>
    <input type="submit" name="insert" id="insert" value="Register" href="pages/user_details.php" class="btn btn-success"/>

    </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script>  
$(document).ready(function(){
  $('#insert').click(function(){
  var email = $('#email').val(); 

  var password = $('#password').val();

  var confirm_password = $('#confirm_password').val(); 

  if(email == '' && password == '' && confirm_password == ''){
   alert "Fill all the blanks";
  }
  else   
  {  
   $.ajax({  
    url:"backend/register_user.php",  
    method:"POST",  
    data:$('#insert_form').serialize(),  
    beforeSend:function(){  
     $('#insert').val("Registering");  
    },  
    success:function(data){  
     $('#insert_form')[0].reset();  
     $('#add_data_Modal').modal('hide');
      window.location.href = "pages/user_details.php"; 
      }  
   });  
  }  
 });
});  
 </script>
    <!-- Footer -->
    <footer class="py-5 bg-dark fixed-buttom">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!--Javascript tags for loading the map into the website-->
 <script>
  function initMap(){
    var location={lat:-1.290393, lng:36.816583};
    var map =new google.maps.Map(document.getElementById("map"),{

      zoom:4,
      center:location
    });
    var marker=new google.maps.Marker({
      position:location,
      map:map

    });
  }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCDHRcxD1hzR8cZu1yKUj4Yh1n0EyQGZNI&callback=initMap"> 
</script>
  </body>

</html>
