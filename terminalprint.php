<?php

//including the database connection file
include_once("connection.php");

//fetching data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM rentorders ORDER BY id DESC");


require __DIR__ . '/vendor/autoload.php';
use Mike42\Escpos\Printer;
use Mike42\Escpos\EscposImage;
use Mike42\Escpos\PrintConnectors\WindowsPrintConnector;



$connector = new WindowsPrintConnector("smb://192.168.1.123"); 

$printer = new Printer($connector);




/* Initialize */
$printer -> initialize();

/* Text */
$printer -> text("Hello worlds\n");
$printer -> cut();





header("Location: viewrentorder.php");




?>


