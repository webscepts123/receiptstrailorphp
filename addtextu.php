<?php
  include_once("connection.php"); 

  if(isset($_POST['Submit'])) {
    $id = $_POST['id'];  
    $addtext = $_POST['addtext'];
 

        

    $result = "UPDATE  rentorders SET id='$id', addtext='$addtext' WHERE id='$id' ";


    if(!mysqli_query($mysqli, $result)) {
        die('Error: ' . mysqli_error($mysqli));
    }

   
      
  }

    mysqli_close($mysqli);
  

      

?>