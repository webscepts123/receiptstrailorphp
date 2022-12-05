<?php

//including the database connection file
include_once("connection.php");

//fetching data in descending order (lastest entry first)

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
        <title>Receipt example <?php  ?></title>
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
            <img src="assets/newshan.png" alt="Logo">
            <p class="centered">RECEIPT 
              Telephone : +94 312273904
            <table>
                <thead>
                    <tr>
                        <th class="quantity">Q.</th>
                        <th class="description">Description</th>
                        <th class="price">LKR</th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                <?php 
        
                          
                    $quantity = $singleRow['quantity'];
                    $description = $singleRow['productname'];
                    $price = $singleRow['price'];


                    if (empty($quantity)) {
                    } else {
                        echo "<td class='quantity'>";

                        echo $singleRow['quantity']  ;
                            
                        echo "<br>";
                            
                                    
                        echo "</td>";

                                    
                    
                    }

                    if (empty($description)) {
                    } else {
                        echo "<td class='description'>";

                        echo $singleRow['productname']  ;
                            
                        echo "<br>";
                            
                                    
                        echo "</td>";

                                    
                    
                    }

                    if (empty($price)) {
                    } else {
                        echo "<td class='price'>";

                        echo $singleRow['price']  ;
                            
                        echo "<br>";
                            
                                    
                        echo "</td>";

                                    
                    
                    }
                    


                    
                    


                ?> 
                 </tr>

                 <tr>
                <?php 
        
                          
                    $quantity2 = $singleRow['quantity2'];
                    $description2 = $singleRow['productname2'];
                    $price2 = $singleRow['price2'];


                    if (empty($quantity2)) {
                    } else {
                        echo "<td class='quantity'>";

                        echo $singleRow['quantity2']  ;
                            
                        echo "<br>";
                            
                                    
                        echo "</td>";

                                    
                    
                    }

                    if (empty($description2)) {
                    } else {
                        echo "<td class='description'>";

                        echo $singleRow['productname2']  ;
                            
                        echo "<br>";
                            
                                    
                        echo "</td>";

                                    
                    
                    }

                    if (empty($price2)) {
                    } else {
                        echo "<td class='price'>";

                        echo $singleRow['price2']  ;
                            
                        echo "<br>";
                            
                                    
                        echo "</td>";

                                    
                    
                    }
                    


                    
                    


                ?> 
                 </tr>


                 <tr>
                <?php 

                          
                    $quantity3 = $singleRow['quantity3'];
                    $description3 = $singleRow['productname3'];
                    $price3 = $singleRow['price3'];


                    if (empty($quantity3)) {
                    } else {
                        echo "<td class='quantity'>";

                        echo $singleRow['quantity3']  ;
                            
                        echo "<br>";
                            
                                    
                        echo "</td>";

                                    
                    
                    }

                    if (empty($description3)) {
                    } else {
                        echo "<td class='description'>";

                        echo $singleRow['productname3']  ;
                            
                        echo "<br>";
                            
                                    
                        echo "</td>";

                                    
                    
                    }

                    if (empty($price3)) {
                    } else {
                        echo "<td class='price'>";

                        echo $singleRow['price3']  ;
                            
                        echo "<br>";
                            
                                    
                        echo "</td>";

                                    
                    
                    }
                    


                    
                    


                ?> 
                 </tr>

                 <tr>
                <?php 
        
                          
                    $quantity4 = $singleRow['quantity4'];
                    $description4 = $singleRow['productname4'];
                    $price4 = $singleRow['price4'];


                    if (empty($quantity4)) {
                    } else {
                        echo "<td class='quantity'>";

                        echo $singleRow['quantity4']  ;
                            
                        echo "<br>";
                            
                                    
                        echo "</td>";

                                    
                    
                    }

                    if (empty($description4)) {
                    } else {
                        echo "<td class='description'>";

                        echo $singleRow['productname4']  ;
                            
                        echo "<br>";
                            
                                    
                        echo "</td>";

                                    
                    
                    }

                    if (empty($price4)) {
                    } else {
                        echo "<td class='price'>";

                        echo $singleRow['price4']  ;
                            
                        echo "<br>";
                            
                                    
                        echo "</td>";

                                    
                    
                    }
                    


                    
                    


                ?> 
                 </tr>

                 <tr>
                <?php 
        
                          
                $quantity5 = $singleRow['quantity5'];
                $description5 = $singleRow['productname5'];
                $price5 = $singleRow['price5'];


                    if (empty($quantity5)) {
                    } else {
                        echo "<td class='quantity'>";

                        echo $singleRow['quantity5']  ;
                            
                        echo "<br>";
                            
                                    
                        echo "</td>";

                                    
                    
                    }

                    if (empty($description5)) {
                    } else {
                        echo "<td class='description'>";

                        echo $singleRow['productname5']  ;
                            
                        echo "<br>";
                            
                                    
                        echo "</td>";

                                    
                    
                    }

                    if (empty($price5)) {
                    } else {
                        echo "<td class='price'>";

                        echo $singleRow['price5']  ;
                            
                        echo "<br>";
                            
                                    
                        echo "</td>";

                                    
                    
                    }
                    


                    
                    


                ?> 
                 </tr>


                 <tr>
                <?php 
        
                          
                   
                    $quantity6 = $singleRow['quantity6'];
                    $description6 = $singleRow['productname6'];
                    $price6 = $singleRow['price6'];


                    if (empty($quantity6)) {
                    } else {
                        echo "<td class='quantity'>";

                        echo $singleRow['quantity6']  ;
                            
                        echo "<br>";
                            
                                    
                        echo "</td>";

                                    
                    
                    }

                    if (empty($description6)) {
                    } else {
                        echo "<td class='description'>";

                        echo $singleRow['productname6']  ;
                            
                        echo "<br>";
                            
                                    
                        echo "</td>";

                                    
                    
                    }

                    if (empty($price6)) {
                    } else {
                        echo "<td class='price'>";

                        echo $singleRow['price6']  ;
                            
                        echo "<br>";
                            
                                    
                        echo "</td>";

                                    
                    
                    }
                    


                    
                    


                ?> 
                 </tr>


                 <tr>
                <?php 
        
                  

                    $quantity7 = $singleRow['quantity7'];
                    $description7 = $singleRow['productname7'];
                    $price7 = $singleRow['price7'];


                    if (empty($quantity7)) {
                    } else {
                        echo "<td class='quantity'>";

                        echo $singleRow['quantity7']  ;
                            
                        echo "<br>";
                            
                                    
                        echo "</td>";

                                    
                    
                    }

                    if (empty($description7)) {
                    } else {
                        echo "<td class='description'>";

                        echo $singleRow['productname7']  ;
                            
                        echo "<br>";
                            
                                    
                        echo "</td>";

                                    
                    
                    }

                    if (empty($price7)) {
                    } else {
                        echo "<td class='price'>";

                        echo $singleRow['price7']  ;
                            
                        echo "<br>";
                            
                                    
                        echo "</td>";

                                    
                    
                    }
                    


                    
                    


                ?> 
                 </tr>

                
                   
                    
                   
                   
                    <tr>
                        <td class="quantity"></td>
                        <td class="description">TOTAL</td>
                        <td class="price"><?php echo $singleRow['total']?></td>
                    </tr>
                </tbody>
            </table>
            <p class="centered">Thanks for your purchase!
                <br>Shan Tailors</p>
        </div>
        <button id="btnPrint" class="hidden-print">Print</button>

        <script>
            const $btnPrint = document.querySelector("#btnPrint");
            $btnPrint.addEventListener("click", () => {
                window.print();
            });
            </script>
    </body>
</html>