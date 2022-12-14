<?php

//including the database connection file
include_once("connection.php");

//fetching data in descending order (lastest entry first)

$sql = "SELECT * FROM textprinter WHERE id='" . $_GET["id"] . "'";

$result=mysqli_query($mysqli,$sql);
$singleRow = mysqli_fetch_assoc($result);
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Receipt  <?php  ?></title>
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

        .notes {
            border-block: 1px solid;
            padding: 100px
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
            <p class="centered">RECEIPT <br>
              Customer Name : 
              Telephone : +94 312273904

              <div>
                  <?php echo $singleRow['addtext']  ;  ?>;

                </div>
           
            <div class="notes">

            </div>
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