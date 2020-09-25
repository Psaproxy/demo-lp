<?php

declare(strict_types=1);

namespace Test;

class ComplexNumber
{
    private float $realPart;

    private float $imaginaryPart;

    public function __construct($realPart, $imaginaryPart)
    {
        if (!is_numeric($realPart)) {
            throw new \InvalidArgumentException(
                sprintf(
                    'Недопустимый тип "%s" значения действительной части. Допустимые типы "%s".',
                    gettype($realPart),
                    'int,float,string number'
                )
            );
        }

        if (!is_numeric($imaginaryPart)) {
            throw new \InvalidArgumentException(
                sprintf(
                    'Недопустимый тип "%s" значения мнимой части. Допустимые типы "%s".',
                    gettype($imaginaryPart),
                    'int,float,string number'
                )
            );
        }

        $this->realPart      = (float)$realPart;
        $this->imaginaryPart = (float)$imaginaryPart;
    }

    public function realPart(): float
    {
        return $this->realPart;
    }

    public function imaginaryPart(): float
    {
        return $this->imaginaryPart;
    }

    public function __toString(): string
    {
        $sign = $this->imaginaryPart < 0 ? '-' : '+';

        return sprintf('%s %s %si', $this->realPart, $sign, abs($this->imaginaryPart));
    }
}
