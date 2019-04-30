<?php include('dbcon.php'); ?>

<div class="container">



<div class="row feature-item">
  <div class="col-lg-6 wow fadeInUp">
    <img src="img/features-1.svg" class="img-fluid" alt="">
  </div>

  <?php

$sql = "SELECT * FROM product where positionId = '1' LIMIT 1";
$result = $con->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
echo'
  <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
    <h4>' . $row["name"] . '</h4>
    <p>
    ' . $row["about"] . '
    </p>
  
  </div>
</div>';

}
} else {
    echo "";
}
?>

<div class="row feature-item mt-5 pt-5">
  <div class="col-lg-6 wow fadeInUp order-1 order-lg-2">
    <img src="img/features-2.svg" class="img-fluid" alt="">
  </div>
  <?php

$sql = "SELECT * FROM product where positionId = '2'  LIMIT 1";
$result = $con->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
echo'
  <div class="col-lg-6 wow fadeInUp pt-4 pt-lg-0 order-2 order-lg-1">
    <h4>' . $row["name"] . '</h4>
    <p>
    ' . $row["about"] . '
    </p>
  
  </div>';
}
} else {
    echo "";
}

?>
  
</div>

</div>