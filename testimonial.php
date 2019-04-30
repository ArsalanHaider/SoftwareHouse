<?php include('dbcon.php'); ?>
<div class="container">

        <header class="section-header">
          <h3>Testimonials</h3>
        </header>

        <div class="row justify-content-center">
          <div class="col-lg-12">

            <div class="owl-carousel testimonials-carousel wow fadeInUp">
    
            <?php 

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
$sql = "SELECT company, names,testimonial,images  FROM testimonial";
$result = $con->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
echo'
            <div class="testimonial-item">
            <img src="data:image/jpeg;base64,'.base64_encode( $row['images'] ).'" style=" width: 196px; height:196px; float:right" />
            <h3>' . $row["names"] . '</h3>
                <h4>' . $row["company"] . '</h4>
                <p> ' . $row["testimonial"] . '</p>
              </div>';
            }
        } else {
            echo "<tr><td> No latest testimonials  </td></tr>";
        }
        $con->close();
        ?>
    
               </div>

          </div>
        </div>


      </div>