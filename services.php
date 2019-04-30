
<?php include('dbcon.php'); ?>

 <div class="container">

<header class="section-header">
  <h3>Services</h3>
  <p>Tagdecode offers a range of services for companies. We invite you to explore an introduction to these services below and contact our Team to learn more and discuss your initiative.</p>
</header>

<div class="row">
    <?php 

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
$sql = "SELECT icon,title,descriptions FROM service";
$result = $con->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
echo'

<div class="col-md-4 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
   
         <div class="box">
            <div class="icon" style="background: #fceef3;"><i class="'.$row["icon"].'" style="color: #ff689b;"></i></div>
               <h4 class="title"><a href="#">'.$row["title"].'</a></h4>
                <p class="description">'.$row["descriptions"].'</p>
             </div>
        </div>
    
';
}       
} else {
    echo "<tr><td> No Content  </td></tr>";
}
$con->close();
?>
</div>
</div>
</div>