<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Tagdecode</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Tagdecode
    Theme URL: https://Tagdecode.com/rapid-multipurpose-bootstrap-business-template/
    Author: Tagdecode.com
    License: https://Tagdecode.com/license/
  ======================================================= -->
</head>

<body>
  <!--==========================
  Header
  ============================-->
  <header id="header">

    <div id="topbar">
      <div class="container">
        <div class="social-links">
          <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
          <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
          <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
          <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
        </div>
      </div>
    </div>

    <div class="container">

      <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
        <h1 class="text-light"><a href=".\" class="scrollto"><span>Tagdecode</span></a></h1>
        
        
        <!-- <a href="#header" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a> -->
      </div>
      
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
 

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">

    <?php include('dbcon.php'); ?>



<div class="container">
        <div class="row">
        <?php 

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
$Id= $_GET['id'];

$sql = "SELECT id,pname,pimage,detail,link,years,techused,ptype FROM projects where id = '$Id'";
$result = $con->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
echo'
          <div class="col-lg-5 col-md-6">
            <div class="about-img">
            <img src="data:image/jpeg;base64,'.base64_encode( $row['pimage'] ).'" class="img-fluid" />
            
            </div>
          </div>

          <div class="col-lg-7 col-md-6">
            <div class="about-content">
              <h2>'.$row["pname"].'</h2>
              <h3>Detail: '.$row["detail"].'</h3>
              <p>Link: '.$row["link"].'</p>
              <p>Years: '.$row["years"].'</p>
              <p>Techused: '.$row["techused"].'</p>
              <p>Platform: '.$row["ptype"].'</p>
             
            </div>
          </div>
        </div>';
    }
} else {
    echo "<tr><td> No Content  </td></tr>";
}
$con->close();
?>
      </div>

    </section><!-- #about -->



    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Tagdecode</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://Tagdecode.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://Tagdecode.com/buy/?theme=Tagdecode
        -->
        Designed by <a href="https://Tagdecode.com/">Tagdecode</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script>
$("body").on("contextmenu", "img", function(e) {
  return false;
});
  </script>
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/mobile-nav/mobile-nav.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <!-- Contact Form JavaScript File -->

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
