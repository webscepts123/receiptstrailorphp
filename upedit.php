<?php

  include_once("connection.php"); 


if (isset($_POST['update'])) {
    $id = $_POST['id'];
	$idno = $_POST['idno'];  
    $productname = $_POST['productname'];
    $sku = $_POST['sku']; 
    $category = $_POST['category']; 
    $subcategory = $_POST['subcategory']; 
    $pcolour = $_POST['pcolour'];
    $material =$_POST ['material'];
    $price =$_POST ['price'];
    
    


	 
	 
	$result=mysqli_query($mysqli, "UPDATE coats SET idno='$idno',productname='$productname',sku='$sku',category='$category',subcategory='$subcategory',pcolour='$pcolour',material='$material',price='$price' WHERE id='$id'");
	
	  if(!mysqli_query($mysqli,$result)) {
      die('Error: ' . mysqli_error($mysqli));
  }
	$_SESSION['message'] = "Product updated!"; 
	header('location: rentcoats.php');
	 
	 
	 
	
}


?>
