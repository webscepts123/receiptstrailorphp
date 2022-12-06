<?php
//including the database connection file
include_once("connection.php");

 $sql = "SELECT * FROM rentorders WHERE id='" . $_GET["id"] . "'";

    $result=mysqli_query($mysqli,$sql);
    $singleRow = mysqli_fetch_assoc($result);


?>
          

