<?php
//including the database connection file
include_once("connection.php");

 $sql = "SELECT * FROM rentorders WHERE id='" . $_GET["id"] . "'";

    $result=mysqli_query($mysqli,$sql);
    $singleRow = mysqli_fetch_assoc($result);


?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="style.css">
        <title>Invoice</title>
        <style>
            * {
    font-size: 12px;
    font-family: 'Times New Roman';
}

td,
th,
tr,
table {
    border-top: 1px solid black;
    border-collapse: collapse;
}

td.description,
th.description {
    width: 75px;
    max-width: 75px;
}

td.quantity,
th.quantity {
    width: 40px;
    max-width: 40px;
    word-break: break-all;
}

td.price,
th.price {
    width: 40px;
    max-width: 40px;
    word-break: break-all;
}

.centered {
    text-align: center;
    align-content: center;
}

.ticket {
    width: 155px;
    max-width: 155px;
}

img {
    max-width: inherit;
    width: inherit;
}

@media print {
    .hidden-print,
    .hidden-print * {
        display: none !important;
    }
}
        </style>
    </head>
    <body>
        <div class="ticket">
            <img src="https://newshan.receiptstailor.com/assets/newshan.png" alt="Logo">
            <p class="centered">Shan Tailors
                <br>Shan Tailors Outfits
                <br>No. 1057, Chilaw Road, Daluwakotuwa Kochchike</p>
            <table>
                <thead>
                    <tr>
                        <th class="quantity">Q.</th>
                        <th class="description">Description</th>
                        <th class="price">Price</th>
                    </tr>
                </thead>
                <tbody>
                     <?php
                      
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
                     ?>
                     
                    
                    
            
                    <?php
                      
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
                     ?>
                    <?php
                      
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
                     ?>
                     <?php
                      
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
                     ?>
                     <?php
                      
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
                     ?>
                     <?php
                      
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
                     ?>
                      <?php
                      
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
                     ?>
 <?php
                      
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
                     ?>
                     <?php
                      
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
                     ?>
                 
                </tbody>
            </table>
            <p class="centered">Thanks for your purchase!
                <br>Shan Tailors</p>
        </div>
        
        	<?php
  include_once("connection.php");

 $sql = "SELECT * FROM rentorders WHERE id='" . $_GET["id"] . "'";

    $result=mysqli_query($mysqli,$sql);
    $singleRow = mysqli_fetch_assoc($result);
    
    
    
// Include the qrlib file
include 'phpqrcode/qrlib.php';



  
// $text variable has data for QR 
$text = $singleRow['id'];
  
  $fileName = md5(uniqid()).'.png'; 
$tempDir = "qrimgorder";                    // the directory to store the files
$filePath = $tempDir . "/" . $fileName;
// QR Code generation using png()
// When this function has only the
// text parameter it directly
// outputs QR in the browser
QRcode::png($text, $filePath);

if(file_exists($filePath)) {
    echo '<img style="
    margin-left: 29px;" width="100px" src="./'.$filePath.'" />'; 
}
?>
        <button id="btnPrint" class="hidden-print">Print</button>
        <script>
            const $btnPrint = document.querySelector("#btnPrint");
            $btnPrint.addEventListener("click", () => {
                window.print();
            });
        </script>
    </body>
</html>