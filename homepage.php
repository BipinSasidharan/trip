<?php

session_start();

$sell11 = $_SESSION['display'] ? $_SESSION['display'] :array();

?>
<html>

<head> 

<meta name="viewport" content="width=device-width,initial-scale=1">

<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>

</head>

<body>
  

<div class="container-fluid">

<nav class="navbar navbar-inverse navbar-fixed-top">
	<!--<nav class="nav navbar-default">!-->
<div class="container-fluid">
  
    <div class="navbar-header">
	
      <a class="navbar-brand" href="#"> Tour Expanse </a>
    
	</div>

    <ul class="nav navbar-nav">
	 <!-- nav nav-pills -->
      <li class="active"><a href="#">Home</a></li>
	
            <li><a href="tripregisterform.php"> Add Trip </a></li>
            
            <li><a href="ourtrip.php"> Our Trip </a></li>

	   <li class="dropdown">
    
	<a class="dropdown-toggle" data-toggle="dropdown" href="#"> Tour places
    
	<span class="caret"></span></a>
	
    <ul class="dropdown-menu">
    
	<li><a href="goa.php">Goa</a></li>

	<li><a href="daman.php">Daman</a></li>

	<li><a href="somnath.php">Somnath</a></li> 

	<li><a href="jaisalmer.php">Jaisalmer</a></li> 

	<li><a href="don.php">Don</a></li> 

    </ul>

	</li>
	  
        <li><a href="#">News <span class="badge">10</span></a></li>

	  </ul>
 
    <ul class="nav navbar-nav navbar-right">

	  
      <li><a href="index.php"><span class="glyphicon glyphicon-log-out"></span><?php echo $sell11['name']; ?> 
      Log Out</a></li>

	  </ul>
	
	</div>
	
</nav>

<br><br><br><br>


<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">

  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>

  <li data-target="#myCarousel" data-slide-to="1"></li>

  <li data-target="#myCarousel" data-slide-to="2"></li>

  <li data-target="#myCarousel" data-slide-to="3"></li>

  <li data-target="#myCarousel" data-slide-to="4"></li>

</ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">

  <div class="item active">

      <img src="Image/kyoto1.jpg" alt="Goa" height=500 width=1500>

 </div>

      
  <div class="item">

    <img src="Image/goa1.jpg" alt="Goa" height=500 width=1500>

  </div>

  <div class="item">
	
      <img src="Image/kyoto2.jpg" alt="daman"height=500 width=1500> 

  </div>

    <div class="item">

	<img src="Image/jaisalmer1.jpg" alt="jaisalmer"height=500 width=1500>
	
    </div>

    <div class="item">

        <img src="Image/singapur1.jpg" alt="somnath"height=500 width=1500>
	
    </div>

    <div class="item">

	<img src="Image/don1.jpg" alt="Don"height=500 width=1500>
	
    </div>

	</div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">

  <span class="glyphicon glyphicon-chevron-left"></span>

  <span class="sr-only">Previous</span>

  </a>

  <a class="right carousel-control" href="#myCarousel" data-slide="next">

  <span class="glyphicon glyphicon-chevron-right"></span>

  <span class="sr-only">Next</span>

  </a>

  </div>
	
		</div>

		</div>

</div>

</body>

</html>



