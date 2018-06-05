<?php
/**
 * This software was built by:
 * Daniel Tomé Fernández <danieltomefer@gmail.com>
 * GitHub: danitome24
 */
declare(strict_types=1);

namespace Tdd\StringCalculator;

use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

/**
 * Class CalculatorTest
 * @package Tdd\StringCalculator
 * @group calculator
 */
class CalculatorTest extends TestCase
{

    public function testShouldReturnZeroOnSumEmptyString(): void
    {
        // Initializations
        $emptyString = '';
        $calculator = new SumCalculator();

        // Assertions
        $this->assertEquals(0, $calculator->sum($emptyString));
    }

    /**
     * @dataProvider oneValueToSumProvider
     * @param int $expected
     * @param string $stringToSum
     */
    public function testShouldReturnSameValueOnSumOneNumber($expected, $stringToSum)
    {
        // Initializations
        $calculator = new SumCalculator();

        // Assertions
        $this->assertEquals($expected, $calculator->sum($stringToSum));
    }

    public function oneValueToSumProvider(): array
    {
        return [
            [1, '1'],
            [2, '2'],
            [5, '5'],
            [24, '24']
        ];
    }

    /**
     * @dataProvider twoValuesToSumProvider
     * @param int $expected
     * @param string $stringToSum
     */
    public function testShouldReturnSumResultOnTwoNumbersSum($expected, $stringToSum): void
    {
        // Initializations
        $calculator = new SumCalculator();

        // Assertions
        $this->assertEquals($expected, $calculator->sum($stringToSum));
    }

    public function twoValuesToSumProvider(): array
    {
        return [
            [15, '10,5'],
            [7, '4,3'],
            [24, '12,12'],
            [2, '1,1']
        ];
    }

    /**
     * @dataProvider threeValuesToSumProvider
     * @param int $expected
     * @param string $stringToSum
     */
    public function testShouldReturnSumResultOnThreeNumbersSum($expected, $stringToSum): void
    {
        // Initializations
        $calculator = new SumCalculator();

        // Assertions
        $this->assertEquals($expected, $calculator->sum($stringToSum));
    }

    public function threeValuesToSumProvider(): array
    {
        return [
            [15, '10,2,3'],
            [15, '4,3,8'],
            [79, '12,12,55'],
            [3, '1,1,1']
        ];
    }

    /**
     * @dataProvider multipleValuesToSumProvider
     * @param int $expected
     * @param string $stringToSum
     */
    public function testShouldReturnSumResultOnMultipleNumbersSum($expected, $stringToSum): void
    {
        // Initializations
        $calculator = new SumCalculator();

        // Assertions
        $this->assertEquals($expected, $calculator->sum($stringToSum));
    }

    public function multipleValuesToSumProvider(): array
    {
        return [
            [12, '10,2'],
            [20, '4,3,8,5'],
            [79, '12,12,55'],
            [12, '1,1,1,1,1,1,1,1,1,1,1,1']
        ];
    }

    /**
     * @dataProvider numbersWithEOLAndCommas
     * @param $expected
     * @param $stringToSum
     */
    public function testShouldActAsCommaWhenEndOfLinesBetweenNumbers($expected, $stringToSum): void
    {
        $calculator = new SumCalculator();

        $this->assertEquals($expected, $calculator->sum($stringToSum));
    }

    public function numbersWithEOLAndCommas(): array
    {
        return [
            [15, '5,5\n5'],
            [28, '3\n15,10'],
            [3, '1\n1\n1']
        ];
    }

    public function testShouldThrowExceptionOnUsingNegativeNumbers(): void
    {
        $stringWithNegativeNumbers = '1\n2,-1';
        $sumCalculator = new SumCalculator();

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('negative numbers not allowed: -1');

        $sumCalculator->sum($stringWithNegativeNumbers);
    }

    public function testShouldIgnoreBiggerNumbersThanValue(): void
    {
        $stringWithNumberBiggerValue = '98\n1001,43';
        $expectedResult = 141;
        $sumCalculator = new SumCalculator();

        $this->assertEquals($expectedResult, $sumCalculator->sum($stringWithNumberBiggerValue));
    }
}
