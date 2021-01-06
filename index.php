<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Dream: Currency Converter</title>
</head>
<body>
<?php 
// declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
?>

<h1> </h1>

<form method="post" name="form">
<label for="amount">Amount:</label><br>
<input type="number" id="amount" name="amount" placeholder="1" min="0"/>
<br>
<br>

<select name="currency1" id="currency1">
    <option value="taiwandollar">TWD 🇹🇼</option>
    <option value="bath">Thai Bath 🇹🇭</option>
</select>
<br>
<br>

<select name="currency2" id="currency2">
    <option value="euro">Euro 🇪🇺</option>
</select>
<br>
<br>

<input name="submit" type="submit" />

</form>

<br>

<?php
$taiwandollartoeuro = 0.0289540;
$eurototaiwandollar = 34.5376;
$thaibathtoeuro = 0.0271211;
    
    if (isset($_POST["submit"])) { 

        $amount = $_POST["amount"];
        $currency = $_POST["currency1"];

        switch ($currency) {
            case 'taiwandollar':
            $toeuros = $amount * $taiwandollartoeuro;
            echo $amount . " in TWD is " . $toeuros . "€.";
            break;
            
            case 'bath':
            $toeuros = $amount * $thaibathtoeuro;
            echo $amount . " in Thai Bath is " . $toeuros . "€.";
            break;

            default:
            break;
        }
    }

?> 


</body>
</html>