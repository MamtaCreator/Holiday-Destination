<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: Llogin.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: Llogin.php");
  }
?>
<html>
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <title>Holiday Destinationse</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="h2.css">

  <style>
.mySlides {display:none;}
body {background:rgb(119, 6, 6);}
h3,h2{
 color:white;

}

      </style>
</head>
<body>
    
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Holiday Destinations</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Careers</a></li>
      <li><a href="Mice.htm">Mice tour</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">about us <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="HContactus.html">contact us</a></li>
          
        </ul>
      </li>
      <li><a href="#">FAQS</a></li>
    </ul>
</li>





    <ul class="nav navbar-nav navbar-right">
      <li><a href="Hregister.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="Llogin.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
  


<body>
    <div class="col-sm-10 col-md-10 col-lg-10 right-box ">
        <div class="pull-left">
            <form action="file:///C:/Users/acer/Desktop/holiday/holiday.htm" id="formsearch"  method="post" accept-charset="utf-8">                            
            <input type="text" value="" class="form-control pull-left search-box typeahead" id="search-box" placeholder="Enter your destination:Country" autocomplete="off" style="width:530px; margin: 0px;">
            <input type="hidden" id="searchkey" name="searchkey" class="form_control"/>
            <input type="submit" class="btn btn-info green-btn search" id="search" value="Search"/>
            <div class="alert alert-danger clear" id="error" style="display:none; padding:7px 10px;">Required</div>
            
</form> </div>


<img class="mySlides" src="https://cdn-images-1.medium.com/max/2000/1*kfoZJqoU5IDWz-u7ZclDtQ.jpeg">
<img class="mySlides" src="https://www.customtravelsolutions.com/wp-content/uploads/2017/11/corporate-travel.jpg">
<img class="mySlides" src="http://art.montana.edu/images/10960171_10202301972631261_8606739365906117411_o.jpg">
<img class="mySlides" src="http://mastertvl.com/royalslider/images/cruise.jpg">


<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

<div class="w3-content w3-padding" style="max-width:1564px">

  <!-- Project Section -->
  <div class="container padding-32" id="projects">
    <h3 class="w3-border-bottom w3-border-green w3-padding-16">Top Destinations</h3>
  </div><a class="product-img" href="file:///C:/Users/acer/Desktop/holiday/holiday.htm">

  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Summer House</div>
        <img src="http://www.mcm-backpacks.com/img/2018/07/vacation-spots-hotels-top-destinations-the-world-spot-destination-ten-travel-holiday-resorts-hottest-cool-new-good-around-couples-popular-list-perfect-worldwide-amazing-locations.jpg" alt="House" style="width:100%">
      
	  <div class="product-price"> <span class='pricesymbol'>`</span>91000 ONWARDS</h6></div>
    </div> 
</div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Winter House</div>
		<a class="product-img" href="file:///C:/Users/acer/Desktop/holiday/holiday.htm">
        <img src="http://www.mcm-backpacks.com/img/2018/07/most-popular-travel-destinations-the-world-live-enhanced-top-holiday-number-vacation-spot-upcoming-ten-good-countries-sites-what-one-destination-beautiful-spots-list-great-resorts-1160x725.jpg" alt="House" style="width:100%">
     <div class="product-price"> <span class='pricesymbol'>`</span>51000 ONWARDS</h6></div>
    
	  </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">World's Top Travel Destination
</div><a class="product-img" href="file:///C:/Users/acer/Desktop/holiday/holiday.htm">
        <img src="https://media1.popsugar-assets.com/files/thumbor/1pGFf_5VylqkKRv1vDDC_prP5j4/fit-in/1024x1024/filters:format_auto-!!-:strip_icc-!!-/2014/04/08/792/n/1922441/0794fbe8429de7ef_shutterstock_158570477/i/Istanbul-Turkey.jpg" alt="House" style="width:100%">
      <div class="product-price"> <span class='pricesymbol'>`</span>81000 ONWARDS</h6></div>
    
	  </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Best Places to visit</div>
		<a class="product-img" href="file:///C:/Users/acer/Desktop/holiday/holiday.htm">
        <img src="https://www.usnews.com/dims4/USNEWS/b32d9e5/2147483647/resize/1200x%3E/quality/85/?url=http%3A%2F%2Fmedia.beam.usnews.com%2Ffe%2F3d%2F5c0e07984bc2b8460de68fb8add8%2F160203-machupicchu-stock.jpg" alt="House" style="width:100%">
      <div class="product-price"> <span class='pricesymbol'>`</span>71000 ONWARDS</h6></div>
    
	  </div>
    </div>
  </div>

  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Most Beautiful Places to visit</div>
		<a class="product-img" href="file:///C:/Users/acer/Desktop/holiday/holiday.htm">
        <img src="https://thumbor.forbes.com/thumbor/960x0/https%3A%2F%2Fblogs-images.forbes.com%2Ftrevornace%2Ffiles%2F2015%2F11%2Fbeautiful-places-world-1200x900.jpg" alt="House" style="width:99%">
      <div class="product-price"> <span class='pricesymbol'>`</span>31000 ONWARDS</h6></div>
    
	  </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Africa’s Best Budget Travel Destination</div>
		<a class="product-img" href="file:///C:/Users/acer/Desktop/holiday/holiday.htm">
        <img src="https://d255me3ukr1mgj.cloudfront.net/images/general/mala1486486519471_aspR_1.715_w1475_h860_e.jpg" alt="House" style="width:99%">
      <div class="product-price"> <span class='pricesymbol'>`</span>61000 ONWARDS</h6></div>
    
	  </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">The Affordable Destinations Travel Top Vacation Cities</div>
		<a class="product-img" href="file:///C:/Users/acer/Desktop/holiday/holiday.htm">
        <img src="http://www.mcm-backpacks.com/img/2018/07/the-affordable-destinations-travel-top-vacation-cities-composite-number-one-destination-holiday-spots-great-vacations-nice-spot-world-ten-couples-sites-popular-good-family-fun-1160x773.jpg" alt="House" style="width:99%">
      <div class="product-price"> <span class='pricesymbol'>`</span>21000 ONWARDS</h6></div>
    
	  </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Warm Places In The World</div>
		 <a class="product-img" href="file:///C:/Users/acer/Desktop/holiday/holiday.htm">
        
	<img src="https://thumbor.forbes.com/thumbor/960x0/https%3A%2F%2Fblogs-images.forbes.com%2Ftrevornace%2Ffiles%2F2015%2F11%2Fkauai-hawaii-1200x718.jpg"  style="width:99%" title="Romance in Reunion Island" alt="Romance in Reunion Island">
<div class="product-price"> <span class='pricesymbol'>`</span>111000 ONWARDS</h6></div>
    
	</div>
    </div>
  </div>
  <center>
  <div class="content-bottom">
  <h2 style="text-align:center" class="bottom-headding">Holiday Box Type</h2>
  <div class="center-section type-module">
<ul class="nav nav-pills">
<li class="circle-box"> <a class="" href="file:///C:/Users/acer/Desktop/holiday/holiday.htm"><img class="cicle-image" width="100" height="100" title="" alt="" src="https://theundercoverrecruiter.com/wp-content/uploads/2015/07/holiday.jpg">
        <div class="category-name">HolidaysBox Special</div>
        
		<li class="circle-box"> <a class="" href="file:///C:/Users/acer/Desktop/holiday/holiday.htm"><img class="cicle-image" width="100" height="100" title="" alt="" src="http://www.holidaysbox.com/uploads/thumbnails/honeymoon.jpg">
        <div class="category-name">Honeymoon</div>
        
		<li class="circle-box"> <a class="" href="file:///C:/Users/acer/Desktop/holiday/holiday.htm"><img class="cicle-image" width="100" height="100" title="" alt="" src="http://www.holidaysbox.com/uploads/thumbnails/adventure3.jpg">
        <div class="category-name">Adventure</div>
		<li class="circle-box"> <a class="" href="file:///C:/Users/acer/Desktop/holiday/holiday.htm"><img class="cicle-image" width="100" height="100" title="" alt="" src="http://www.holidaysbox.com/uploads/thumbnails/family1.jpg">
        <div class="category-name">Family</div>
        </a></li>
		
		</ul>
		</center>
		</div>
</div>
<div class="footer-section">
  <div class="footer-module text-center"> <a class="footera" href="file:///C:/Users/acer/Desktop/holiday/holiday.htm">Home</a> 
	    <a class="footera" href="file:///C:/Users/acer/Desktop/holiday/holiday.htm">About Us</a> 
        <a class="footera" href="file:///C:/Users/acer/Desktop/holiday/holiday.htm">Faq</a> 
        <a class="footera" href="file:///C:/Users/acer/Desktop/holiday/holiday.htm">Careers</a> 
        <a class="footera" href="file:///C:/Users/acer/Desktop/holiday/holiday.htm">MICE Tours</a> 
        <a class="footera"  href="file:///C:/Users/acer/Desktop/holiday/holiday.htm">Holiday Destinations</a> | <a class="footera"  href="file:///C:/Users/acer/Desktop/holiday/holiday.htm">Contact Us</a>
    </ul>
    <p class="footer-text">Copyright &copy; 2014-2017 holidaysbox.com. All Rights Reserved.</p>
  </div>
</div>



<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="Llogin.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>
		
</body>
</html>