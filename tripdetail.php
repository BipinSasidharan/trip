<?php
 session_start();  
    include ("index.php");
    
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">       

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>       

<link rel="stylesheet" type="text/css" href="display.css">

 
    </head>
    <body>
    <div class="container">

  <div class="col-md-12">

    <div class="">

   

     <?php

      include('index.php'); 

  $query= "select * from trip";

 

$s=mysqli_query($conn, $query);
  
 

while ($row=mysqli_fetch_array($s)) {

  ?>

  <?php

  echo "<div class='row col-md-4'>";

  $image = $row['T_image'];

  echo "<img src=\"image/$image\" alt=\"Nature\" width=\"300px\" height=\"180px\">";

 

echo "<br />name:".$row['T_name'];?> <br>

<?php

echo "start date:".$row['T_sdate']; ?> <br>

<?php

echo "end date:".$row['T_edate']; ?> <br>

<?php

echo "user id:".$row['U_id']; ?> <br>

<tr align="Right">
<td colspan="2"><label>
<input type="submit" name="submit" value="Edit">
</label></td>
</tr>


<tr align="Right">
<td colspan="2"><label>
<input type="submit" name="submit" value="Delete">
</label></td>
</tr>



  <?php

  echo "</div>";

  }

  ?>

</div>       
          </div>
        
        





    </body>
</html>
