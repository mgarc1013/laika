<!DOCTYPE html>
<html lang="en">

 <head>
    


  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Arima+Madurai|Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=ABeeZee|Gugi" rel="stylesheet">
  <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection"/>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"> <!--ensures proper rendering and touch zooming. Sets page width to screen width and sets initial zoom level to 1 - no zoom-->
  <!--materialize css-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
  <!--external stylesheet-->
  <link href="css/style.css" rel="stylesheet">
    
	<title>Liaka | Home</title>
	
	</head>
   


<body>
<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script> <!--jQuery-->
<script src="js/UFO.js"></script>
  <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA77w-Gx9VoU63wjpWgzwmWoQ6iQbq1mQg
    &callback=initMap">
    </script>

  <nav>
      <div class="nav-wrapper">
        <a href="index.html" class="brand-logo"><img class="responsive-img" src="images/laikalogo.png"></a></a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
		  <li><a class="active" href="index.html"><span class="hide-on-med-and-down">Home</span></a></li>
          <li><a href="learn.html"><span class="hide-on-med-and-down">Learn</span></a></li>
          <li><a href="fun.php"><span class="hide-on-med-and-down">Fun</span></a></li>
          <li><a href="about.html"><span class="hide-on-med-and-down">About</span></a></li>
		
      </div>
  </nav>  
      <!--hamburger menu-->
    <ul class="side-nav" id="mobile-demo">
          <li><a href="index.html">Home</a></li>
          <li><a href="learn.html">Learn</a></li>
          <li><a href="fun.php">Fun</a></li>
          <li><a href="about.html">About</a></li>
    </ul>

<a id="button"></a>

<div class="container">
    <div class="section map-container">
      <div>
          <div id="map"></div>
      </div>
    </div>
    <br><br>
  </div>

<div id="ufo-data">

<?php
  $json = file_get_contents('https://ufo-api.herokuapp.com/api/sightings/location/near?lat=37.09024&lon=-95.712891&radius=1000&limit=1000');
    echo $json;
  ?>
</div>	

<br><br><br><br><br><br>
<br><br><br><br><br><br>
<br><br><br><br><br><br>
<br><br><br><br><br><br>

	
<footer class="page-footer" style="background-color: #6300cc;">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h6 style="color: white;">Children's Learning Space</h6>
                <p style="color: white;">Laika is a site that......</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h6 style="color: white">Explore</h6>
                <ul>
                  <li><a style="color: white" href="index.html">Home</a></li>
                  <li><a style="color: white;" href="learn.html">Learn</a></li>
                  <li><a style="color: white;" href="fun.html">Fun</a></li>
                  <li><a style="color: white;" href="about.html">About</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright" style="background-color: #44008B;">
            <div class="container">
              <h6> &copy; Laika 2018 </h6>
            </div>
          </div>
</footer>		
		
		<!-- Bootstrap CSS CDN -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!--<link rel="stylesheet" href="resources/bootstrap/css/bootstrap.min.css">--> <!--Bootstrap local. You'd also have to load the JS file at the bottom of this file if you wanted to go local-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> 
        <!--JS is loaded at the end of the body to reduce page load time-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script> <!--Materialize JS-->
        <!--hamburger menu-->
         <script>
           $(document).ready(function(){
              $(".button-collapse").sideNav();
              
            });
         </script>
        <!--//hamburger menu-->
	
<!-- PARALLAX-->
<script>
jQuery(document).ready(function(){
  $(window).scroll(function(e){
  	parallaxScroll();
	});
	 
	function parallaxScroll(){
		var scrolled = $(window).scrollTop();
		$('#parallax-bg-1').css('top',(0-(scrolled*.25))+'px');
		$('#parallax-bg-2').css('top',(0-(scrolled*.4))+'px');
		$('#parallax-bg-3').css('top',(0-(scrolled*.75))+'px');
	}
 
 }); 
 </script>
	
<!--HOME PAGE SLIDER-->
<script>
$(document).ready(function(){
  $('.slider').slider();
});
</script>
	
<!--TO TOP BUTTON-->
<script>
var btn = $('#button');

$(window).scroll(function() {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '300');
});
</script>	
	
</body>
</html>