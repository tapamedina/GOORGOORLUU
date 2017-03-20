<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<title>Goorgoorlu</title>
	<link rel="stylesheet" type="text/css" href="../css/style1.css"/>
	<link rel="stylesheet" type="text/css" href="../css/notification.css">
	<link rel="stylesheet" type="text/css" href="../css/styleAccount.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--[if lt IE 7]>
	<link rel="stylesheet" href="ie.css" type="text/css">
<![endif]-->
</head>
<body>
<div id="wrap">

	<div id="header">
		<p><img src="images/logo.png" style="float: right;margin: 0.5em 2em;"></p>
	</div>

	<div id="content-wrap">
			<div class="nav-side-menu">
			    <div class="brand">Menu</div>
			    <i class=" material-icons toggle-btn" data-toggle="collapse" data-target="#menu-content">reorder</i>
			  
			        <div class="menu-list">
			            <ul id="menu-content" class="menu-content collapse out">
			                <li class="active">
			                  <a href="#">
			                  	 <i class="material-icons"> account_circle</i> 
			                  	 <span>Account</span>   	 
			                  </a>
			                </li>
			                <li data-toggle="collapse" class="collapsed">
			                	<a href="#">
			                  	 <i class="material-icons"> announcement</i>
			                  	 <span>Notifications</span>
			                   </a>
			                </li>  
			                <li data-toggle="collapse"  class="collapsed">
			                  <a href="#">	
			                    <i class="material-icons">assessment</i>
			                    <span>Statistiques</span>
			                   </a>			                   
			                </li>
			                 <li data-toggle="collapse" class="collapsed">
		                  		<a href="#"><i class="material-icons">settings</i>
		                  			<span>Parametres</span>
		                  		</a>
			                </li>
			            </ul>
			    	</div>
			</div>

			<div id="content">
				<div class="containt">
					<h1>Bienvenue</h1>
					<p>
						<img src="../images/service.png" style="padding-left: 55rem;">
					</p>	<br>			
	<div class="slideshow-container">

		<div class="mySlides fade">
			 <div class="numbertext">1 / 3</div>
			 	<img src="../images/tap1.jpg" style="width:100%">
			 <div class="text">Caption Text</div>
		</div>

		<div class="mySlides fade">
			<div class="numbertext">2 / 3</div>
			  <img src="../images/tap.jpg" style="width:100%">
			<div class="text">Caption Two</div>
		</div>

		<div class="mySlides fade">
			<div class="numbertext">3 / 3</div>
			  <img src="../images/tap3.jpg" style="width:100%">
			<div class="text">Caption Three</div>
		</div>

	</div>
	<br>
	<div style="text-align:center">
		<span class="dot"></span> 
		<span class="dot"></span> 
		<span class="dot"></span> 
	</div>

				</div>
				
			</div>
	</div>

	<div id="footer">
		<div id="labfooter">
			<p><a href="http://www.456bereastreet.com/lab/">a propos</a> | <a href="http://www.456bereastreet.com/">Conditions d'utilisations</a> | <a href="http://www.456bereastreet.com/lab/">confidentialite</a> </p>
		</div>	
	</div>

</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

</body>
</html>