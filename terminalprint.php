<?php

include_once("connection.php");

 $sql = "SELECT * FROM rentorders WHERE id='" . $_GET["id"] . "'";

    $result=mysqli_query($mysqli,$sql);
    $singleRow = mysqli_fetch_assoc($result);

    require __DIR__ . '/vendor/autoload.php';   
use Mike42\Escpos\PrintConnectors\NetworkPrintConnector;
use Mike42\Escpos\Printer;
$connector = new NetworkPrintConnector("192.168.1.23", 9600);
$printer = new Printer($connector);
try {
  $quantity = $singleRow['quantity'];
  $productname = $singleRow['productname'];
  $total = $singleRow['total'];
  
   if (empty($quantity)) {
   } else {
 echo "<tr>";
   echo "<td class='quantity'>"; 
   echo $singleRow['quantity'];"</td>";
   echo "<td class='description'>";
   echo $singleRow['productname'];"</td>";
   echo "<td class='price'>";
   echo $singleRow['total'];"</td>";
echo "</tr>";
   }

 
  $quantity2 = $singleRow['quantity2'];
  $productname2 = $singleRow['productname2'];
  $total2 = $singleRow['total2'];
  
   if (empty($quantity2)) {
   } else {
 echo "<tr>";
   echo "<td class='quantity'>"; 
   echo $singleRow['quantity2'];"</td>";
   echo "<td class='description'>";
   echo $singleRow['productname2'];"</td>";
   echo "<td class='price'>";
   echo $singleRow['total2'];"</td>";
echo "</tr>";
   }

 
  $quantity3 = $singleRow['quantity3'];
  $productname3 = $singleRow['productname3'];
  $total3 = $singleRow['total3'];
  
   if (empty($quantity3)) {
   } else {
 echo "<tr>";
   echo "<td class='quantity'>"; 
   echo $singleRow['quantity3'];"</td>";
   echo "<td class='description'>";
   echo $singleRow['productname3'];"</td>";
   echo "<td class='price'>";
   echo $singleRow['total3'];"</td>";
echo "</tr>";
   }

 
  $quantity4 = $singleRow['quantity4'];
  $productname4 = $singleRow['productname4'];
  $total4 = $singleRow['total4'];
  
   if (empty($quantity2)) {
   } else {
 echo "<tr>";
   echo "<td class='quantity'>"; 
   echo $singleRow['quantity4'];"</td>";
   echo "<td class='description'>";
   echo $singleRow['productname4'];"</td>";
   echo "<td class='price'>";
   echo $singleRow['total4'];"</td>";
echo "</tr>";
   }

 
  $quantity5 = $singleRow['quantity5'];
  $productname5 = $singleRow['productname5'];
  $total5 = $singleRow['total5'];
  
   if (empty($quantity5)) {
   } else {
 echo "<tr>";
   echo "<td class='quantity'>"; 
   echo $singleRow['quantity5'];"</td>";
   echo "<td class='description'>";
   echo $singleRow['productname5'];"</td>";
   echo "<td class='price'>";
   echo $singleRow['total5'];"</td>";
echo "</tr>";
   }


 
  $quantity6 = $singleRow['quantity6'];
  $productname6 = $singleRow['productname6'];
  $total6 = $singleRow['total6'];
  
   if (empty($quantity6)) {
   } else {
 echo "<tr>";
   echo "<td class='quantity'>"; 
   echo $singleRow['quantity6'];"</td>";
   echo "<td class='description'>";
   echo $singleRow['productname6'];"</td>";
   echo "<td class='price'>";
   echo $singleRow['total6'];"</td>";
echo "</tr>";
   }

 
 
  $quantity7 = $singleRow['quantity7'];
  $productname7 = $singleRow['productname7'];
  $total7 = $singleRow['total7'];
  
   if (empty($quantity7)) {
   } else {
 echo "<tr>";
   echo "<td class='quantity'>"; 
   echo $singleRow['quantity7'];"</td>";
   echo "<td class='description'>";
   echo $singleRow['productname7'];"</td>";
   echo "<td class='price'>";
   echo $singleRow['total7'];"</td>";
echo "</tr>";
   }


 
  $quantity8 = $singleRow['quantity8'];
  $productname8 = $singleRow['productname8'];
  $total8 = $singleRow['total8'];
  
   if (empty($quantity8)) {
   } else {
 echo "<tr>";
   echo "<td class='quantity'>"; 
   echo $singleRow['quantity8'];"</td>";
   echo "<td class='description'>";
   echo $singleRow['productname8'];"</td>";
   echo "<td class='price'>";
   echo $singleRow['total8'];"</td>";
echo "</tr>";
   }


 
  $quantity9 = $singleRow['quantity9'];
  $productname9 = $singleRow['productname9'];
  $total9 = $singleRow['total9'];
  
   if (empty($quantity9)) {
   } else {
 echo "<tr>";
   echo "<td class='quantity'>"; 
   echo $singleRow['quantity9'];"</td>";
   echo "<td class='description'>";
   echo $singleRow['productname9'];"</td>";
   echo "<td class='price'>";
   echo $singleRow['total9'];"</td>";
echo "</tr>";
   }
   $printer -> cut();
} finally {
    $printer -> close();
}
?>

