<?php
declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);


$taiwandollartoeuro = 0.0289540;
$eurototaiwandollar = 34.5376;

if (isset($_POST["submit"])) { 

    $amount = $_POST["amount"];

    $toeuros = $amount * $taiwandollartoeuro;

    echo $amount ;
    echo $toeuros;
    echo $taiwandollartoeuro;
}

