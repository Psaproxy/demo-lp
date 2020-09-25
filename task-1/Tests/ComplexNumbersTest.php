<?php

declare(strict_types=1);

namespace Test\Task1\Tests;

require_once dirname(__DIR__).'/vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use Test\Task1\ComplexNumber;
use Test\Task1\ComplexNumbersHelper;

class ComplexNumbersTest extends TestCase
{
    private ComplexNumber $numberA;

    private ComplexNumber $numberB;

    public function setUp(): void
    {
        $this->numberA = new ComplexNumber(25, -9.20);
        $this->numberB = new ComplexNumber(20.20, 10);
    }

    public function testAddition(): void
    {
        $numberC = ComplexNumbersHelper::addition($this->numberA, $this->numberB);
        $this->assertSame((float)45.2, $numberC->realPart());
        $this->assertSame((float)0.8, $numberC->imaginaryPart());
    }

    public function testSubtraction(): void
    {
        $numberC = ComplexNumbersHelper::subtraction($this->numberA, $this->numberB);
        $this->assertSame((float)4.8, $numberC->realPart());
        $this->assertSame((float)-19.2, $numberC->imaginaryPart());
    }

    public function testMultiplication(): void
    {
        $numberC = ComplexNumbersHelper::multiplication($this->numberA, $this->numberB);
        $this->assertSame((float)597, $numberC->realPart());
        $this->assertSame((float)64.16, $numberC->imaginaryPart());
    }

    public function testDivision(): void
    {
        $numberC = ComplexNumbersHelper::division($this->numberA, $this->numberB);
        $this->assertSame(0.81292811589639, $numberC->realPart());
        $this->assertSame(-0.8578852058893, $numberC->imaginaryPart());
    }
}
