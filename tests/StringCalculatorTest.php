<?php

declare(strict_types=1);

namespace Deg540\StringCalculatorPHP\Test;

use Deg540\StringCalculatorPHP\StringCalculator;
use PHPUnit\Framework\TestCase;

final class StringCalculatorTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        $this->calculator = new StringCalculator();
    }

    /**
     * @test
     */
    public function givenEmptyStringReturns0()
    {
        $result = $this->calculator->add("");

        $this->assertEquals(0, $result);
    }
}