<?php include('dbcon.php'); ?>


<div class="container">
        <div class="section-header">
          <h3>Team</h3>
          <p>Our ability to deliver outstanding results for our clients starts with our team of smart, capable PR experts. We come from a diverse set of experiences and backgrounds</p>
        </div>

        <div class="row">
        <?php 

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
$sql = "SELECT name,designation,images,fblink,twlink,lnlink FROM team";
$result = $con->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
echo'
          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
            <img src="data:image/jpeg;base64,'.base64_encode( $row['images'] ).'" class="img-fluid" />

              <div class="member-info">
                <div class="member-info-content">
                  <h4>'.$row["name"].'</h4>
                  <span>'.$row["designation"].'</span>
                  <div class="social">
                    <a href="'.$row["twlink"].'"><i class="fa fa-twitter"></i></a>
                    <a href="'.$row["fblink"].'"><i class="fa fa-facebook"></i></a>
                    <a href="'.$row["lnlink"].'"><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
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