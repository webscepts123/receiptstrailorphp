<?php
  include_once("connection.php"); 

  if(isset($_POST['Submit'])) {
    $addtext = $_POST['addtext'];
 

        


    $result = "INSERT INTO  textprinter (addtext) VALUES ('$addtext')";

    if(!mysqli_query($mysqli, $result)) {
      die('Error: ' . mysqli_error($mysqli));
  }



  

    header('location: viewrentinorder.php');


   
      
  }

    mysqli_close($mysqli);
  

      

?>