<?php 

session_start();
require 'dbconnect.php'
?>

<html>
<head>
<title>Home</title>
	<meta charset="utf-8" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link type="text/css" rel="stylesheet" href="style2.css">
</head>
<body>
<!-- 
<div id="head">
    <div id='links'> <a href="signup.php"> Sign Up </a>
            <a href="login.php"> Login </a>
            <a href="#">RSS FEED </a>
            <a href="#">Archived news</a>
           </div>

   <input  id ="search"type="text"> 

</div> -->
<div id = "header">
  <div class="up">
      <div class="imag">
        <a href="https://twitter.com/" ><img src="twitter.png" class="icon" > </a>
        <a href="https://google.com/"> <img src="google.png" class="icon"></a>
        <a href="https://www.instagram.com/" ><img src="instagram.png" class="icon"></a>
        <a href="https://facebook.com/" ><img src="facebook.png" class="icon"></a>
        <a href="https://www.linkedin.com"> <img src="in.png" class="icon"></a>
      </div>
      <div>
      <input type ="text" class='search' placeholder='Search Our Website...'>
      <input type ="submit" value="SEARCH">
      </div>
  </div>

    <div class='up'>
      <div>
        <h1 class="zero" >Freshness</h1>
        <p class="zero">Free PSD Website template</p>
      </div>

      <ul class="zero" >
        <li><a href="webi.php">HOME</a></li>
        <li><a href="#" >STYLE DEMO</a></li>
        <li><a href="#" >FULL WIDTH</a></li>
        <li><a href="#" >DROPDOWN</a></li>
        <li><a href="#" >PORTFOLIO</a></li>
        <li><a href="login.php" >LOGIN</a></li>
        <li><a href="gallery.php" >GALLERY</a></li>
      </ul>
  </div>
</div>
