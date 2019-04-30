<?php include('dbcon.php'); ?>

<div class="container">

<header class="section-header">
  <h3>Our Clients</h3>
</header>

<div class="owl-carousel clients-carousel">
<?php 

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
$sql = "SELECT images  FROM brandslogo";
$result = $con->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
echo'
  <img src="data:image/jpeg;base64,'.base64_encode( $row['images'] ).'"/>';

}
} else {
    echo "<tr><td> No latest testimonials  </td></tr>";
}
$con->close();
?>

</div>
