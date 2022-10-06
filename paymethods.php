<?php
  include_once("connection.php"); 
  
  
    if(isset($_POST['Submit'])) {
    $id = $_POST['id'];   
    $paymethod = $_POST['paymethod'];  

    
    

    $result = "UPDATE  rentorders SET id='$id', paymethod='$paymethod' WHERE id='$id' ";

    if(!mysqli_query($mysqli, $result)) {
        die('Error: ' . mysqli_error($mysqli));
    }
    

   
   header("Location: viewrentorder.php");
  
      
  }

    mysqli_close($mysqli);
  

      

?>