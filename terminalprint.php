<?php
/**
 * This standalone script can be used to print the contents of a code page
 * for troubleshooting.
 *
 * Usage: php escpos-caracter-table.php NUMBER ...
 *
 * Code pages are numbered 0-255.
 *
 * The ESC/POS binary will be send to stdout, and should be redirected to a
 * file or printer:
 *
 *   php escpos-caracter-table.php 20 > /dev/usb/lp0
 *
 * @author Michael Billington < michael.billington@gmail.com >
 * @license MIT
 */

/* Sanity check */
if(php_sapi_name() !== "cli") {
    die("This is a command-line script, invoke via php.exen");
}
if(count($argv) < 2) {
    die("At least one code page number must be specifiedn");
}
array_shift($argv);
foreach($argv as $codePage) {
    if(!is_numeric($codePage) || $codePage < 0 || $codePage > 255) {
        die("Code pages must be numbered 0-255");
    }
}

/* Reset */
$str = "\x1b@";
foreach($argv as $codePage) {
    /* Print header, switch code page */
    $str .= "\x1bt" . chr($codePage);
    $str .= "\x1bE\x01Code page $codePage\x1bE\x00\n";
    $str .= "\x1bE\x01  0123456789ABCDEF0123456789ABCDEF\x1bE\x00\n";
    $chars = str_repeat(' ', 128);
    for ($i = 0; $i < 128; $i++) {
        $chars[$i] = chr($i + 128);
    }
    for ($y = 0; $y < 4; $y++) {
        $row = "" . " ";
        $rowHeader = "\x1bE\x01" . strtoupper(dechex($y + 8)) . "\x1bE\x00";
        $row = substr($chars, $y * 32, 32);
        $str .= "$rowHeader $row\n";
    }
}

/* Cut */
$str .= "\x1dV\x41\x03";

/* Output to STDOUT */
file_put_contents("php://stdout", $str);