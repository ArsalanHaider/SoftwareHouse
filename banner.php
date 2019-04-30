<?php include('dbcon.php'); ?>




<div class="container d-flex h-100">
      <div class="row justify-content-center align-self-center">
        <div class="col-md-6 intro-info order-md-first order-last">
        <?php 

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
$sql = "SELECT heading,subtitle  FROM banner LIMIT 1";
$result = $con->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
echo'
<img src="img/giphy.gif" class="img-fluid" style=" width:156px; height:196px; float:left">

<h2>'.$row["heading"].' <span>'.$row["subtitle"].'</span></h2>';

        }
        } else {
            echo "<tr><td> No latest Banner  </td></tr>";
        }
        $con->close();
        ?>
        
        
        



          <div>
            <a href="#footer" style="margin-left: 200px;" class="btn-get-started scrollto">Get Quotations</a>

          </div>
          <div>
          </div>
        </div>
  
        <div class="col-md-6 intro-img order-md-last order-first">
          <img src="img/intro-img.svg" alt="" class="img-fluid">
        </div>
      </div>
      </div>
    </div>