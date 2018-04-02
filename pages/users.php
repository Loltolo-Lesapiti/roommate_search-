<?php  
 $connect = mysqli_connect("localhost", "root", "", "taas");  
 //$query = "SELECT * FROM tbl_employee ORDER BY id desc";
 $query = "SELECT * FROM user_details INNER JOIN gallary ON user_details.id = gallary.image_id ORDER BY id desc" ;  
 $result = mysqli_query($connect, $query);  
 ?>  
 <!DOCTYPE html>  
 <html lang="en">
      <head>  
      <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

           <title>User Details</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
           <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
            <link href="../assets/css/small-business.css" rel="stylesheet">
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
           <br /><br />  
           <div class="container" style="width:800px;">  
                <h2 align="center">PHP AJAX Jquery - Load Dynamic Content in Bootstrap Popover</h2>  
                <h3 align="center">Employee Data</h3>                 
                <br /><br />  
                <div class="table-responsive">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="20%">ID</th>  
                               <th width="80%">Name</th>  
                          </tr>  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                          ?>  
                          <tr>  
                               <td><?php echo $row["id"]; ?></td>  
                               <td><a href="#" class="hover" id="<?php echo $row["id"]; ?>"><?php echo $row["name"]; ?></a></td>  
                          </tr>  
                          <?php  
                          }  
                          ?>  
                     </table>  
                </div>  
           </div>  
      </body>  
   
 <script>  
      $(document).ready(function(){  
           $('.hover').popover({  
                title:fetchData,  
                html:true,  
                placement:'right'  
           });  
           function fetchData(){  
                var fetch_data = '';  
                var element = $(this);  
                var id = element.attr("id");  
                $.ajax({  
                     url:"../backend/load_data_select.php",  
                     method:"POST",  
                     async:false,  
                     data:{id:id},  
                     success:function(data){  
                          fetch_data = data;  
                     }  
                });  
                return fetch_data;  
           }  
      });  
 </script>  

 <!-- Footer -->
    <footer class="py-5 bg-dark fixed-buttom">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
      </div>
      <!-- /.container -->
    </footer>
    </html>