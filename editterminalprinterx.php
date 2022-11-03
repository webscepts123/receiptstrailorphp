<?php
//including the database connection file
include_once("connection.php");


    $sql = "SELECT * FROM printer WHERE id='" . $_GET["id"] . "'";
    
    $result=mysqli_query($mysqli,$sql);
    $singleRow = mysqli_fetch_assoc($result);
    
    
    $iddata=$singleRow['id'];
    
  
    
    

if (isset($_POST['update'])) {
    
    $iddata=$singleRow['id'];
    
// 	
	
	$name = $_POST['name'];
	$ctype = $_POST['ctype'];
    $cprofile = $_POST['cprofile'];
    $charactername = $_POST['charactername'];
    $path = $_POST['path'];

    $result = "UPDATE printer SET id='$iddata' , name='$name', ctype='$ctype', cprofile='$cprofile', charactername='$charactername' , path='$path' WHERE id='$iddata'";
    
    header('location: index.php');




	
	
	

	  if(!mysqli_query($mysqli, $result)) {
      die('Error: ' . mysqli_error($mysqli));
      
     
      
    }
    else
    {
        header("Location: index.php");
    }
  

  
  
  

  
  
	
}