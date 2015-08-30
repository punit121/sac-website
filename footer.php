<html>
<head>
 <script src="http://maps.googleapis.com/maps/api/js"></script>
 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script>
function initialize() {
  var mapProp = {
    center:new google.maps.LatLng(22.3194444,87.30972222),
    zoom:5,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>

</head>
<body>
<div class="container" style="background-color:orange; border-style:solid; border-width:1px;border-radius:10px;">
<footer>
	<div class="row">
	  <div class="col-sm-4" id="verticalLine" >
	    <br><br><br> 
	  <center> <b>
		  Office of Alumni Affairs & International Relations,<br>
		  Indian Institute of Technology,<br>
		  Kharagpur<br>
		  Pin-721302, West Bengal, India<br>
		  Ph: 03222-282236; <br>
		  Email: alumni@hijli.iitkgp.ernet.in
		  </center>
		  </b>
		  </div>
	  <div class="col-sm-4" id="verticalLine" style="padding:10px;">
		  <div id="googleMap" style="width:380px;height:280px;"></div></div>
	  <div class="col-sm-4">
	  <form action="">
	  Contact Us:<br><br>
	  Email:<br>
	  <input type="text" name="email" placeholder="Email id">
	  <br><br>
	  Comments:<br><textarea name="comments" rows="5" cols="40" placeholder="Comment here..."></textarea>
	  <br><br>
	  <input type="submit" name="submit" value="submit">
	  </form>
	  
	  
	  </div>
	</div>
</footer>
 </div>
</body>
</html>