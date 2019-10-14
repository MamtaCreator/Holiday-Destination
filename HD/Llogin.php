<?php include('server.php') ?>
<!DOCTYPE html>
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
      <li><a href="carrer.htm">Careers</a></li>
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
<center>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="Llogin.php">
  	<?php include('error.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="Llogin_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="Hregister.php">Sign up</a>
  	</p>
  </form>
  </center>
</body>
</html>