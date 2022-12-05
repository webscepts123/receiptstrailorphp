<?php

//including the database connection file
include_once("connection.php");

//fetching data in descending order (lastest entry first)

$sql = "SELECT * FROM rentorders WHERE id='" . $_GET["id"] . "'";

$result=mysqli_query($mysqli,$sql);
$singleRow = mysqli_fetch_assoc($result);
?>


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

    <div class="ticket">
        <?php echo $singleRow['notes'] ?>
    </div>

    <button id="btnPrint" class="hidden-print">Print</button>

<script>
    const $btnPrint = document.querySelector("#btnPrint");
    $btnPrint.addEventListener("click", () => {
        window.print();
    });
    </script>