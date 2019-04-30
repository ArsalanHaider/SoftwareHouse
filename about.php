<?php include('dbcon.php'); ?>



<div class="container">
        <div class="row">
        <?php 

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
$sql = "SELECT question,images,paragraph  FROM about LIMIT 1";
$result = $con->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
echo'
          <div class="col-lg-5 col-md-6">
            <div class="about-img">
            <img src="data:image/jpeg;base64,'.base64_encode( $row['images'] ).'"/>;
            </div>
          </div>

          <div class="col-lg-7 col-md-6">
            <div class="about-content">
              <h2>About Us</h2>
              <h3>'.$row["question"].'</h3>
              <p>'.$row["paragraph"].'</p>
             
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