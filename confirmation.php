<?php
error_reporting(0);
$view = new stdClass();
$view->pageTitle = 'Confirmation';
if ($_POST['Confirm']) {
    $ip = $_GET['ip'];
    $username = $_GET['username'];
    $bulbid = $_GET['id'];
    $file = fopen("/setup.conf", "w") or die("Unable to find file");
    $string = $ip . PHP_EOL . $username . PHP_EOL . $bulbid . PHP_EOL;
    fwrite($file, $string);
    fclose($file);
    header("Location: ../admin.php");
}
    //file_put_contents($file, $string);

require_once('Views/confirmation.phtml');
