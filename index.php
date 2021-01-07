<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="./styles.css">
    <title>The Dream: Currency Converter</title>
</head>
<body>
<?php 
// declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

$taiwandollar = 34.4885;
$thaibath = 36.8488;
$japaneseyen = 127.060;
$euro = 1;
    
    if (isset($_POST["submit"])) { 

        $amount = $_POST["amount"];
        $currency1 = $_POST["currency1"];
        $currency2 = $_POST["currency2"];

        switch ($currency1) {
            case 'taiwandollar':
                $currency1 = $taiwandollar;
                $currencyfrom = "New Taiwanese Dollar";
            break;

            case 'bath':
                $currency1 = $thaibath;
                $currencyfrom = "Thai Baht";
            break;
                
            case 'japaneseyen':
                $currency1 = $japaneseyen;
                $currencyfrom = "Japenese Yen";
            break;

            case 'euro':
                $currency1 = $euro;
                $currencyfrom = "euro";
            break;

            default:
            echo "Please submit your amount";
            break;
        }

        switch ($currency2) {
            case 'taiwandollar':
                $currency2 = $taiwandollar;
                $currencyto = "New Taiwanese Dollar";
            break;

            case 'bath':
                $currency2 = $thaibath;
                $currencyto = "Thai Baht";
            break;
                
            case 'japaneseyen':
                $currency2 = $japaneseyen;
                $currencyto = "Japanese Yen";
            break;

            case 'euro':
                $currency2 = $euro;
                $currencyto = "euro";
            break;

            default:
            echo "Please submit your amount";
            break;
        }

        $calculation = round(($currency2 / $currency1) * $amount);
    }
?>

<form method="post" name="form">

    <h1> 💸 Convert Your Money 💸 </h1>

    <label for="amount">Amount:</label><br>
    <input type="number" id="amount" name="amount" placeholder="1" min="0"/>
    <br>
    <br>

    <label for="currency1">From:</label><br>
    <select name="currency1" id="currency1">
        <option value="bath">Thai Bath 🇹🇭</option>
        <option value="taiwandollar"> New Taiwan Dollar 🇹🇼</option>
        <option value="japaneseyen"> Japanese Yen 🇯🇵</option>
        <option value="euro">Euro 🇪🇺</option>
    </select>

    <br>
    <br>

    <label for="currency2">To:</label><br>
    <select name="currency2" id="currency2">
        <option value="euro">Euro 🇪🇺</option>
        <option value="bath">Thai Bath 🇹🇭</option>
        <option value="taiwandollar"> New Taiwan Dollar 🇹🇼</option>
        <option value="japaneseyen"> Japanese Yen 🇯🇵</option>
    </select>

    <br>
    <br>

    <input name="submit" type="submit" value="Calculate" class="submit" />

    <br>
    <br>

    <?php
        echo $amount . " " . $currencyfrom . " will get you about <b>" . $calculation . "</b> " . $currencyto . ".";
    ?> 

</form>
</body>
</html>