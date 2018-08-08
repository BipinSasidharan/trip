<?php
session_start();

$userdata=  isset($_SESSION['udisplay']) ? $_SESSION['udisplay']:array();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            * {
                margin: 0px;
                padding: 0px;
            }
            body {
                font-size: 120%;
                background: #F8F8FF;
            }

            .header {
                width: 30%;
                margin: 50px auto 0px;
                color: white;
                background: #5F9EA0;
                text-align: center;
                border: 1px solid #B0C4DE;
                border-bottom: none;
                border-radius: 10px 10px 0px 0px;
                padding: 20px;
            }
            form, .content {
                width: 30%;
                margin: 0px auto;
                padding: 20px;
                border: 1px solid #B0C4DE;
                background: white;
                border-radius: 0px 0px 10px 10px;
            }
            .input-group {
                margin: 10px 0px 10px 0px;
            }
            .input-group label {
                display: block;
                text-align: left;
                margin: 3px;
            }
            .input-group input {
                height: 30px;
                width: 93%;
                padding: 5px 10px;
                font-size: 16px;
                border-radius: 5px;
                border: 1px solid gray;
            }
            .btn {
                padding: 10px;
                font-size: 15px;
                color: white;
                background: #5F9EA0;
                border: none;
                border-radius: 5px;
            }
            .error {
                width: 92%; 
                margin: 0px auto; 
                padding: 10px; 
                border: 1px solid #a94442; 
                color: #a94442; 
                background: #f2dede; 
                border-radius: 5px; 
                text-align: left;
            }
            .success {
                color: #3c763d; 
                background: #dff0d8; 
                border: 1px solid #3c763d;
                margin-bottom: 20px;
            }
        </style>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
    </head>
    <body>
        <div class="header">
            <h2>Trip</h2>
        </div>



        <form  action="Trip.php" method="post">

            <div class="input-group">
                <label>Trip Name</label>
                <input type="text" name="TripName" required>
            </div>


            <div class="input-group">
                <label>Trip Start Date</label>
                <input type="Date" name="TripSD" required>
            </div>


            <div class="input-group">
                <label>Trip End Date </label>
                <input type="Date" name="TripED" required>
            </div>

            <div class="input-group">
                <label>Trip User Image </label>
                <input type="file" name="TripUE" required>
            </div>


            <div class="input-group">
                <button type="submit" class="btn" name="Trip_user" >Button</button>
            </div>

            <div class="input-group">
  <!-- Trigger the modal with a button -->
  
  <button type="button" class="btn" data-toggle="modal" data-target="#myModal">Trip Add Member</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Members</h4>
        </div>
        <div class="dropdown">
            
            <label>Email</label>
            <select id="email"  name="email[]" multiple class="form-control" >

      		<?php
		  include('index.php');
		  $query = "select U_id, U_email from user";
		  $result = mysqli_query($conn,$query);
		
		while ($row = mysqli_fetch_array($result))
			{
                    
			?>
                      <br><option  value=" <?php echo $row['U_id'];?>"><br> <?php  echo $row['U_email'];?></option><br>
      <?php 
    
      }?></select>
            
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">save</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

            
            
        </form>
    </body>
</html>
