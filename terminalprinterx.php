<?php
  include_once("connection.php"); 

  if(isset($_POST['Submit'])) {	
    $name = $_POST['name'];
    $ctype = $_POST['ctype'];
    $cprofile =$_POST['cprofile'];
    $charactername  = $_POST['charactername'];
    $path =$_POST ['path'];

        

    $result = "INSERT INTO printer (name, ctype, cprofile, charactername, path) VALUES ('$name','$ctype', '$cprofile', '$charactername', '$path')";

    if(!mysqli_query($mysqli, $result)) {
        die('Error: ' . mysqli_error($mysqli));
    }

   

  
      
  }

    mysqli_close($mysqli);
  

      

?>