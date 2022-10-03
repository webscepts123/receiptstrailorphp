<?php include 'includes/header.php';?>

<?php


//including the database connection file
include_once("connection.php");

//fetching data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM coats ORDER BY id DESC");


?>
<h2 class=" container head3">View Products</h2>


<div class="container" style="
    padding: 36px;
    padding-bottom: 1px;
">

    <div class="flex">
      <button onclick="window.location.href='rentproduct.php';" class="btn btn-primary">Add Product</button>
   

      
    </div>
    
  
</div>


<div class="container">
    
    <?php if(!empty($statusMsg)){ ?>
        <div class="col-xs-12">
            <div class="alert <?php echo $statusType; ?>"><?php echo $statusMsg; ?></div>
        </div>
    <?php } ?>
    
    <br>
    <br>


    <div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">ID No</th>
      <th scope="col">Product</th>
      <th scope="col">SKU</th>
      <th scope="col">category</th>
      <th scope="col">subcategory</th>
      <th scope="col">Price</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody id="myUL">
    <?php
    
    // Include the qrlib file
    include 'phpqrcode/qrlib.php';
    
	while($res = mysqli_fetch_array($result)) {		
		echo "<tr>";
		echo "<td>".$res['id']."</td>";
		echo "<td>".$res['idno']."</td>";
		echo "<td>".$res['productname']."</td>";	
		echo "<td>".$res['code']."</td>";	
        echo "<td>".$res['category']."</td>";
        echo "<td>".$res['subcategory']."</td>";
        echo "<td>".$res['price']."</td>";
        echo "<td><a class='btn btn-primary' href=\"rentedit.php?id=$res[id]\">Edit</a><a class='btn btn-danger' href=\"productdel.php?del=$res[id]\">Delete</a> <a class='btn btn-primary' href=\"qrcode.php?id=$res[id]\">View QR</a> </td>";	



	
	
	}
  ?>
 
  </tbody>
</table>
</div>

   
</div>
  <?php include 'includes/footer.php';?>



