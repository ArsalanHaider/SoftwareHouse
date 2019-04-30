<?php include('dbcon.php'); ?>

<div class="container">

<header class="section-header">
  <h3 class="section-title">Our Portfolio</h3>
</header>

<div class="row">
  <div class="col-lg-12">
    <ul id="portfolio-flters">
      <li data-filter="*" class="filter-active">All</li>
      <li data-filter=".filter-web">Web</li>
      <li data-filter=".filter-app">Android</li>
      <li data-filter=".filter-card">Desktop</li>
    </ul>
  </div>
</div>

<div class="row portfolio-container">
<?php

$sql = "SELECT * FROM projects where ptype = 'Web'";
$result = $con->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
echo'
  <div class="col-lg-4 col-md-6 portfolio-item filter-web">
    <div class="portfolio-wrap">
      <img src="data:image/jpeg;base64,'.base64_encode( $row['pimage'] ).'" class="img-fluid" />

      <div class="portfolio-info">
        <h4><a href="' . $row["link"] . '">' . $row["pname"] . '</a></h4>
        <p>' . $row["ptype"] . '</p>
        <div>
          <a href="projects-details.php?id='.$row["id"].'" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
          </div>
      </div>
    </div>
  </div>';

}
} else {
    echo "";
}
?>


<?php

$sql = "SELECT * FROM projects where ptype = 'Android'";
$result = $con->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
echo'
  <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.1s">
    <div class="portfolio-wrap">
    <img src="data:image/jpeg;base64,'.base64_encode( $row['pimage'] ).'" class="img-fluid" />

    <div class="portfolio-info">
      <h4><a href="' . $row["link"] . '">' . $row["pname"] . '</a></h4>
      <p>' . $row["ptype"] . '</p>
      <div>
       <a href="projects-details.php?id='.$row["id"].'" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
      </div>
    </div>
  </div>
</div>';
}
} else {
    echo "";
}

?>

<?php

$sql = "SELECT * FROM projects where ptype = 'Desktop'";
$result = $con->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
echo'

  <div class="col-lg-4 col-md-6 portfolio-item filter-card">
    <div class="portfolio-wrap">
    <img src="data:image/jpeg;base64,'.base64_encode( $row['pimage'] ).'" class="img-fluid" />

    <div class="portfolio-info">
      <h4><a href="' . $row["link"] . '">' . $row["pname"] . '</a></h4>
      <p>' . $row["ptype"] . '</p>
      <div>
         <a href="projects-details.php?id='.$row["id"].'" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
        </div>
    </div>
  </div>
</div>';

}
} else {
    echo "";
}
$con->close();
?>

</div>

</div>