<?php

declare(strict_types=1);

namespace Test;

require_once __DIR__.'/vendor/autoload.php';

$numberA = new ComplexNumber(25, -9.20);
$numberB = new ComplexNumber(20.20, 10);

$numberC = ComplexNumbersHelper::addition($numberA, $numberB);
echo '<br>'.(string)$numberC;

$numberC = ComplexNumbersHelper::subtraction($numberA, $numberB);
echo '<br>'.(string)$numberC;

$numberC = ComplexNumbersHelper::multiplication($numberA, $numberB);
echo '<br>'.(string)$numberC;

$numberC = ComplexNumbersHelper::division($numberA, $numberB);
echo '<br>'.(string)$numberC;
