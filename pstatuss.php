<?php
  include_once("connection.php"); 
  
  
    if(isset($_POST['Submit'])) {
    $id = $_POST['id'];   
    $status = $_POST['status'];  

    
    

    $result = "UPDATE  coats SET id='$id', status='$status' WHERE id='$id' ";

    if(!mysqli_query($mysqli, $result)) {
        die('Error: ' . mysqli_error($mysqli));
    }
    

   
   header("Location: rentcoats.php");
  
      
  }

    mysqli_close($mysqli);
  

      

?>