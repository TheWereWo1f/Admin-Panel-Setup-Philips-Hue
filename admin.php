<?php
error_reporting(0);

$view = new stdClass();

$view->pageTitle = 'Admin Panel';

if ($_POST['Save']) {
    $tempOpt = $_POST['option'];
    $minOpt = $_POST['option1'];
    $maxOpt = $_POST['option2'];
    $path = fopen("/init.conf","w") or die("Unable to open file!");
    $text = $tempOpt.PHP_EOL.$minOpt.PHP_EOL.$maxOpt;
    fwrite($path, $text);
    fclose($path);
}
require_once('Views/admin.phtml');
