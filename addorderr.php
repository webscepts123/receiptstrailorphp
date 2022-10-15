<?php include 'includes/header.php';?>

<?php
//including the database connection file
include_once("connection.php");

//fetching data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM rentcustomer ORDER BY id DESC");
?>


<div class="card">
	<div class=" container ">
		<a class="btn btn-primary" href='addrental.php'>Add Sales</a>
		<a class="btn btn-primary" href='salesorder.php'>Add Rental</a>
	</div>
</div>


<webview src="addrental.php" httpreferrer="addrental.php"></webview>

<webview src="addrental.php" httpreferrer="addrental.php"></webview>



<webview src="salesorder.php" allowpopups></webview>





  
  
  
  <?php include 'includes/footer.php';?>
 -->
