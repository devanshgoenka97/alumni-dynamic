<?php
session_start();
if(isset($_SESSION['admin'])){
  header('Location: src/logout.php');
}
?>
<!DOCTYPE html>
<html lang="en">

	<head>
		<title>NIT Durgapur Alumni Cell</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">  
        <link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="../css/mdb.css">
        <link rel="stylesheet" href="../css/layout.css">
        <link rel="stylesheet" href="../css/content.css">
        <link rel="stylesheet" href="../css/responsive.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="static/js/loader.js"></script>
	</head>
    
    <body>
        <div id="overlay">
            <img src="static/img/loader.gif" id="loader" />
        </div>
    	<header class="header container-fluid" id="header">
            <div class="row header-text">
            <img class="logo col-md-1" src="../static/img/blue-logo.png"/>
            <div class="primary-header-text col-md-5">
            <h3 class="primary-text">
                National Institute of Technology Durgapur
                <p class="sub-header">(An Institute of National Importance under Government of India, Ministry of Human Resource Development).</p>
            </h3>
            </div>
            <div class="secondary-header-text col-md-4">
                <h3 class="secondary-text col-md-offset-8">
                    Alumni Cell
                </h3>
            </div>
            <div class="social-icons col-md-1">
                <a href="#"><i class="fa fa-facebook icons"></i></a>
                <a href="#"><i class="fa fa-twitter icons"></i></a>
                <a href="#"><i class="fa fa-linkedin icons"></i></a>
            </div>
            </div>
        
        <div class="nav-wrapper">
        <nav class="navbar navbar-inverse" id="navbar">
            <div class="container-fluid no-left-right-padding">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
              <span class="icon-bar"></span>                        
             </button>
             <h3 class="white-text text-center">ADMIN PORTAL</h3>
             </div>
        </nav>
        </div>

    	</header>

        <section class="container-fluid content" id="fillable">
        <form method="post" action="adminlogin.php">
    
        <div class="group">      
      <input type="text" name="id" required>
      <span class="highlight"></span>
      <span class="bar"></span>
      <label>Administrator ID</label>
    </div>
      
    <div class="group">      
      <input type="password" name="pwd" required>
      <span class="highlight"></span>
      <span class="bar"></span>
      <label>Password</label>
    </div>
    
    <input type="submit" class="btn btn-primary login"/>
  </form>
        </section>

        <footer class="footer container-fluid text-center foot">Copyright © 2017. All Rights Reserved. National Institute of Technology, Durgapur.
         </footer>
    </body>
    <script src="../static/js/custom.js"></script>
</html>