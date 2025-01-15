<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Course</title>
</head>
<body>
@php

use App\Models\Currency;
use App\Models\Money;

$firstCurrency = new Currency('UAH');
$secondCurrency = new Currency('USD');
$thirdCurrency = new Currency('USD');

echo $firstCurrency->equals($secondCurrency). '<br>';
echo $secondCurrency->equals($thirdCurrency). '<hr>';


$firstMoney = new Money(200, 'USD');
$secondMoney = new Money(10000.5, 'UAH');
$thirdMoney = new Money(8000, 'UAH');
$fourthMoney = new Money(200, 'USD');

echo "We have ".$firstMoney->getAmount()." ". $firstMoney->getCurrency(). "<br>";
echo "We have ".$secondMoney->getAmount()." ". $secondMoney->getCurrency(). "<br>";
echo "We have ".$thirdMoney->getAmount()." ". $thirdMoney->getCurrency(). "<br>";
echo "We have ".$fourthMoney->getAmount()." ". $fourthMoney->getCurrency(). "<hr>";

echo $firstMoney->equals($secondMoney). "<br>";
echo $secondMoney->equals($thirdMoney). "<br>";
echo $thirdMoney->equals($fourthMoney). "<br>";
echo $fourthMoney->equals($firstMoney). "<hr>";

//"<pre>". var_dump($firstMoney->add($secondMoney)). "</pre>";
"<pre>". var_dump($secondMoney->add($thirdMoney)). "</pre>";
"<pre>". var_dump($firstMoney->add($fourthMoney)). "</pre>";

@endphp
</body>
</html>
