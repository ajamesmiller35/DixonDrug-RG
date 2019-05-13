<?php
  session_start();
  if(!isset($_SESSION['message'])){
    $_SESSION['message'] = "";
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/gnp.png">

    <title>Dixon Drug - True Value</title>

    <!-- Bootstrap core CSS -->
    <link href="reset.css" rel="stylesheet">
    <link href="bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">

  </head>

  <body>
    <a href="javascript:void(0)" id="top"><img id="up-white" src="images/up-white.png"></a>
  <div class="push"></div>
  <div id="top-nav">
      <a class="top-logo" href="index.php"><img src="images/dixondrugglow.png" class="dd-top-logo"/></a>
    <nav class="navbar navbar-expand-lg navbar-dark navbar-fixed-top bg-light">
    <div class="burger-box">
    <button class="navbar-toggler" id="toggle-button" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      </div>  
    <div class="nav-blue">
      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item collapse-me">
            <a class="nav-link nav-link-pill scrollTo" href="#services">Services</a>
          </li>
          <li class="nav-item collapse-me">
            <a class="nav-link nav-link-pill scrollTo" href="#locations">Locations</a>
          </li>
          <li class="nav-item collapse-me">
            <a class="nav-link nav-link-pill scrollTo" href="#refills">Refills</a>
          </li>
          <li class="nav-item collapse-me">
            <a class="nav-link nav-link-pill scrollTo" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link scrollTo" href="#hardware">True Value Hardware</a>
          </li>
          <li class="nav-item">
            <!--<a class="nav-link scrollTo" href="#coffeeshop">Coffee Shop</a>-->
            <a class="nav-link" href="redeeminggrounds/index.html">Coffee Shop</a>
          </li>
        </ul>
      </div>
    </div>
    </nav>


    </div>

      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/care.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/professional.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/values.png" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="row" id="services">
      <div class="header">
          <h1>We offer:</h1>
      </div>
    </div> <!-- /.row-->
        <div class="row">
            <div class="col-sm-4 blue-icon-box">
                <img class="blue-icon" src="images/dme.png" alt="Durable Medical Equipment">
                <h2 class="service-icon-header">Medical Equipment</h2>
                <p>Lift chairs, walkers, diabetic testing supplies, a much more!</p>
            </div><!--/col-1 -->
            <div class="col-sm-4 blue-icon-box">
                <img class="blue-icon" src="images/delivery.png" alt="Delivery">
                <h2 class="service-icon-header">Free Delivery!</h2>
                <p>Free delivery to Tribune, Leoti, Syracuse, and Sharon Springs. If you live outside of these areas, we mail for free too!</p>
            </div><!--/col-2 -->
            <div class="col-sm-4 blue-icon-box">
                <img class="blue-icon" src="images/shopping.png" alt="Shopping">
                <h2 class="service-icon-header">OTC Products</h2>
                <p>Shop our full range of over the counter products. </p>
            </div><!--/col-3 -->
        </div><!--/.row -->

<div class="couplebanner">
   <div class="bannerbox">
    <div class="bannertext">
          <h1 class="bannermessage">We do the heavy lifting so you can get back to doing the things you love</h1>
    </div><!-- /.bannertext-->
    </div><!-- /.bannerbox-->
    <div class="med-box">
    <div class="row med-row">
      <div class="col-lg-12 med-management">
          <h2 id="speak">Speak to a pharmacist today about our medication management solutions.</h2>
          <h3 id="from">From free delivery to text or email refill reminders,<br>we are here to ensure you get every dose right when you need it.</h3>
      </div>
    </div><!-- /.row-->
    </div>
    </div><!-- /.couplebanner-->

  <main role="main" class="container">
        <div class="row">
            <div class="col-lg-4">
                <h2 class="service-header">Pill Organizers</h2>
                <img class="service-photo" src="images/organizer2.png"/>
                <p>Never worry you are forgetting something. We can organize all of your daily pills for you in a daily pill organizer of your choice.</p>
            </div>
            <div class="col-lg-4">
              <h2 class="service-header">Unit Dose Cards</h2>
              <img class="service-photo" src="images/unitdose2.png"/>
              <p>Never miss a dose with unit dose cards. We can package your pills into several types of unit dose cards selected to meet your needs.</p>
            </div>
            <div class="col-lg-4">
              <h2 class="service-header">Free Delivery</h2>
              <img class="service-photo" src="images/door.png"/>
              <p>We deliver all of your meds or even any over-the-counter items you order for free every day. Availabe in Tribune, Leoti, Syracuse, and Sharon Springs. Traveling? We also mail to anywhere in the USA for free.</p>
            </div>
          </div><!--/.row-->
          <div class="row" id="locations">
      <div class="header">
      <h1>Our Stores:</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4">
        <img class="store-photo" src="images/dd.png"/>
      </div>
      <div class="col-lg-4">
        <h2 class="service-header">Dixon Drug</h2>
        <p>422 Broadway Ave.</p>
        <p>Tribune, KS 67879</p>
        <p>Phone: (620)376-4224</p>
        <p>Toll-Free: (800)628-0702</p>
        <p>Fax: (620)376-2584</p>
      </div>
      <div class="col-lg-4">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3123.7816187564513!2d-101.75417894902058!3d38.46960267955141!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x870b942cd4cbb84b%3A0xa73aab729353b16c!2sDixon+Drug!5e0!3m2!1sen!2sus!4v1543374998893" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    </div>
    <img src="images/division.png" class="division"/>
    <div class="row">
      <div class="col-lg-4">
        <img class="store-photo" src="images/wc.png"/>
      </div>
      <div class="col-lg-4">
        <h2 class="service-header">Dixon Drug - Wallace County</h2>
        <p>107 2nd St.</p>
        <p>Sharon Springs, KS 67758</p>
        <p>Phone: (785)852-4219</p>
        <p>Fax: (785)852-4218</p>
      </div>
      <div class="col-lg-4">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3105.231240081966!2d-101.75421234901036!3d38.8958270545414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x870b6d81e5d876a5%3A0x21b0df84eb8f9826!2sDixon+Drug!5e0!3m2!1sen!2sus!4v1543376714959" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    </div>
    <img src="images/division.png" class="division"/>
    <div class="row">
      <div class="col-lg-4">
      <img class="store-photo" src="images/hc.png"/>
      </div>
      <div class="col-lg-4">
        <h2 class="service-header">Hamilton County Drug</h2>
        <p>302 Ease Ave. A</p>
        <p>Syracuse, KS 67878</p>
        <p>Phone: (620)384-7424</p>
        <p>Fax: (620)384-7525</p>
      </div>
      <div class="col-lg-4">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3144.8655580873974!2d-101.75181284903222!3d37.98026670798328!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87095e7f0e7edfe1%3A0xc1635023dcfcc46f!2sHamilton+County+Drug!5e0!3m2!1sen!2sus!4v1543376761575" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    </div>
    <div class="sessionmessage">
    <?php
      if(isset($_SESSION['message'])){
      echo "<h2 class=\"center\">" . $_SESSION['message'] . "</h2>";
      }
      if($_SESSION['message'] == "Request Sent Succefully!"){
        session_destroy();
        session_start();
        $_SESSION['message'] = "";
      }
    ?>
    </div>

    <div class="row" id="refills">
    <div class="header">
    <h1>Refill Request Form:</h1>
    </div>
      <form action="addRxNum.php" method="post">
  <div class="form-group">
    <label for="rxNum">Prescription Number</label>
    <input type="text" class="form-control" id="rxNum" name="rxNum" aria-describedby="rxHelp" placeholder="Enter Rx Number">
    <small id="rxHelp" class="form-text text-muted">Locate the six digit prescription number on your bottle. For controlled drugs it is not necessary to include the "C" at the beginning of the number.</small>
    <br>
    <input type="text" class="form-control" id="rxMessage" name="rxMessage" aria-describedby="rxMessage" placeholder="Special Message">
    <small id="rxHelp" class="form-text text-muted">Enter any special requests or messages for the pharmacist here.</small>
    <br>
    <button type="submit" class="btn btn-dark">Add Number</button>
    <br><br>
    <?php
      $host = '127.0.0.1';
      $dbname   = 'refills';
      $user = 'ajamesmiller35';
      $pass = 'CarlyQ35.';
      $charset = 'utf8';
      
      $dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;
      $opt = [
          PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
          PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
          PDO::ATTR_EMULATE_PREPARES   => false,
      ];
      $pdo = new PDO($dsn, $user, $pass, $opt);

      if(isset($_SESSION['sessionID'])){
      $sql = "SELECT * FROM rxnumbers WHERE session_ID = " . $_SESSION['sessionID'];
      $stmt = $pdo->prepare($sql);
      $stmt->execute([]);
      $rxList = $stmt->fetchAll();

      echo "<table class='table'>";
      echo "<thead>";
      echo "<tr>";
      echo "<th scope='col'>Rx Number</th>";
      echo "<th scope='col'>Special Message</th>";
      echo "</tr>";
      echo "</thead>";

      for($i = 0; $i < sizeof($rxList); $i++){
        echo "<tr>";
        echo "<td>" . $rxList[$i]['rxnumber'] . "</td>";
        echo "<td>" . $rxList[$i]['message']. "</td>";
        echo "<td><a href=\"delete.php?rxID=" .  $rxList[$i]['id'] . "\">Delete</a></td>";
        echo "</tr>";
      }

      echo "</table>";

    }

    ?>
  </div><!--/.row -->
</form>
  </div>
  <div class="row">
<form action="mail.php" method="post">
      <button type="submit" class="btn btn-dark">Send Refill Request</button>
  </form>
      </div><!--/.row -->
      <div class="row">
        <img src="images/division.png" class="division"/>
      </div><!--/.row -->
      <div class="row">
      <div class="header">
        <h1>Request refills on the go using our new app!</h1>
      </div><!--/.header -->
        </div><!--/.row -->
        <div class="row">
          <div class="col-lg-4">
            <img id="my-gnp-screenshot" src="images/mygnp.png" alt="My GNP app screenshot"/>
          </div>
          <div class="col-lg-8 feature-box">
            <h2 class="feature-head">Features:</h2>
            <ul class="features">
              <li>Easy refill requests</li>
              <li>View and manage your list of medications</li>
              <li>Designate a family member, friend, or caregiver to manage and refill your medications for you</li>
              <li>Health and wellness tools</li>
            </ul>
          </div>
        </div>
        <div class="row app-title">
          <h3>My GNP App:</h3>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <a href="https://play.google.com/store/apps/details?id=com.rx30.refillrx"><img src="images/googleplay.png" class="app-logo" id="google-play"/></a>
          </div><!--/.col -->
          <div class="col-sm-6">
          <a href="https://itunes.apple.com/us/app/refillrx/id1051322965?mt=8"><img src="images/appstore.png" class="app-logo" id="app-store"/></a>
          </div><!--/.col -->
      </div><!--/.row -->
      <div class="row">
        <img src="images/division.png" class="division"/>
      </div><!--/.row -->
      <div class="row">
      <div class="refillrx-head">
        <h2 class="feature-head">Looking for a more simple experience?</h2>
        <h3>Try refillRx, also availabe on Google Play and the App Store.</h3>
      </div><!--/.header -->
        </div><!--/.row -->
        <div class="row app-title">
          <h3>refillRx App:</h3>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <a href="https://play.google.com/store/apps/details?id=com.rx30.refillrx"><img src="images/googleplay.png" class="app-logo" id="google-play"/></a>
          </div><!--/.col -->
          <div class="col-sm-6">
          <a href="https://itunes.apple.com/us/app/refillrx/id1051322965?mt=8"><img src="images/appstore.png" class="app-logo" id="app-store"/></a>
          </div><!--/.col -->
      </div><!--/.row -->
      <div class="row" id="about">
        <div class="header">
          <h1>About Dixon Drug:</h1>
        </div>
      </div>
      <div class="row">
      <div class="col-lg-6">
        <h3 class="team-photo-title">Pharmacy Staff</h3>
      <img class="team-photo" src="images/IMG_3865.jpg"/>
    </div>
    <div class="col-lg-6">
    <h3 class="team-photo-title">Retail Staff</h3>
      <img class="team-photo" src="images/IMG_3868.jpg"/>
    </div>
</div>
    <img src="images/division.png" class="division"/>
    <div class="col-lg-12">
      <p>Founded in 1986, Great Plains Pharmacies, Inc. is aiming to serve our customers and patients with the quality service and care they deserve. Founded by Chris and Kellee Dixon, we pride ourselves in being a workplace that works hard, has fun, and serves our customers and patients with excellent quality care at all times.</p>
    </div>
    <img src="images/division.png" class="division"/>
    
        <div class="row" id="hardware">
          <img id="dd-tv-logo" src="images/dd-tv-logo.png"/>
          <img src="images/division.png" class="division"/>
          <img id="bargains-of-month" src="http://ww3.truevalue.com/Portals/0/bom/BOM_interior_c7577fc9-1724-4de9-859c-783ff23df456.jpg?v=412">
        </div>
        </main><!-- /.container -->
        

    <!--footer starts from here-->
<footer class="footer">

<div class="container" id="footer-container">
<ul class="foote_bottom_ul_amrc">
<li><a href="index.php">Home</a></li>
<li><a href="services.php">Services</a></li>
<li><a href="locations.php">Locations</a></li>
<li><a href="refills.php">Refills</a></li>
<li><a href="about.php">About</a></li>
</ul>
<!--foote_bottom_ul_amrc ends here-->
<p class="text-center">Copyright&#169; Great Plains Pharmacies Inc. 2018. All rights reserved.</p>

<ul class="social_footer_ul">
<li><a href="https://www.facebook.com/Dixon-Drug-True-Value-130540840316363/"><i class="fab fa-facebook-f"></i></a></li>
</ul>
<!--social_footer_ul ends here-->
</div>

</footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="plugins/jquery/jquery.js"></script>
    <script src="plugins/popper/popper.min.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.js"></script>
    <script src="plugins/waypoints/jquery.waypoints.min.js"></script>
    <script src="plugins/slick/slick.min.js"></script>
    <script src="resize.js"></script>
    <script src="topheight.js"></script>
    <script src="changecolor.js"></script>
    <script src="collapse.js"></script>
    <script src="plugins/smoothscroll/SmoothScroll.min.js"></script>
    <script src="plugins/clickscroll.js"></script>
  </body>
</html>