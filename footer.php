<html>
<head>
 <script src="http://maps.googleapis.com/maps/api/js"></script>
 
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
<div class="container" >
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
	  <div class="col-sm-4" id="verticalLine" >
		  <div id="googleMap" style="width:380px;height:300px;"></div></div>
	  <div class="col-sm-4">
	  <form action="submit.php" method="post">
	  <h3>Contact Us:</h3>
	  <br>
	  <input type="text" name="email" placeholder="Email"/>
	  <br><br>
	  <br>
	  <textarea name="comment" rows="5" cols="40" placeholder="comments here" ></textarea>
	  <br><br>
	  
	  <input type="submit" >
	  </form>
	  
	  
	  </div>
	</div>
</footer>
 </div>
</body>
</html>