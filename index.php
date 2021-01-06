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
?>

<form method="post" name="form">

    <h1> Convert Your Money to Euros 💸 </h1>

    <label for="amount">Amount:</label><br>
    <input type="number" id="amount" name="amount" placeholder="1" min="0"/>
    <br>
    <br>

    <label for="currency1">From:</label><br>
    <select name="currency1" id="currency1">
        <option value="bath">Thai Bath 🇹🇭</option>
        <option value="taiwandollar"> New Taiwan Dollar 🇹🇼</option>
        <option value="japaneseyen"> Japanese Yen 🇯🇵</option>
    </select>

    <br>
    <br>

    <label for="currency2">To:</label><br>
    <select name="currency2" id="currency2">
        <option value="euro">Euro 🇪🇺</option>
    </select>

    <br>
    <br>

    <input name="submit" type="submit" value="Calculate" class="submit" />

    <br>
    <br>

<?php
$taiwandollartoeuro = 0.0289540;
$thaibathtoeuro = 0.0271211;
$japaneseyentoeuro = 0.00788118;
    
    if (isset($_POST["submit"])) { 

        $amount = $_POST["amount"];
        $currency = $_POST["currency1"];

        switch ($currency) {
            case 'taiwandollar':
            $toeuros = round(($amount * $taiwandollartoeuro), 2);
            echo $amount . " in TWD will get you " . $toeuros . " Euros.";
            break;
            
            case 'bath':
            $toeuros = round(($amount * $thaibathtoeuro), 2);
            echo $amount . " in Thai Bath will get you " . $toeuros . " Euros.";
            break;

            case 'japaneseyen':
            $toeuros = round(($amount * $japaneseyentoeuro), 2);
            echo $amount . " in JPY will get you " . $toeuros . " Euros.";
            break;

            default:
            echo "Please submit your amount";
            break;
        }
    }
?> 

</form>
</body>
</html>