<?php

// require_once 'App/init.php';
require __DIR__ . '/vendor/autoload.php';


use App\Calculate\FirstRuleCalculator;
use App\Calculate\SecondRuleCalculator;
use App\Calculate\ThirdRuleCalculator;
use App\Calculate\FourthRuleCalculator;
use App\Calculate\PPH21Calculator;


$first = new FirstRuleCalculator();
$second = new SecondRuleCalculator($first);
$third = new ThirdRuleCalculator($second);
$fourth = new FourthRuleCalculator($third);

$calculator = new PPH21Calculator($first, $second, $third, $fourth);
//1.250.000

echo $calculator->calculate(25000000);
echo PHP_EOL;
// echo $calculator->calculate(30000000);
// echo PHP_EOL;
// echo $calculator->calculate(30000000);
// echo PHP_EOL;