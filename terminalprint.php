<?php
require __DIR__ . '/vendor/autoload.php';
use Mike42\Escpos\Printer;
use Mike42\Escpos\EscposImage;
use Mike42\Escpos\PrintConnectors\FilePrintConnector;

$connector = new FilePrintConnector("/dev/usb/lp0");
$printer = new Printer($connector);



$printer -> text("Hello World!\n");
$printer -> cut();

$printer -> close();




?>
