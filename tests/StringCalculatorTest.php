<?php

declare(strict_types=1);

namespace Deg540\StringCalculatorPHP\Test;

use Deg540\StringCalculatorPHP\StringCalculator;
use Exception;
use PHPUnit\Framework\TestCase;

final class StringCalculatorTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        $this->stringCalculator = new StringCalculator();
    }

    /**
     * @test
     */
    public function givenEmptyStringReturns0(): void
    {
        $this->assertEquals(0, $this->stringCalculator->add(""));
    }

    /**
     * @test
     */
    public function givenSingleNumberReturnsSameNumber(): void
    {
        $this->assertEquals(1, $this->stringCalculator->add('1'));
    }

    /**
     * @test
     */
    public function givenNumbersSeparatedByCommasReturnsTheirSum(): void
    {
        $this->assertEquals(6, $this->stringCalculator->add('1,2,3'));
    }

    /**
     * @test
     */
    public function givenNumbersSeparatedByLineBreakReturnsTheirSum(): void
    {
        $this->assertEquals(6, $this->stringCalculator->add('1\n2\n3'));
    }

    /**
     * @test
     */
    public function givenNumbersSeparatedByCommasAndLineBreakReturnsTheirSum(): void
    {
        $this->assertEquals(6, $this->stringCalculator->add('1,2\n3'));
    }

    /**
     * @test
     */
    public function givenNumbersSeparatedBySemicolonReturnsTheirSum(): void
    {
        $this->assertEquals(3, $this->stringCalculator->add('//;\n1;2'));
    }

    /**
     * @test
     */
    public function givenNumbersSeparatedByCustomDelimiterReturnsTheirSum(): void
    {
        $this->assertEquals(3, $this->stringCalculator->add('//&\n1&2'));
    }

    /**
     * @test
     */
    public function givenNegativeNumbersThrowsException(): void
    {
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('negativos no soportados -1');

        $this->stringCalculator->add('-1');
    }


}