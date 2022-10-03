<?php
  include_once("connection.php"); 
  
  
    if(isset($_POST['Submit'])) {
    $id = $_POST['id'];   
    $status = $_POST['status'];  

    
    

    $result = "INSERT INTO rentorders (id ,status) VALUES ('$id' ,'$status')";

    if(!mysqli_query($mysqli, $result)) {
        die('Error: ' . mysqli_error($mysqli));
    }
    

   
   header("Location: viewrentorder.php");
  
      
  }

    mysqli_close($mysqli);
  

      

?>