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
        <title>Invoice #<?php echo $singleRow['id']; ?></title>

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
            <img src="assets/invoiceimage.png" alt="Logo">
            <p class="centered">Invoice #<?php echo $singleRow['id']; ?>
                <br>1057 chilaw Rd Dalankotuwa Kochchikade
                <br>Phone +94312273904
                <br> <?php $singleRow['date']; ?>

            </p>
            <table>
                <thead>
                    <tr>
                        <th class="quantity">quantity</th>
                        <th class="description">Description</th>
                        <th class="price">LKR</th>
                    </tr>
                </thead>
                <tbody>


                <?php
	            
                $productcode= $singleRow['productcode'];
                $productname= $singleRow['productname'];
                $quantity= $singleRow['quantity'];
                $price = $singleRow['price'];
                $total= $singleRow['total'];
                
                 if (empty($productcode)) {
                   } else {
                
             echo "<tr>";
                echo "<td  style='width:10%;'>"; 
                echo $singleRow['productcode']; "</td>";
                echo "<td style='width:10%;'>"; 
                echo $singleRow['productname']; "</td>";
                echo "<td style='width:10%;'>";
                echo $singleRow['quantity']; "</td>";
                echo "<td  style='width:10%;'>"; 
                echo $singleRow['price'];"</td>";
                echo "<td style='width:10%;'>";
                echo $singleRow['total'];"</td>";
         echo  "</tr>";
                   }
           ?>
           
           <?php
           
                $productcode2= $singleRow['productcode2'];
                $productname2= $singleRow['productname2'];
                $quantity2= $singleRow['quantity2'];
                $price2 = $singleRow['price2'];
                $total2= $singleRow['total2'];
                
                 if (empty($productcode2)) {
                   } else {
                
             echo "<tr>";
                echo "<td  style='width:10%;'>"; 
                echo $singleRow['productcode2']; "</td>";
                echo "<td style='width:50%;'>"; 
                echo $singleRow['productname2']; "</td>";
                echo "<td style='width:10%;'>";
                echo $singleRow['quantity2']; "</td>";
                echo "<td  style='width:10%;'>"; 
                echo $singleRow['price2'];"</td>";
                echo "<td style='width:10%;'>";
                echo $singleRow['total2'];"</td>";
         echo  "</tr>";
                   }
           ?>
           
           
           <?php
           
                $productcode3= $singleRow['productcode3'];
                $productname3= $singleRow['productname3'];
                $quantity3= $singleRow['quantity3'];
                $price3 = $singleRow['price3'];
                $total3= $singleRow['total3'];
                
                 if (empty($productcode3)) {
                   } else {
                
             echo "<tr>";
                echo "<td  style='width:10%;'>"; 
                echo $singleRow['productcode3']; "</td>";
                echo "<td style='width:50%;'>"; 
                echo $singleRow['productname3']; "</td>";
                echo "<td style='width:10%;'>";
                echo $singleRow['quantity3']; "</td>";
                echo "<td  style='width:10%;'>"; 
                echo $singleRow['price3'];"</td>";
                echo "<td style='width:10%;'>";
                echo $singleRow['total3'];"</td>";
         echo  "</tr>";
                   }
           ?>
           
           
           <?php
           
                $productcode4= $singleRow['productcode4'];
                $productname4= $singleRow['productname4'];
                $quantity4= $singleRow['quantity4'];
                $price4 = $singleRow['price4'];
                $total4= $singleRow['total4'];
                
                 if (empty($productcode4)) {
                   } else {
                
             echo "<tr>";
                echo "<td  style='width:10%;'>"; 
                echo $singleRow['productcode4']; "</td>";
                echo "<td style='width:50%;'>"; 
                echo $singleRow['productname4']; "</td>";
                echo "<td style='width:10%;'>";
                echo $singleRow['quantity4']; "</td>";
                echo "<td  style='width:10%;'>"; 
                echo $singleRow['price4'];"</td>";
                echo "<td style='width:10%;'>";
                echo $singleRow['total4'];"</td>";
         echo  "</tr>";
                   }
           ?>
           
           
           <?php
           
                $productcode5= $singleRow['productcode5'];
                $productname5= $singleRow['productname5'];
                $quantity5= $singleRow['quantity5'];
                $price5 = $singleRow['price5'];
                $total5= $singleRow['total5'];
                
                 if (empty($productcode5)) {
                   } else {
                
             echo "<tr>";
                echo "<td  style='width:10%;'>"; 
                echo $singleRow['productcode5']; "</td>";
                echo "<td style='width:50%;'>"; 
                echo $singleRow['productname5']; "</td>";
                echo "<td style='width:10%;'>";
                echo $singleRow['quantity5']; "</td>";
                echo "<td  style='width:10%;'>"; 
                echo $singleRow['price5'];"</td>";
                echo "<td style='width:10%;'>";
                echo $singleRow['total5'];"</td>";
         echo  "</tr>";
                   }
           ?>
           
           
         <?php
           
                $productcode6= $singleRow['productcode6'];
                $productname6= $singleRow['productname6'];
                $quantity6= $singleRow['quantity6'];
                $price6 = $singleRow['price6'];
                $total6= $singleRow['total6'];
                
                 if (empty($productcode6)) {
                   } else {
                
             echo "<tr>";
                echo "<td  style='width:10%;'>"; 
                echo $singleRow['productcode6']; "</td>";
                echo "<td style='width:50%;'>"; 
                echo $singleRow['productname6']; "</td>";
                echo "<td style='width:10%;'>";
                echo $singleRow['quantity6']; "</td>";
                echo "<td  style='width:10%;'>"; 
                echo $singleRow['price6'];"</td>";
                echo "<td style='width:10%;'>";
                echo $singleRow['total6'];"</td>";
         echo  "</tr>";
                   }
           ?>
           
           
           <?php
           
                $productcode7= $singleRow['productcode7'];
                $productname7= $singleRow['productname7'];
                $quantity7= $singleRow['quantity7'];
                $price7 = $singleRow['price7'];
                $total7= $singleRow['total7'];
                
                 if (empty($productcode7)) {
                   } else {
                
             echo "<tr>";
                echo "<td  style='width:10%;'>"; 
                echo $singleRow['productcode7']; "</td>";
                echo "<td style='width:50%;'>"; 
                echo $singleRow['productname7']; "</td>";
                echo "<td style='width:10%;'>";
                echo $singleRow['quantity7']; "</td>";
                echo "<td  style='width:10%;'>"; 
                echo $singleRow['price7'];"</td>";
                echo "<td style='width:10%;'>";
                echo $singleRow['total7'];"</td>";
         echo  "</tr>";
                   }
           ?>
           
           
           
           <?php
           
                $productcode8= $singleRow['productcode8'];
                $productname8= $singleRow['productname8'];
                $quantity8= $singleRow['quantity8'];
                $price8 = $singleRow['price8'];
                $total8= $singleRow['total8'];
                
                 if (empty($productcode8)) {
                   } else {
                
             echo "<tr>";
                echo "<td  style='width:10%;'>"; 
                echo $singleRow['productcode8']; "</td>";
                echo "<td style='width:50%;'>"; 
                echo $singleRow['productname8']; "</td>";
                echo "<td style='width:10%;'>";
                echo $singleRow['quantity8']; "</td>";
                echo "<td  style='width:10%;'>"; 
                echo $singleRow['price8'];"</td>";
                echo "<td style='width:10%;'>";
                echo $singleRow['total8'];"</td>";
         echo  "</tr>";
                   }
           ?>
           
           <?php
           
                $productcode9= $singleRow['productcode9'];
                $productname9= $singleRow['productname9'];
                $quantity9= $singleRow['quantity9'];
                $price9 = $singleRow['price9'];
                $total9= $singleRow['total9'];
                
                 if (empty($productcode9)) {
                   } else {
                
             echo "<tr>";
                echo "<td  style='width:10%;'>"; 
                echo $singleRow['productcode9']; "</td>";
                echo "<td style='width:50%;'>"; 
                echo $singleRow['productname9']; "</td>";
                echo "<td style='width:10%;'>";
                echo $singleRow['quantity9']; "</td>";
                echo "<td  style='width:10%;'>"; 
                echo $singleRow['price9'];"</td>";
                echo "<td style='width:10%;'>";
                echo $singleRow['total9'];"</td>";
         echo  "</tr>";
                   }
           ?>
              
          
           
                 
                </tbody>
            </table>
            <p class="centered">Thanks for your purchase!
                <br></p>

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
                        echo '<img src="./'.$filePath.'" />'; 
                    }
                ?>
        </div>
        <button id="btnPrint" class="hidden-print" onClick="window.print()">Print</button>
        <script src="script.js"></script>
    </body>
</html>