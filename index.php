<?php
session_start();
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
        <link rel="stylesheet" href="css/mdb.css">
        <link rel="stylesheet" href="css/layout.css">
        <link rel="stylesheet" href="css/content.css">
        <link rel="stylesheet" href="css/responsive.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="js/loader.js"></script>
	</head>
    
    <body>
        <div id="overlay">
            <img src="img/loader.gif" id="loader" />
        </div>
    	<header class="header container-fluid" id="header">
            <div class="row header-text">
            <img class="logo col-md-1" src="img/blue-logo.png"/>
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
            <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="javascript:void(0);" id="home">Home</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);">About Us</a>
                    <ul class="dropdown-menu">
                        <li><a href="javascript:void(0);" id="aims">Objectives</a></li>
                        <li><a href="javascript:void(0);" id="messagefromdean">Message from the Dean(AOT&P)</a></li>
                        <li><a href="javascript:void(0);" id="meettheteam">Our Team</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);">Our Alumni</a>
                    <ul class="dropdown-menu">
                        <li><a href="javascript:void(0);" id="alumnistats">Alumni At A Glance</a></li>
                        <li><a href="javascript:void(0);" id="searchalumni">Search our Alumni</a></li>
                        <li><a href="javascript:void(0);" id="alumniregs">Alumni Registration</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);">Events</a>
                    <ul class="dropdown-menu">
                        <li><a href="javascript:void(0);" id="popularlectures">Invited Lecture Series</a></li>
                        <li><a href="javascript:void(0);" id="beyondthewall">Beyond The Wall Lecture Series</a></li>
                        <li><a href="javascript:void(0);" id="studentalumnimeet">Student-Alumni Meet</a></li>
                    </ul>
                </li>
                <li><a href="javascript:void(0);" id="alumniawards">Alumni Achievements</a></li>
                <li><a href="javascript:void(0);" id="givingback">Giving Back</a></li>
                <li><a href="javascript:void(0);" id="alumniservices">Alumni Services</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);">Students' Alumni Body</a>
                    <ul class="dropdown-menu">
                        <li><a href="javascript:void(0);" id="alumnistudentmentorship">Alumni-Student Mentorship Programme</a></li>
                        <li><a href="javascript:void(0);" id="iiiprogramme">Industry-Institute-Interaction Programme</a></li>
                        <li><a href="javascript:void(0);" id="studentvolunteers">Student Volunteers</a></li>
                    </ul>
                </li>
                <li><a href="http://nitdaa.org">Alumni Association (NITDAA)</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php
                if(isset($_SESSION['email'])){
                    echo '<li><a href="javascript:void(0);" id="profile" data-email="'.$_SESSION['email'].'">Hello, '.$_SESSION['firstname'].'</a></li>';
                    echo '<li><a href="src/logout.php">Logout</a></li>';
                }
                ?>
           </ul>
        </div>
        </div>
        </nav>
        </div>

    	</header>

        <section class="container-fluid content" id="fillable">
        </section>

        <section class="container-fluid bottom-nav">
            <div class="row">
                <div class="col-md-1">
                </div>
                <div class="col-md-3">
                    <a href="#" class="bot-nav text-center">Feedback</a>
                </div>
                <div class="col-md-3">
                    <a href="#" id="photogallery" class="bot-nav text-center">Photo Gallery</a>
                </div>
                <div class="col-md-3">
                    <a href="#" class="bot-nav text-center">Contact Us</a>
                </div>
                <div class="col-md-1">
                </div>
            </div>
        </section>

        <footer class="footer container-fluid text-center foot">Copyright © 2017. All Rights Reserved. National Institute of Technology, Durgapur.
         </footer>
    </body>
    <script src="js/custom.js"></script>
</html>