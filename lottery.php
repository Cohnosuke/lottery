<?php

$dice = array(
    "商品A"    => 1,
    "商品B"    => 3,
    "商品C"    => 6,
    "商品D"    => 10,
    "商品E"    => 110
);

$sum  = array_sum($dice);
$rand = rand(0, $sum);

foreach($dice as $key => $probability)
{
    if (($sum -= $probability) < $rand)
    {
        echo $key . "がでました。";
        break;
    }
}