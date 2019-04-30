<?php include('dbcon.php'); ?>
<div class="container">
        <header class="section-header">
          <h3>Frequently Asked Questions</h3>
          <p>Here are the most commonly inquired queries.</p>
        </header>
<?php 

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
$sql = "SELECT * FROM faq";
$result = $con->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
echo'
 <ul id="faq-list" class="wow fadeInUp">
          <li>
            <a data-toggle="collapse" class="collapsed" href="#faq'.$row["id"].'">'.$row["question"].' <i class="ion-android-remove"></i></a>
            <div id="faq'.$row["id"].'" class="collapse" data-parent="#faq-list">
              <p>
              '.$row["answer"].'
              </p>
            </div>
          </li>

        </ul>
   ';
    }
} else {
    echo "<tr><td> No Content  </td></tr>";
}
$con->close();
?></div>