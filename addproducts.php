<?php
  include_once("connection.php"); 

  if(isset($_POST['Submit'])) {	
    $code = $_POST['code'];
    $name = $_POST['name'];
    $description =$_POST['description'];
    $minprice  = $_POST['min_price'];
    $maxprice =$_POST ['max_price'];
    $avastock =$_POST ['avastock'];

        

    $result = "INSERT INTO products (code, name, description, min_price, max_price, avastock) VALUES ('$code','$name', '$description', '$min_price', '$max_price', '$avastock')";

    if(!mysqli_query($mysqli, $result)) {
        die('Error: ' . mysqli_error($mysqli));
    }

   

  
      
  }

    mysqli_close($mysqli);
  

      

?>