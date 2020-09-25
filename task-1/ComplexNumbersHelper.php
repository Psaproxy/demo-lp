<?php

declare(strict_types=1);

namespace Test\Task1;

class ComplexNumbersHelper
{
    public static function addition(ComplexNumber $numberA, ComplexNumber $numberB): ComplexNumber
    {
        $realPart      = $numberA->realPart() + $numberB->realPart();
        $imaginaryPart = $numberA->imaginaryPart() + $numberB->imaginaryPart();

        return new ComplexNumber($realPart, $imaginaryPart);
    }

    public static function subtraction(ComplexNumber $numberA, ComplexNumber $numberB): ComplexNumber
    {
        $realPart      = $numberA->realPart() - $numberB->realPart();
        $imaginaryPart = $numberA->imaginaryPart() - $numberB->imaginaryPart();

        return new ComplexNumber($realPart, $imaginaryPart);
    }

    public static function multiplication(ComplexNumber $numberA, ComplexNumber $numberB): ComplexNumber
    {
        $realPart = $numberA->realPart() * $numberB->realPart();
        $realPart -= $numberA->imaginaryPart() * $numberB->imaginaryPart();

        $imaginaryPart = $numberA->realPart() * $numberB->imaginaryPart();
        $imaginaryPart += $numberA->imaginaryPart() * $numberB->realPart();

        return new ComplexNumber($realPart, $imaginaryPart);
    }

    public static function division(ComplexNumber $numberA, ComplexNumber $numberB): ComplexNumber
    {
        $denominator = pow($numberB->realPart(), 2) + pow($numberB->imaginaryPart(), 2);

        $realPart = $numberA->realPart() * $numberB->realPart();
        $realPart += $numberA->imaginaryPart() * $numberB->imaginaryPart();
        $realPart /= $denominator;

        $imaginaryPart = $numberA->imaginaryPart() * $numberB->realPart();
        $imaginaryPart -= $numberA->realPart() * $numberB->imaginaryPart();
        $imaginaryPart /= $denominator;

        return new ComplexNumber($realPart, $imaginaryPart);
    }
}
