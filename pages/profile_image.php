<!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | PHP Upload & Remove using Ajax Jquery</title>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:500px;">  
                <form id="submit_form" action="upload.php" method="post">  
                     <div class="form-group">  
                          <label>Select Image</label>  
                          <input type="file" name="file" id="image_file" class="form-control" />  
                          <span class="help-block">Allowed File Type - jpg, jpeg, png, gif</span>  
                     </div>  
                     <input type="submit" name="upload_button" class="btn btn-info" value="Upload" />  
                </form>  
                <br />  
                <h3 align="center">Image Preview</h3>  
                <div id="image_preview">  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#submit_form').on('submit', function(e){  
           e.preventDefault();  
           $.ajax({  
                url:"../backend/image_upload.php",  
                method:"POST",  
                data:new FormData(this),  
                contentType:false,  
                //cache:false,  
                processData:false,  
                success:function(data)  
                {  
                     $('#image_preview').html(data);  
                     $('#image_file').val('');  
                }  
           })  
      });  
      $(document).on('click', '#remove_button', function(){  
           if(confirm("Are you sure you want to remove this image?"))  
           {  
                var path = $('#remove_button').data("path");  
                $.ajax({  
                     url:"delete.php",  
                     type:"POST",  
                     data:{path:path},  
                     success:function(data){  
                          if(data != '')  
                          {  
                               $('#image_preview').html('');  
                          }  
                     }  
                });  
           }  
           else  
           {  
                return false;  
           }  
      });  
 });  
 </script>  