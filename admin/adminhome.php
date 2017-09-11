<?php
session_start();
if($_SESSION['admin']!=1){
  header('Location: logout.php');
}
?><html lang="en">
<head>
  <title>Admin Panel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 550px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
        
    /* On small screens, set height to 'auto' for the grid */
    @media screen and (max-width: 767px) {
      .row.content {height: auto;} 
    }
  </style>
</head>
<body>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-2 sidenav hidden-xs">
      <h2>NIT Durgapur Alumni Cell</h2>
      <ul class="nav nav-pills nav-stacked">
        <li><a id="users" href="#">Pending User Approvals</a></li>
        <li><a id="general" href="#">General Content</a></li>
        <li><a id="events" href="#">Events</a></li>
        <li><a id="notable" href="#">Notable Alumni</a></li>
        <li><a id="btw" href="#">Beyond The Walls</a></li>
        <li><a id="gallery" href="#">Photo Gallery</a></li>
        <li><a id="logout" href="logout.php">Logout</a></li>
      </ul><br>
    </div>
    <br>
    
    <div class="col-sm-9" id="table">

      
    </div>
    </div>
  </div>
</div>

</body>
  <script src="js/custom.js"></script>
</html>