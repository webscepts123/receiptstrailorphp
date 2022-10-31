<?php
require __DIR__ . '/vendor/autoload.php';
use Mike42\Escpos\Printer;
use Mike42\Escpos\EscposImage;
use Mike42\Escpos\PrintConnectors\NetworkPrintConnector;

$connector = new NetworkPrintConnector("192.168.1.123", 9100);
$printer = new Printer($connector);

try {
    /* Set up command */
    $source = __DIR__ . "/resources/document.html";
    $width = 550;
    $dest = tempnam(sys_get_temp_dir(), 'escpos') . ".png";
    $command = sprintf(
        "xvfb-run wkhtmltoimage -n -q --width %s %s %s",
        escapeshellarg($width),
        escapeshellarg($source),
        escapeshellarg($dest)
    );

    /* Test for dependencies */
    foreach (array("xvfb-run", "wkhtmltoimage") as $cmd) {
        $testCmd = sprintf("which %s", escapeshellarg($cmd));
        exec($testCmd, $testOut, $testStatus);
        if ($testStatus != 0) {
            throw new Exception("You require $cmd but it could not be found");
        }
    }

    
    /* Run wkhtmltoimage */
    $descriptors = array(
            1 => array("pipe", "w"),
            2 => array("pipe", "w"),
    );
    $process = proc_open($command, $descriptors, $fd);
    if (is_resource($process)) {
        /* Read stdout */
        $outputStr = stream_get_contents($fd[1]);
        fclose($fd[1]);
        /* Read stderr */
        $errorStr = stream_get_contents($fd[2]);
        fclose($fd[2]);
        /* Finish up */
        $retval = proc_close($process);
        if ($retval != 0) {
            throw new Exception("Command $cmd failed: $outputStr $errorStr");
        }
    } else {
        throw new Exception("Command '$cmd' failed to start.");
    }

    /* Load up the image */
    try {
        $img = EscposImage::load($dest);
    } catch (Exception $e) {
        unlink($dest);
        throw $e;
    }
    unlink($dest);

    /* Print it */
    $printer -> bitImage($img); // bitImage() seems to allow larger images than graphics() on the TM-T20. bitImageColumnFormat() is another option.
    $printer -> cut();
} catch (Exception $e) {
    echo $e -> getMessage();
} finally {
    $printer -> close();
}