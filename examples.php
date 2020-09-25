<?php

declare(strict_types=1);

### Задача

//Требуется написать класс по работе с комплексными числами, реализовать операции сложения, вычитания, умножения и деления, а также провести тестирование его работы.

### Решение

// Для запусков тестов выполнить "vendor/bin/phpunit Tests/" из этой директории.

// По условиям задачи реализован отдельный класс помощник. В боевом проекте было бы удобно добавить методы помощника в VO комплексного числа.

namespace Test;

require_once __DIR__.'/vendor/autoload.php';

$numberA = new ComplexNumber(25, -9.20);
$numberB = new ComplexNumber(20.20, 10);

$numberC = ComplexNumbersHelper::addition($numberA, $numberB);
echo '<pre>';
echo PHP_EOL.$numberC->realPart();
echo PHP_EOL.$numberC->imaginaryPart();

$numberC = ComplexNumbersHelper::subtraction($numberA, $numberB);
echo '<pre>';
echo PHP_EOL.$numberC->realPart();
echo PHP_EOL.$numberC->imaginaryPart();

$numberC = ComplexNumbersHelper::multiplication($numberA, $numberB);
echo '<pre>';
echo PHP_EOL.$numberC->realPart();
echo PHP_EOL.$numberC->imaginaryPart();

$numberC = ComplexNumbersHelper::division($numberA, $numberB);
echo '<pre>';
echo PHP_EOL.$numberC->realPart();
echo PHP_EOL.$numberC->imaginaryPart();
