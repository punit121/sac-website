<!DOCTYPE html>
<html lang="en">
<head>
  <title>A-CELL WEBSITE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
 
  
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
	 
  }
  
  .box
  {
		background-color:orange;
	
  }
  
 body{
	 background-image:url('2.jpg');
 }
  
  </style>
   <script>
    $('#myCarousel').carousel
    ({
        interval: 2000,


        })

    </script>
</head>
<body>


<div class="container">

<div class="container">
  <br>
  <div class="jumbotron" style="background-color:deepskyblue;text-color:white;height:30%;">
    <center> 
  <h1>STUDENTS' ALUMNI CELL</h1>
  </center>
  </div>
  <?php include 'navbar.php' ; ?>

  <div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators" >
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
	   <img src="img/team.jpg" alt="" class="img-responsive" width="460" height="345">
       
		<div class="carousel-caption">
		<h3>
		OUR TEAM
		</h3>
		</div>
      </div>

      <div class="item">
        <img src="img/meet.jpg" alt="meet" class="img-responsive" width="460" height="345">
		<div class="carousel-caption">
		<h3>
			ALUMNI MEET
		</h3>
		</div>
      </div>
    
      <div class="item">
        <img src="img/squarelogo.jpg" alt="squarelogo" class="img-responsive" width="460" height="245">
		<div class="carousel-caption">
		<h3>
		SquareLogo
		</h3>
		</div>
      </div>
	  </div>
	  </div>
	  </div>
	  <hr>
	 <br><br>
<div class="container">
      <div class="row">
    <div  class="col-sm-4">
      <div class="box">
	  <h3>Column 1</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
	</div>
	
    <div  class="col-sm-4">
	<div class="box">
      <h3>Column 2</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
	</div>
    <div  class="col-sm-4">
	<div class="box">
      <h3>Column 3</h3>        
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
   </div>
  </div>
</div>

</div>
<?php include 'footer.php'; ?>
 </div>
 
</body>
</html>
