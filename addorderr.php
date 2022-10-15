<?php include 'includes/header.php';?>

<?php
//including the database connection file
include_once("connection.php");

//fetching data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM rentcustomer ORDER BY id DESC");
?>

<button class="btn btn-danger delete" onclick="window.location.href='addrental.php'  type="button" id="hide">Add Sales</button>
<button class="btn btn-danger delete" onclick="window.location.href='salesorder.php'  type="button" id="hide">Add Rental</button>

  
  
  
  <?php include 'includes/footer.php';?>
 -->
