<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="style.css">
        <title>Receipt example</title>

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
            <p class="centered">RECEIPT EXAMPLE
                <br>Address line 1
                <br>Address line 2</p>
            <table>
                <thead>
                    <tr>
                        <th class="quantity">Q.</th>
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
                echo $singleRow['quantity']; "</td>";
                echo "<td  style='width:10%;'>"; 
                echo $singleRow['price'];"</td>";
                echo "<td style='width:10%;'>";
                echo $singleRow['total'];"</td>";
         echo  "</tr>";
                   }
           ?>
                 
                </tbody>
            </table>
            <p class="centered">Thanks for your purchase!
                <br></p>
        </div>
        <button id="btnPrint" class="hidden-print">Print</button>
        <script src="script.js"></script>
    </body>
</html>