<html>
<head>
<style>
#nav-head
{
	background-color:#2F1000;
	color:black;
}

ul li a.drop-li1:hover
{
	background-color:#17BEBB;
	color:white;
}
ul li a.drop-li1
{
	color:#FBFFFE;
}
ul li a.drop-li2:hover
{
	background-color:#ef3e36;
	color:white;
}
ul li a.drop-li2
{
	color:#FBFFFE;
}

#heading1
{
	width:137px;
	height:60px;
	text-align:center;
	color:#FBFFFE;
	font-weight:bold;
	margin-left:10%;
}
#heading1:hover,#heading1:visited,#heading1:active
{
	background-color:#17BEBB;
}
#heading2
{
	width:137px;
	height:60px;
	text-align:center;
	color:#FBFFFE;
	font-weight:bold;
}
#heading2:hover
{
	background-color:#6D676E;
}

#heading3
{
	width:137px;
	height:60px;
	text-align:center;
	color:#FBFFFE;
	font-weight:bold;
}
#heading3:hover
{
	background-color:#96031A;
}

#heading4
{
	width:137px;
	height:60px;
	text-align:center;
	color:#FBFFFE;
	font-weight:bold;
}
#heading4:hover
{
	background-color:#80D39B;
}

#heading5
{
	width:137px;
	height:60px;
	text-align:center;
	color:#FBFFFE;
	font-weight:bold;
}
#heading5:hover,#heading5:visited,#heading5:active
{
	background-color:#ef3e36;
}


</style>
 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-default" id="nav-head">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-example">
        <i class="fa fa-bars" style="color: white;"></i>
        <span class="sr-only">Toggle Navigation</span>
        <span class="sr-only"></span>
        <span class="sr-only"></span>
        <span class="sr-only"></span>
      </button>
      <a href="./index.php" class="navbar-brand">
        <!-- <img src="img/home.png" alt="" /> -->
        <i class="fa fa-home"></i>
      </a>
    </div>
    <div class="collapse navbar-collapse" id="navbar-example">
      <ul class="nav navbar-nav">
        <li class="dropdown"><a href="#" id="heading1" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><div>HEADING1 <span class="caret"></span></div></a>
		  <ul class="dropdown-menu" style="background-color:#2F1000">
		    <li><a href="#" class="drop-li1">LIST1</a></li>
            <li><a href="#" class="drop-li1">LIST2</a></li>
            <li><a href="#" class="drop-li1">LIST3</a></li>
            <li><a href="#" class="drop-li1">LIST4</a></li>
		  </ul>
	    </li>

        <li><a href="#" id="heading2">HEADING2</a></li>
        <li><a href="#" id="heading3">HEADING3</a></li>
		<li><a href="#" id="heading4">HEADING4</a></li>

        <li class="dropdown">
          <a href="#" id="heading5" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">HEADING5 <span class="caret"></span></a>
          <ul class="dropdown-menu" style="background-color:#2F1000;">
            <li><a href="#" class="drop-li2">LIST1</a></li>
            <li><a href="#" class="drop-li2">LIST2</a></li>
            <li><a href="#" class="drop-li2">LIST3</a></li>
            <li><a href="#" class="drop-li2">LIST4</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
</body>
</html>