<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Dream</title>
</head>
<body>

<form method="post">
<label for="amount">Amount in TWD:</label><br>
<input type="number" id="amount" name="amount" placeholder="1" min="0"/>
<p> From Taiwanese New Dollars 🇹🇼 </p> 
<p> To EURO 🇪🇺 </p>
<input name="submit" type="submit" />

<?php
    $taiwandollartoeuro = 0.0289540;
    $eurototaiwandollar = 34.5376;

    $amount = $_POST["amount"];

    $toeuros = $amount * $taiwandollartoeuro;
?>

<p>
<?php 
    echo $amount . " TWD = " . $toeuros . "€";
?>
</p>

</form>


</body>
</html>