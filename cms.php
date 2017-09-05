<?php include('connect.php');?>
<div id="homewrapper">
 <div class="row home-main-row">
  <div class="col-md-2 first-card">
      <div class="row shadow event-row">
      <div class="event-wrapper">
        <p class="card-header text-center">Events</p>
          <div class="col-md-10 col-md-offset-1">
            <ul class="event-list">
            <?php
            $sql = "SELECT * from upcomingevents";
            $result = mysqli_query($conn,$sql);
            $count=3;
            while($count!=0)
            {
              $res = mysqli_fetch_assoc($result);
              echo "<li class='event'>
                <div class='event-date text-center'>".
                  $res['dd']."<sup>th</sup> ".$res['mm'].", ".$res['yyyy']."
                </div>
                <div class='event-text text-center'>".
                  $res['text']."
                </div>
              </li>";
              $count-=1;
            }
            ?>
            </ul>
            <a href="#" class="view-link"><p class="text-center view-all">View All</p></a>
          </div>
      </div>
         <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <hr>
        </div>
      </div>
      </div>
      <div class="row shadow links-row">
      <div class="links-wrapper">
        <p class="card-header text-center">Important Links</p>
        <div class="col-md-10 col-md-offset-1">
            <ul class="event-list">
              <li class="event">
                <div class="links-text text-center">
                  <a href="http://www.nitdgp.ac.in/all_pdf16/Office%20Order%20regarding%20alumni%20as%20an%20invitee%20member%20of%20the%20Senate..pdf"> Office Order Regarding Alumni</a>
                </div>
              </li>
              <li class="event">
                <div class="links-text text-center">
                  <a href="https://nitdgp.ac.in">Institute Website</a>
                </div>
              </li>
            </ul>
            <a href="#" class="view-link"><p class="text-center view-all">View All</p></a>
          </div>
            <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <hr>
        </div>
      </div>
      </div>
      </div>
  </div>

 <div class="col-md-6 middle-card">
 <div class="row">
 <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
    <li data-target="#myCarousel" data-slide-to="5"></li>
  </ol>
  <div class="carousel-inner">
    <div class="item active">
      <img src="img/Carousel1.jpg" class="carousel-images">
      <div class="carousel-caption">
        <h3>Standing Strong Since 1960</h3>
      </div>
    </div>

    <div class="item">
      <img src="img/Carousel2.jpg" class="carousel-images">
      <div class="carousel-caption">
        <h3></h3>
      </div>
    </div>

    <div class="item">
      <img src="img/Carousel3.jpg" class="carousel-images">
      <div class="carousel-caption">
        <h3>Welcome to NIT Durgapur</h3>
      </div>
    </div>

    <div class="item">
      <img src="img/IMG_7194.JPG" class="carousel-images">
      <div class="carousel-caption">
        <h3>Alumni Meet at Dhaka, Bangladesh</h3>
      </div>
    </div>

    <div class="item">
      <img src="img/IMG_7654.JPG" class="carousel-images">
      <div class="carousel-caption">
        <h3>Alumni during Global Meet 2017</h3>
      </div>
    </div>

    <div class="item">
      <img src="img/Carousel4.jpg" class="carousel-images">
      <div class="carousel-caption">
        <h3></h3>
      </div>
    </div>
  </div>
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>  
</div>
<div class="row welcome-wrap">
<section id="objectives" class="parallax shadow">
  <div class="welcome-bg"></div>
  <div class="welcome-text-wrap">
  <h2 class="parallax-text">Welcome to Alumni Cell</h2>
  <div class="col-md-6 col-md-offset-3">
    <hr>
  </div>
    <div class="col-md-10 col-md-offset-1 black-text">
      <?php 
      $sql = "SELECT * from general where identifier='welcometext'";
      $result = mysqli_query($conn,$sql);
      $res = mysqli_fetch_assoc($result);
      echo $res['content'];
      ?>
    </div>
  </div>
</section>
</div>
</div>

<div class="col-md-2 last-card">
   <div class="row login-row shadow">
    <div class="login-wrapper">
    <p class="card-header text-center">Login</p>
    <form method="post">
    
    <div class="group">      
      <input type="text" required>
      <span class="highlight"></span>
      <span class="bar"></span>
      <label>Login ID</label>
    </div>
      
    <div class="group">      
      <input type="text" required>
      <span class="highlight"></span>
      <span class="bar"></span>
      <label>Password</label>
    </div>
    
    <button type="button" class="btn btn-primary login">Submit</button>
  </form>
  <h6 id="newreg">New user? Join our network <a href="#">here!</a></h6>
   <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <hr>
    </div>
   </div>
  </div>
</div>

  <div class="row shadow quote-row">
  <div class="quote-wrapper">
    <p class="card-header text-center">Quote of the Week</p>
    <blockquote>Nobody is bothered about an institution more than its alumni.
               <br><br><cite>~ N R Narayan Murthy</cite>
    </blockquote>
    <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <hr>
    </div>
   </div>
  </div>
  </div>

</div>
</div>
<div class="row shadow notable-alumni-wrap">
  <div class="col-md-12">
    <h2 class="parallax-text text-center">Notable Alumni</h2>
    <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <hr>
    </div>
  </div>
  <div id="notablealumniCarousel" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="item active">
      <div class="row">

      <?php
      $sql = "SELECT name,imageno from notablealumni";
      $result = mysqli_query($conn,$sql);
      $count = 0;
      while($count!=4){
        $res = mysqli_fetch_assoc($result);
        $imageno = $res['imageno'];
        $name = $res['name'];
        echo '<div class="col-md-3">
      <div class="gallery shadow">
  <a target="_blank" href="img/NOTABLE_'.$imageno.'.JPG">
    <img src="img/NOTABLE_'.$imageno.'.JPG" width="300" height="200">
  </a>
  <div class="desc">'.$name.'</div>
</div>
    </div>';
        $count=$count+1;
      }
      ?>

    </div>
    </div>

    <div class="item">
      <div class="row">

      <?php
       $count=0;
       while($count!=4){
        $res = mysqli_fetch_assoc($result);
        $imageno = $res['imageno'];
        $name = $res['name'];
        echo '<div class="col-md-3">
      <div class="gallery shadow">
  <a target="_blank" href="img/NOTABLE_'.$imageno.'.JPG">
    <img src="img/NOTABLE_'.$imageno.'.JPG" width="300" height="200">
  </a>
  <div class="desc">'.$name.'</div>
</div>
    </div>';
        $count=$count+1;
      }
      ?>

    </div>
    </div>
  </div>
  <a class="left carousel-control" href="#notablealumniCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#notablealumniCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  </div>
</div>
</div>

<div id="aimswrapper">
      <div class="event-description col-md-10 col-md-offset-1 shadow">
      <p class="parallax-text text-center">Objectives</p>
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <hr>
        </div>
      </div> 
      <div class="event-description-text">
      <?php 
      $sql = "SELECT * from general where identifier='objectives'";
      $result = mysqli_query($conn,$sql);
      $res = mysqli_fetch_assoc($result);
      echo $res['content'];
      ?>
      </div> 
  </div>
</div>

<div id="messagefromdeanwrapper" class="messagefromdeancontent">
	<div class="row imagewrapper">
		<div class="col-md-3 imagecontainer">
            <img id="deanimage" src="img/nkroy.jpg" class="shadow"/>
		</div>
		<div class="col-md-5 imagedescription shadow">
			<h3 class="imagetext" id="mainheader">Prof. Nirmal Kumar Roy</h3>
			<h6 class="imagetext">Dean (Alumni, Outreach, Training and Placement)</h6>
            <h6 class="imagetext">PhD (University of South Australia, Australia)</h6>
            <h6 class="imagetext">M.E. (Indian Institute of Science, Bangalore, India)</h6>
            <h6 class="imagetext">B.E. (University of Burdwan, R.E. College, Durgapur, India)</h6>
            <h6 class="imagetext" id="email">Email : nirmalkumar.roy@ee.nitdgp.ac.in</h6>
            <h6 class="imagetext" id="phone">Phone : +91 9434788042</h6>
		</div> 
    </div>
    <div class="row">
    <div class="col-md-10 col-md-offset-1 text-center shadow messagewrapper">
    	<h3 class="font">Message from the Dean(AOTP)</h3>
    	<hr>
      <?php 
      $sql = "SELECT * from general where identifier='messagefromdean'";
      $result = mysqli_query($conn,$sql);
      $res = mysqli_fetch_assoc($result);
      echo $res['content'];
      ?>
</div>
    </div>
</div>

<div id="meettheteamwrapper">
<div class="col-md-10 general-content-wrapper col-md-offset-1" id="meettheteam">
	<div class="text-center">
		<h2 class="parallax-text">Our Team</h2>
		<div class="row">
      <div class="col-md-6 col-md-offset-3">
        <hr>
      </div>
    </div>
	</div>
	<div class="row team">
		<div class="col-md-3 col-md-offset-1">
      <img src="img/nkroy.jpg" class="img-responsive shadow team-image" />
    </div>
    <div class="col-md-7 shadow team-text">
      <h3 class="imagetext" id="mainheader">Prof. Nirmal Kumar Roy</h3>
            <h6 class="imagetext">Dean (Alumni, Outreach, Training and Placement)</h6>
            <h6 class="imagetext">Department of Electrical Engineering</h6>
            <h6 class="imagetext">National Institute of Technology Durgapur</h6>
            <h6 class="imagetext" id="email">Email : nirmalkumar.roy@ee.nitdgp.ac.in</h6>
            <h6 class="imagetext" id="phone">Phone : +91 9434788042</h6>  
    </div>
	</div>
  <div class="row team">
    <div class="col-md-3 col-md-offset-1">
      <img src="img/ssr.jpg" class="img-responsive shadow team-image" /> 
    </div>
    <div class="col-md-7 shadow team-text">
      <h3 class="imagetext" id="mainheader">Dr. Shibhendu Shekhar Roy</h3>
            <h6 class="imagetext"> Associate Dean (Alumni and Outreach)</h6>
            <h6 class="imagetext">Department of Mechanical Engineering</h6>
            <h6 class="imagetext">National Institute of Technology Durgapur</h6>
            <h6 class="imagetext" id="email">Email : shibhendu.roy@me.nitdgp.ac.in</h6>
            <h6 class="imagetext" id="phone">Phone : +91 9434788150</h6>  
    </div>
  </div>
  <div class="row team">
    <div class="col-md-3 col-md-offset-1">
      <img src="img/dipteshdas.jpg" class="img-responsive shadow team-image" />
    </div>
    <div class="col-md-7 shadow team-text">
      <h3 class="imagetext" id="mainheader">Dr. Diptesh Das</h3>
            <h6 class="imagetext">Associate Dean (Alumni and Outreach)</h6>
            <h6 class="imagetext">Department of Civil Engineering</h6>
            <h6 class="imagetext">National Institute of Technology Durgapur</h6>
            <h6 class="imagetext" id="email">Email : diptesh.das@ce.nitdgp.ac.in</h6>
            <h6 class="imagetext" id="phone">Phone : +91 9434788152</h6>  
    </div>
  </div>
</div>
</div>

<div id="alumnistatswrapper" class="row">
  <div class="event-description col-md-10 col-md-offset-1 shadow">
      <p class="parallax-text text-center">Alumni At A Glance</p>
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <hr>
        </div>
      </div> 
      <div class="event-description-text text-center">
          <div class="row">
            <div class="col-md-10 col-md-offset-1 table-responsive">
              <table class="table table-striped">
                    <thead>
                      <tr>
                         <th>Year Of Passing</th>
                         <th>UG</th>
                         <th colspan="2">PG</th>
                         <th>PhD</th>
                         <th>Total</th>
                      </tr>
                      <tr>
                        <th></th>
                        <th>B.E./B.Tech</th>
                        <th colspan="1">M.Tech</th>
                        <th colspan="1">MCA/MBA/MSc/Others</th>
                        <th></th>
                        <th></th>
                      </tr>
                   </thead>
                   <tbody>
                      <tr>
                        <td>1965</td>
                        <td>160</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>160</td>
                      </tr>
                      <tr>
                        <td>1966</td>
                        <td>180</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>180</td>
                      </tr>
                      <tr>
                        <td>1967</td>
                        <td>180</td>
                        <td>15</td>
                        <td></td>
                        <td></td>
                        <td>195</td>
                      </tr>
                      <tr>
                        <td>1968</td>
                        <td>210</td>
                        <td>25</td>
                        <td></td>
                        <td></td>
                        <td>235</td>
                      </tr>
                      <tr>
                        <td>1969</td>
                        <td>210</td>
                        <td>50</td>
                        <td></td>
                        <td></td>
                        <td>260</td>
                      </tr>
                      <tr>
                        <td>1970</td>
                        <td>210</td>
                        <td>50</td>
                        <td></td>
                        <td></td>
                        <td>260</td>
                      </tr>
                      <tr>
                        <td>1971</td>
                        <td>210</td>
                        <td>50</td>
                        <td></td>
                        <td></td>
                        <td>260</td>
                      </tr>
                      <tr>
                        <td>1972</td>
                        <td>210</td>
                        <td>50</td>
                        <td></td>
                        <td></td>
                        <td>260</td>
                      </tr>
                      <tr>
                        <td>1967</td>
                        <td>180</td>
                        <td>15</td>
                        <td></td>
                        <td></td>
                        <td>195</td>
                      </tr>
                      <tr>
                        <td>1973</td>
                        <td>210</td>
                        <td>50</td>
                        <td></td>
                        <td></td>
                        <td>260</td>
                      </tr>
                      <tr>
                        <td>1974</td>
                        <td>210</td>
                        <td>50</td>
                        <td></td>
                        <td></td>
                        <td>260</td>
                      </tr>
                      <tr>
                        <td>1975</td>
                        <td>210</td>
                        <td>50</td>
                        <td></td>
                        <td></td>
                        <td>260</td>
                      </tr>
                      <tr>
                        <td>1976</td>
                        <td>250</td>
                        <td>50</td>
                        <td></td>
                        <td></td>
                        <td>300</td>
                      </tr>
                      <tr>
                        <td>1977</td>
                        <td>250</td>
                        <td>50</td>
                        <td></td>
                        <td></td>
                        <td>300</td>
                      </tr>
                      <tr>
                        <td>1978</td>
                        <td>250</td>
                        <td>50</td>
                        <td></td>
                        <td></td>
                        <td>300</td>
                      </tr>
                      <tr>
                        <td>1979</td>
                        <td>250</td>
                        <td>50</td>
                        <td></td>
                        <td></td>
                        <td>300</td>
                      </tr>
                      <tr>
                        <td>1980</td>
                        <td>250</td>
                        <td>50</td>
                        <td></td>
                        <td></td>
                        <td>300</td>
                      </tr>
                      <tr>
                        <td>1981</td>
                        <td>250</td>
                        <td>50</td>
                        <td></td>
                        <td></td>
                        <td>300</td>
                      </tr>
                      <tr>
                        <td>1982</td>
                        <td>250</td>
                        <td>50</td>
                        <td></td>
                        <td></td>
                        <td>300</td>
                      </tr>
                      <tr>
                        <td>1983</td>
                        <td>250</td>
                        <td>50</td>
                        <td></td>
                        <td></td>
                        <td>300</td>
                      </tr>
                      <tr>
                        <td>1984</td>
                        <td>250</td>
                        <td>50</td>
                        <td></td>
                        <td></td>
                        <td>300</td>
                      </tr>
                      <tr>
                        <td>1985</td>
                        <td>250</td>
                        <td>50</td>
                        <td></td>
                        <td></td>
                        <td>300</td>
                      </tr>
                      <tr>
                        <td>1986</td>
                        <td>250</td>
                        <td>50</td>
                        <td></td>
                        <td></td>
                        <td>300</td>
                      </tr>
                      <tr>
                        <td>1987</td>
                        <td>250</td>
                        <td>50</td>
                        <td></td>
                        <td></td>
                        <td>300</td>
                      </tr>
                      <tr>
                        <td>1988</td>
                        <td>250</td>
                        <td>50</td>
                        <td></td>
                        <td></td>
                        <td>300</td>
                      </tr>
                      <tr>
                        <td>1989</td>
                        <td>250</td>
                        <td>50</td>
                        <td></td>
                        <td></td>
                        <td>300</td>
                      </tr>
                      <tr>
                        <td>1990</td>
                        <td>310</td>
                        <td>50</td>
                        <td></td>
                        <td></td>
                        <td>360</td>
                      </tr>
                      <tr>
                        <td>1991</td>
                        <td>310</td>
                        <td>55</td>
                        <td></td>
                        <td></td>
                        <td>265</td>
                      </tr>
                      <tr>
                        <td>1992</td>
                        <td>310</td>
                        <td>55</td>
                        <td></td>
                        <td></td>
                        <td>365</td>
                      </tr>
                      <tr>
                        <td>1993</td>
                        <td>310</td>
                        <td>55</td>
                        <td></td>
                        <td></td>
                        <td>365</td>
                      </tr>
                      <tr>
                        <td>1994</td>
                        <td>310</td>
                        <td>55</td>
                        <td></td>
                        <td></td>
                        <td>365</td>
                      </tr>
                      <tr>
                        <td>1995</td>
                        <td>310</td>
                        <td>55</td>
                        <td></td>
                        <td></td>
                        <td>365</td>
                      </tr>
                      <tr>
                        <td>1996</td>
                        <td>310</td>
                        <td>55</td>
                        <td></td>
                        <td></td>
                        <td>365</td>
                      </tr>
                      <tr>
                        <td>1997</td>
                        <td>310</td>
                        <td>55</td>
                        <td></td>
                        <td></td>
                        <td>365</td>
                      </tr>
                      <tr>
                        <td>1998</td>
                        <td>310</td>
                        <td>55</td>
                        <td></td>
                        <td></td>
                        <td>365</td>
                      </tr>
                      <tr>
                        <td>1999</td>
                        <td>310</td>
                        <td>55</td>
                        <td></td>
                        <td></td>
                        <td>365</td>
                      </tr>
                      <tr>
                        <td>2000</td>
                        <td>310</td>
                        <td>55</td>
                        <td></td>
                        <td></td>
                        <td>365</td>
                      </tr>
                      <tr>
                        <td>2001</td>
                        <td>310</td>
                        <td>55</td>
                        <td></td>
                        <td></td>
                        <td>365</td>
                      </tr>
                      <tr>
                        <td>2002</td>
                        <td>310</td>
                        <td>55</td>
                        <td>55</td>
                        <td></td>
                        <td>420</td>
                      </tr>
                      <tr>
                        <td>2003</td>
                        <td>310</td>
                        <td>55</td>
                        <td>55</td>
                        <td></td>
                        <td>420</td>
                      </tr>
                      <tr>
                        <td>2004</td>
                        <td>350</td>
                        <td>55</td>
                        <td>115</td>
                        <td>10</td>
                        <td>530</td>
                      </tr>
                      <tr>
                        <td>2005</td>
                        <td>400</td>
                        <td>55</td>
                        <td>115</td>
                        <td>10</td>
                        <td>580</td>
                      </tr>
                      <tr>
                        <td>2006</td>
                        <td>450</td>
                        <td>55</td>
                        <td>115</td>
                        <td>10</td>
                        <td>630</td>
                      </tr>
                      <tr>
                        <td>2007</td>
                        <td>450</td>
                        <td>125</td>
                        <td>115</td>
                        <td>10</td>
                        <td>700</td>
                      </tr>
                      <tr>
                        <td>2008</td>
                        <td>500</td>
                        <td>125</td>
                        <td>115</td>
                        <td>10</td>
                        <td>750</td>
                      </tr>
                      <tr>
                        <td>2009</td>
                        <td>550</td>
                        <td>125</td>
                        <td>115</td>
                        <td>25</td>
                        <td>815</td>
                      </tr>
                      <tr>
                        <td>2010</td>
                        <td>600</td>
                        <td>125</td>
                        <td>115</td>
                        <td>25</td>
                        <td>865</td>
                      </tr>
                      <tr>
                        <td>2011</td>
                        <td>650</td>
                        <td>125</td>
                        <td>115</td>
                        <td>25</td>
                        <td>915</td>
                      </tr>
                      <tr>
                        <td>2012</td>
                        <td>700</td>
                        <td>125</td>
                        <td>115</td>
                        <td>25</td>
                        <td>965</td>
                      </tr>
                      <tr>
                        <td>2013</td>
                        <td>750</td>
                        <td>125</td>
                        <td>115</td>
                        <td>40</td>
                        <td>1030</td>
                      </tr>
                      <tr>
                        <td>2014</td>
                        <td>800</td>
                        <td>450</td>
                        <td>115</td>
                        <td>40</td>
                        <td>1405</td>
                      </tr>
                      <tr>
                        <td>2015</td>
                        <td>850</td>
                        <td>450</td>
                        <td>115</td>
                        <td>40</td>
                        <td>1455</td>
                      </tr>
                      <tr>
                        <td>2016</td>
                        <td>900</td>
                        <td>450</td>
                        <td>115</td>
                        <td>65</td>
                        <td>1530</td>
                      </tr>
                      <tr>
                        <td>2017</td>
                        <td>950</td>
                        <td>450</td>
                        <td>115</td>
                        <td>60</td>
                        <td>1580</td>
                      </tr>
                      <tr>
                        <td><b>Total</b></td>
                        <td><b>18940</b></td>
                        <td><b>4695</b></td>
                        <td><b>1720</b></td>
                        <td><b>400</b></td>
                        <td><b>25755</b></td>
                      </tr>
                   </tbody>
              </table>
            </div>
          </div>
      </div> 
  </div>
</div>

<div id="alumniregswrapper">
  <div class="col-md-1 content">
  </div>
<div class="col-md-10 shadow reg-form" id="alumniregs">
	<div class="text-center">
		<h2>Register on our Alumni Network!</h2>
		<hr>
	</div>
	<div class="form-wrapper">
		<form class="form-horizontal" method="post">
			     <div class="form-group">
                <label class="control-label col-sm-2" for="name">Name *:</label>
                <div class="col-sm-3">
                   <input type="text" class="form-control" id="firstname" placeholder="First Name" name="firstname" required>
                </div>
                <div class="col-sm-3">
                   <input type="text" class="form-control" id="lastname" placeholder="Last Name" name="lastname" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="yearofpassing">Batch of *:</label>
                <div class="col-sm-3">          
                    <select class="form-control" id="yearofpassing" required>
                      <option disabled>Select your option</option>
                      <?php
                      $count=2017;
                      while($count>=1965){
                        echo '<option>'.$count.'</option>';
                        $count = $count - 1;
                      }    
                      ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="dob">Date of Birth *:</label>
                <div class="col-sm-3">
                   <select class="form-control" id="dayofbirth" required>
                      <option disabled>DD</option>
                      <?php
                      $count=1;
                      while($count<=31){
                        echo '<option>'.$count.'</option>';
                        $count = $count + 1;
                      }    
                      ?>
                    </select>
                </div>
                <div class="col-sm-3">
                   <select class="form-control" id="monthofbirth" required>
                      <option disabled>MM</option>
                      <?php
                      $count=1;
                      while($count<=12){
                        echo '<option>'.$count.'</option>';
                        $count = $count + 1;
                      }    
                      ?>
                    </select>
                </div>
                <div class="col-sm-2 dob">
                  (DD/MM)
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="degree">Degree *:</label>
                <div class="col-sm-3">          
                    <select class="form-control" id="degree" required>
                      <option disabled>Select your option</option>
                      <option>B.E/B.Tech</option>
                      <option>M.Tech</option>
                      <option>MCA</option>
                      <option>MBA</option>
                      <option>MSC</option>
                      <option>PhD</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="department">Department *:</label>
                <div class="col-sm-3">          
                    <select class="form-control" id="department" required>
                      <option disabled>Select your option</option>
                      <option>BT</option>
                      <option>CE</option>
                      <option>CHE</option>
                      <option>CSE</option>
                      <option>ECE</option>
                      <option>EE</option>
                      <option>IT</option>
                      <option>ME</option>
                      <option>MME</option>
                      <option>PHY</option>
                      <option>CH</option>
                      <option>MATH</option>
                      <option>HSS</option>
                      <option>MS</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Email *:</label>
                <div class="col-sm-6">  
                    <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>   
                </div>
            </div>  
            <div class="form-group">
                <label class="control-label col-sm-2" for="alternateemail">Alternate Email:</label>
                <div class="col-sm-6">  
                    <input type="email" class="form-control" id="altemail" placeholder="Alternate Email" name="altemail">   
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="phone">Phone No. *:</label>
                <div class="col-sm-3">  
                    <input type="number" class="form-control" id="phone" placeholder="Phone" name="phone" required>   
                </div>
            </div>   
            <div class="form-group">
            <label class="col-sm-3 text-left" for="professionaldetails">Professional Details:</label>
            </div>
            <div class="form-group">
                <div class="col-sm-1">
                </div>
                <label class="control-label col-sm-3" for="currentorg">Present Organisation *:</label>
                <div class="col-sm-3">  
                    <input type="text" class="form-control" id="currentorg" placeholder="Present Organisation" name="currentorg" required>   
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-1">
                </div>
                <label class="control-label col-sm-3" for="designation">Designation:</label>
                <div class="col-sm-3">  
                    <input type="text" class="form-control" id="designation" placeholder="Designation" name="designation">   
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-1">
                </div>
                <label class="control-label col-sm-3" for="currentcity">Current City *:</label>
                <div class="col-sm-3">  
                    <input type="text" class="form-control" id="currentcity" placeholder="Current City" name="currentcity" required>   
                </div>
            </div>   
            <div class="form-group">
                <div class="col-sm-1">
                </div>
                <label class="control-label col-sm-3" for="addinfo">Additional Information:</label>
                <div class="col-sm-3">  
                    <textarea rows="2" class="form-control" id="addinfo" placeholder="Any other details"></textarea>
                </div>
            </div> 
            <div class="form-group">
                <label class="control-label col-sm-2" for="linkedin">LinkedIn Profile:</label>
                <div class="col-sm-6">  
                    <input type="url" class="form-control" id="linkedin" placeholder="LinkedIn Profile Link" name="linkedin">   
                </div>
            </div>      
            <div class="form-group">
                <label class="control-label col-sm-2" for="picture">Upload Picture:</label>
                <div class="col-sm-6">  
                    <input type="file" class="form-control" id="picture" name="picture">   
                </div>
            </div>   
            <div class="form-group">
              <div class="col-sm-3"></div>
            <button type="submit" class="col-sm-4 btn btn-default">Register</button>  
            </div>      
		</form>
	</div>
</div>
<div class="col-md-1 content">
  </div>
</div>

<div id="searchalumniwrapper">
  <div class="col-md-1 content">
  </div>
<div class="col-md-10 shadow searchalumni">
    <div class="text-center">
    <h2>Search our vast Alumni Network!</h2>
    <hr>
  </div>
  <div class="form-wrapper-search">
    <form class="form-inline">
                <div class="form-group">
                <label class="control-label col-sm-5 search-text" for="yearofpassing">Batch of *:</label>
                <div class="col-sm-2">          
                    <select class="form-control" id="yearofpassing" required>
                      <option disabled>Select your option</option>
                      <?php
                      $count=2017;
                      while($count>=1965){
                        echo '<option>'.$count.'</option>';
                        $count = $count - 1;
                      }    
                      ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-5 search-text" for="degree">Degree *:</label>
                <div class="col-sm-3">          
                    <select class="form-control" id="degree" required>
                      <option disabled>Select your option</option>
                      <option>B.E/B.Tech</option>
                      <option>M.Tech</option>
                      <option>MCA</option>
                      <option>MBA</option>
                      <option>MSC</option>
                      <option>PhD</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-5 search-text" for="department">Department *:</label>
                <div class="col-sm-3">          
                    <select class="form-control" id="department" required>
                      <option disabled>Select your option</option>
                      <option>BT</option>
                      <option>CE</option>
                      <option>CHE</option>
                      <option>CSE</option>
                      <option>ECE</option>
                      <option>EE</option>
                      <option>IT</option>
                      <option>ME</option>
                      <option>MME</option>
                      <option>PHY</option>
                      <option>CH</option>
                      <option>MATH</option>
                      <option>HSS</option>
                      <option>MS</option>
                    </select>
                </div>
            </div>
    </form>
  </div>
</div>
<div class="col-md-1 content">
  </div>
</div>

<div id="popularlectureswrapper" class="row">

     <div class="event-description col-md-10 col-md-offset-1 shadow">
      <p class="parallax-text text-center">Invited Lecture Series</p>
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <hr>
        </div>
      </div> 
      <div class="event-description-text text-center">
      <?php 
      $sql = "SELECT * from general where identifier='invitedlecture'";
      $result = mysqli_query($conn,$sql);
      $res = mysqli_fetch_assoc($result);
      echo $res['content'];
      ?>
      </div> 
  </div>

</div>

<div id="beyondthewallwrapper" class="row">

  <div class="event-description col-md-10 col-md-offset-1 shadow">
      <p class="parallax-text text-center">Beyond The Walls Lecture Series</p>
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <hr>
        </div>
      </div> 
      <div class="event-description-text text-center">
      <?php 
      $sql = "SELECT * from general where identifier='beyondthewall'";
      $result = mysqli_query($conn,$sql);
      $res = mysqli_fetch_assoc($result);
      echo $res['content'];
      ?>
      </div> 
  </div>

  <?php
  $sql = "SELECT * from beyondthewall";
  $result = mysqli_query($conn,$sql);
  $count = 1;
  while($count<=7){
    $res = mysqli_fetch_assoc($result);
    $lectureno = $res['lectureno'];
    $topic = $res['topic'];
    $date = $res['date'];
    $speaker = $res['speaker'];
    $content = $res['content'];
    echo '<div class="btw-label col-md-10 col-md-offset-1">
      <div class="row">
        <img src="img/L'.$lectureno.'.JPG" class="img-responsive col-md-2 shadow btw-image"/>
        <div class="col-md-8 btw-text shadow">
            <h4> Speaker: '.$speaker.'<b></b></h4>
            <h4> Topic : '.$topic.'</h4>
            <h5>Date: '.$date.'</h5>
        </div>
      </div>
      <a href="#btw'.$lectureno.'" data-toggle="modal" data-target="#btw'.$lectureno.'" class="read-more">
        Read More
      </a>
  </div>';
    echo '<div id="btw'.$lectureno.'" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
         <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title text-center">Beyond The Wall Lecture #'.$lectureno.'</h4>
      </div>
      <div class="modal-body">
        <p class="text-center"><b>'.$topic.'</b></p>
        <p class="text-center"><b>'.$speaker.'</b></p>
        <img class="img-responsive btw-modal-image" src="img/L'.$lectureno.'.JPG"/>
         '.$content.'
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>';
    $count = $count + 1;
  }
  ?>

</div>

<div id="studentalumnimeetwrapper" class="row">
    <div class="event-description col-md-10 col-md-offset-1 shadow">
      <p class="parallax-text text-center">Student Alumni Meet</p>
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <hr>
        </div>
      </div> 
      <div class="event-description-text text-center">
      <?php 
      $sql = "SELECT * from general where identifier='studentalumnimeet'";
      $result = mysqli_query($conn,$sql);
      $res = mysqli_fetch_assoc($result);
      echo $res['content'];
      ?>
      </div> 
  </div>
</div>

<div id="alumniawardswrapper" class="col-md-10 col-md-offset-1">

<?php

$sql = "SELECT * from notablealumni";
$result = mysqli_query($conn,$sql);
while($res = mysqli_fetch_assoc($result)){
   $imageno = $res['imageno'];
   $name = $res['name'];
   $desc = $res['description'];
   echo '<div class="gallery shadow">
  <a data-toggle="modal" data-target="#notable'.$imageno.'" href="#notable3">
    <img src="img/NOTABLE_'.$imageno.'.JPG" width="300" height="200">
  </a>
  <div class="desc">'.$name.'</div>
</div>';
  echo '<div id="notable'.$imageno.'" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
         <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title text-center">Distinguished Alumnus</h4>
      </div>
      <div class="modal-body row">
      <div class="col-md-4">
      <img src="img/NOTABLE_'.$imageno.'.JPG" width="250" height="200">
      </div>
      <div class="col-md-6 col-md-offset-1">
        <h3><b>'.$name.'</b></h3>
        '.$desc.'
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>';
}
?>
</div>

<div id="photowrapper" class="col-md-10 col-md-offset-1">

<?php
$sql = "SELECT * from photogallery";
$result = mysqli_query($conn,$sql);
while($res = mysqli_fetch_assoc($result)){
  $imageno = $res['imageno'];
  $caption = $res['caption'];
  echo '<div class="gallery shadow">
  <a target="_blank" href="img/IMG_'.$imageno.'.JPG">
    <img src="img/IMG_'.$imageno.'.JPG" width="300" height="200">
  </a>
  <div class="desc">'.$caption.'</div>
</div>';
}
?>

</div>

<div id="alumnistudentmentorshipwrapper" class="row">

    <div class="event-description col-md-10 col-md-offset-1 shadow">
      <p class="parallax-text text-center">Alumni Student Mentorship Programme</p>
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <hr>
        </div>
      </div> 
      <div class="event-description-text text-center">
      <?php 
      $sql = "SELECT * from general where identifier='alumnistudentmentorship'";
      $result = mysqli_query($conn,$sql);
      $res = mysqli_fetch_assoc($result);
      echo $res['content'];
      ?>
      </div> 
  </div>

</div>

<div id="iiiprogrammewrapper" class="row">

    <div class="event-description col-md-10 col-md-offset-1 shadow">
      <p class="parallax-text text-center">Industry-Institute-Interaction Programme</p>
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <hr>
        </div>
      </div> 
      <div class="event-description-text text-center">
      <?php 
      $sql = "SELECT * from general where identifier='iiiprogramme'";
      $result = mysqli_query($conn,$sql);
      $res = mysqli_fetch_assoc($result);
      echo $res['content'];
      ?>
      </div> 
  </div>

</div>

<div id="studentvolunteerswrapper" class="row">

    <div class="event-description col-md-10 col-md-offset-1 shadow">
      <p class="parallax-text text-center">Student Volunteers</p>
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <hr>
        </div>
      </div> 
      <div class="event-description-text text-center">
      <?php 
      $sql = "SELECT * from general where identifier='studentvolunteers'";
      $result = mysqli_query($conn,$sql);
      $res = mysqli_fetch_assoc($result);
      echo $res['content'];
      ?>
      </div> 
  </div>

</div>

<div id="alumniserviceswrapper" class="row">

  <div class="event-description col-md-10 col-md-offset-1 shadow">
      <p class="parallax-text text-center">Alumni Services</p>
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <hr>
        </div>
      </div> 
      <div class="event-description-text">
      <?php 
      $sql = "SELECT * from general where identifier='alumniservices'";
      $result = mysqli_query($conn,$sql);
      $res = mysqli_fetch_assoc($result);
      echo $res['content'];
      ?>
      </div> 
  </div>

</div>