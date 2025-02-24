<!DOCTYPE html>
<html>
<head>

<style>
.navbar{
	 width:100%;
	 background-color:#555;
     text-align:center;
	 position:0;
	 overflow:auto;
}
.navbar a{
	 float:left;
	 text-align:center;
	 padding:12px;
	 color:white;
	 text-decoration:none;
	 font-size:8px;
}
.navbar a:hover{
	 background-color:#CE5937;
}
.action{
	 background-color:#04AA6D;
}

@media screen and (max-width:500px){
.navbar a{
	 float:none;
	 display:block;
}
}

body{ 
    background-color: rgb()270,270,270,270;
    font-family: Arial, sans-serif;
    
}

h1{
	position: abolute;
	top:0px;
	left: 500px;
	width:250px;
	color:#efefef;	
}
h5{
	color:green;
}
p{ 
   color:brown; 
   padding:5px;
   margin:0px;
   font-size:12px;
   
}
p {
height: 75%;
width: 75%;
}
.google-map{
	padding:50%;
	position:relative;
	}
.google-map iframe{
	 height:25%;
	 width:25%;
	 left:0;
	 top:0;
	 position:absolute;
}


</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax.libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="navbar">
     <a class="homepage.php" href="ink.php"><i class ="fa fa-fw fa-home"></i>Home</a>
	 <a href="artists.php"><i class="fa fa-fw fa-search"></i>Artists</a>
	 <a href="tattooHistory.php"><i class="fa fa-fw fa-envelope"></i>History of tattoos</a>
	 <a href="inkGallery.php"><i class="fa fw-user"></i>Gallery</a>
	 <a href="about.php"><i class="fa fw-user"></i>About</a>

</div>



<h1><Center>About Us</center></h1>
<p align="center">
Welcome to the heart of creativity—where passion meets perseverance. We are a local Black-owned creative art studio born from humble beginnings and driven by the relentless pursuit of our dreams. Our story reflects the raw struggle of turning ambition into reality, transforming challenges into a powerful canvas of expression.

Inspired by the grey areas of life—those moments of ambiguity and adversity—we find beauty in the ashes. It’s in the contrast, the shadows, and the unspoken stories where our artistry flourishes. This philosophy shapes every piece we create, breathing life into works that resonate with authenticity and bold originality.

From Hatfield to Randburg, we’ve grown to become one of the biggest studios in Gauteng, with a presence that stretches across the province. But our roots keep us grounded, and our vision keeps us soaring. We are mavericks of the creative world—pioneers of possibility—crafting experiences that are as provocative as they are beautiful.

Join us on this journey as we continue to shape the narrative of creativity, passion, and resilience

</p>
<hr color="red">
</head>
<body>

<h5>Google map:</h5>
<div id="google-map"  style="width:100%;weight:100%;"></div>
<script> function my_google(){
     var mamProp={
		 center:new
		 google.maps.LatLng(51.508742, -0.120850),zoom:5,
		 };
var map=new google.maps.Map(document.getElementById(
"googleMap"),mapProp);		 
	}
</script>

<div class="google-map">
<iframe src="https://maps.app.goo.gl/52KjEExZZRk14xun8"width="150px"  height="140px" style="border:0;" allowfullscreen="" loading="lazy"  referrerpolicy="no-referrer-when-downgrade"  >  </iframe>
</div>






</div>



</body>
</html>