<?php
  include_once("connection.php"); 

  if(isset($_POST['Submit'])) {	
    $idnumber = $_POST['idnumber'];  
    $customername = $_POST['customername'];
    $date = $_POST['date'];
    $receivedate = $_POST['receivedate'];
    $duedate = $_POST['duedate'];
    $productcode =$_POST ['productcode'];
    $productname =$_POST ['productname'];
    $quantity =$_POST ['quantity'];
    $price =$_POST ['price'];
    $total =$_POST ['total'];
    $productcode2 =$_POST ['productcode2'];
    $productname2 =$_POST ['productname2'];
    $quantity2 =$_POST ['quantity2'];
    $price2 =$_POST ['price2'];
    $total2 =$_POST ['total2'];
    $productcode3 =$_POST ['productcode3'];
    $productname3 =$_POST ['productname3'];
    $quantity3 =$_POST ['quantity3'];
    $price3 =$_POST ['price3'];
    $total3 =$_POST ['total3'];
    $productcode4 =$_POST ['productcode4'];
    $productname4 =$_POST ['productname4'];
    $quantity4 =$_POST ['quantity4'];
    $price4 =$_POST ['price4'];
    $total4 =$_POST ['total4'];
    $productcode5 =$_POST ['productcode5'];
    $productname5 =$_POST ['productname5'];
    $quantity5 =$_POST ['quantity5'];
    $price5 =$_POST ['price5'];
    $total5 =$_POST ['total5'];
    $productcode6 =$_POST ['productcode6'];
    $productname6 =$_POST ['productname6'];
    $quantity6 =$_POST ['quantity6'];
    $price6 =$_POST ['price6'];
    $total6 =$_POST ['total6'];
    $productcode7 =$_POST ['productcode7'];
    $productname7 =$_POST ['productname7'];
    $quantity7 =$_POST ['quantity7'];
    $price7 =$_POST ['price7'];
    $total7 =$_POST ['total7'];
    $productcode8 =$_POST ['productcode8'];
    $productname8 =$_POST ['productname8'];
    $quantity8 =$_POST ['quantity8'];
    $price8 =$_POST ['price8'];
    $total8 =$_POST ['total8'];
    $productcode9 =$_POST ['productcode9'];
    $productname9 =$_POST ['productname9'];
    $quantity9 =$_POST ['quantity9'];
    $price9 =$_POST ['price9'];
    $total9 =$_POST ['total9'];
    $productcode10 =$_POST ['productcode10'];
    $productname10 =$_POST ['productname10'];
    $quantity10 =$_POST ['quantity10'];
    $price10 =$_POST ['price10'];
    $total10 =$_POST ['total10'];
    $notes = $_POST['notes'];
    $subTotal =$_POST['subTotal'];
    $taxRate =$_POST ['taxRate'];
    $taxAmount =$_POST ['taxAmount'];
    $totalAftertax = $_POST['totalAftertax'];
    $amountPaid =$_POST['amountPaid'];
    $amountDue =$_POST ['amountDue'];
    $status =$_POST ['status'];
    
    

    $result = "INSERT INTO rentorders (idnumber,customername,date,receivedate,duedate,productcode,productname,quantity,price,total,productcode2,productname2,quantity2,price2,total2,productcode3,productname3,quantity3,price3,total3,productcode4,productname4,quantity4,price4,total4,productcode5,productname5,quantity5,price5,total5,productcode6,productname6,quantity6,price6,total6,productcode7,productname7,quantity7,price7,total7,productcode8,productname8,quantity8,price8,total8,productcode9,productname9,quantity9,price9,total9,notes,subTotal,taxRate,taxAmount,totalAftertax,amountPaid,amountDue,status) VALUES ('$idnumber', '$customername','$date','$receivedate','$duedate','$productcode','$productname','$quantity','$price','$total','$productcode2','$productname2','$quantity2','$price2','$total2','$productcode3','$productname3','$quantity3','$price3','$total3','$productcode4','$productname4','$quantity4','$price4','$total4','$productcode5','$productname5','$quantity5','$price5','$total5','$productcode6','$productname6','$quantity6','$price6','$total6','$productcode7','$productname7','$quantity7','$price7','$total7','$productcode8','$productname8','$quantity8','$price8','$total8','$productcode9','$productname9','$quantity9','$price9','$total9', '$notes', '$subTotal', '$taxRate', '$taxAmount', '$totalAftertax', '$amountPaid', '$amountDue', '$status')";

    if(!mysqli_query($mysqli, $result)) {
        die('Error: ' . mysqli_error($mysqli));
    }
    

   
   header("Location: viewrentorder.php");
  
      
  }

    mysqli_close($mysqli);
  

      

?>