<?php  
//index.php
$connect = mysqli_connect("localhost", "root", "", "taas");
$query1 = "SELECT * FROM place";
$query2 = "SELECT * FROM user_details";
$result1 = mysqli_query($connect, $query1);
$result2 = mysqli_query($connect, $query2);
$options = "";
while($row2 = mysqli_fetch_array($result2))
{
    $options = $options."<option>$row2[1]</option>";
}
?>
<!DOCTYPE html>  
<html>  
 <head>  
  <title>Personal Info</title>  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
 </head>  
 <body>  

  <br /><br />  
  
  <div class="container" style="width:700px;">  
   <h3 align="center">User Details</h3>  
   <br />  
   <div class="table-responsive">
    <div align="right">
     <button type="button" name="age" id="age" data-toggle="modal" data-target="#add_data_Modal" class="btn btn-warning">Add</button>
    </div>
    <br />
    
    <div id="employee_table">
     <table class="table table-bordered">
     <!--
      <tr>
       <th width="70%">Employee Name</th>  
       <th width="30%">View</th>
      </tr>
      -->
      <?php
      while($row = mysqli_fetch_array($result2))
      {
      ?>
      <tr>
       <td><?php echo $row["name"]; ?></td>
       <td><input type="button" name="view" value="view" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs view_data" /></td>
      </tr>
      <?php
      }
      ?>
     </table>
    </div>

   </div>  
  </div>
  
 </body>  
</html>  

<div id="add_data_Modal" class="modal fade">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Fill you profile info: </h4>
   </div>
   <div class="modal-body">
    <form method="post" id="insert_form" >
     <label>Full name</label>
     <input type="text" name="name" id="name" class="form-control" />
     <br />
     <label>Place</label>
     <select id="place" name="place" class="form-control"><option>Select</option>
   <?php while($row1 = mysqli_fetch_array($result1)):;?>
   <option value="<?php echo $row1[0];?>" ><?php echo $row1[1];?></option>
   <?php endwhile;?>
   </select>
     <br />
     <label>Select Gender</label>
     <select name="gender" id="gender" class="form-control">
      <option value="Male">Male</option>  
      <option value="Female">Female</option>
     </select>
     <br />  
     <label>Date of Birth</label>
     <input type="date" name="dob" id="dob" class="form-control" />
     <br />
     <label>How much are you willing to pay?</label>
     <input type="text" name="price" id="price" class="form-control" />
     <br />  
     <label>Overview</label>
     <textarea id="msg" name="msg" class="form-control"></textarea>
     <br/>
     <span id="counter">0</span>(200 characters)
     <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success" />

    </form>
   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
   </div>
  </div>
 </div>
</div>

<div id="dataModal" class="modal fade">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">User Details</h4>
   </div>
   <div class="modal-body" id="employee_detail">
    
   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
   </div>
  </div>
 </div>
</div>

<script>  
$(document).ready(function(){
 $('#insert_form').on("submit", function(event){  
  event.preventDefault();  
  if($('#name').val() == "")  
  {  
   alert("Name is required");  
  }  
  else if($('#price').val() == '')  
  {  
   alert("price is required");  
  }  
  else if($('#msg').val() == '')
  {  
   alert("Overview is required");  
  }
   
  else  
  {  
   $.ajax({  
    url:"../backend/insert_user_details.php",  
    method:"POST",  
    data:$('#insert_form').serialize(),  
    beforeSend:function(){  
     $('#insert').val("Inserting");  
    },  
    success:function(data){  
     $('#insert_form')[0].reset();  
     $('#add_data_Modal').modal('hide');  
     $('#employee_table').html(data);  
    }  
   });  
  }  
 });




 $(document).on('click', '.view_data', function(){
  //$('#dataModal').modal();
  var employee_id = $(this).attr("id");
  $.ajax({
   url:"select.php",
   method:"POST",
   data:{employee_id:employee_id},
   success:function(data){
    $('#employee_detail').html(data);
    $('#dataModal').modal('show');
   }
  });
 });
});  
 </script>