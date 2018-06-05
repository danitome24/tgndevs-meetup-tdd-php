<?php
/**
 * This software was built by:
 * Daniel Tomé Fernández <danieltomefer@gmail.com>
 * GitHub: danitome24
 */
declare(strict_types=1);

namespace Tdd\StringCalculator;

class SumCalculator
{
    private const SEPARATOR_COMMA = ',';
    private const SEPARATOR_EOL = '\n';

    /**
     * @var int
     */
    private $result;

    public function __construct()
    {
        $this->result = 0;
    }

    /**
     * @param $stringToSum
     *
     * @return int
     */
    public function sum($stringToSum): int
    {
        if ($this->checkIfIsEmpty($stringToSum)) {
            return 0;
        }

        $separatedNumbers = $this->separateNumbersFromString($stringToSum);
        foreach ($separatedNumbers as $number) {
            $this->checkIfIsNegativeNumber($number);
            if ($this->isBiggerThan($number, 1000)) {
                continue;
            }
            $this->result += (int)$number;
        }

        return $this->result;
    }

    /**
     * @param $value
     * @param $limit
     *
     * @return bool
     */
    private function isBiggerThan($value, $limit): bool
    {
        return ($value > $limit);
    }

    /**
     * @param $stringToSum
     *
     * @return bool
     */
    private function checkIfIsEmpty($stringToSum): bool
    {
        return empty($stringToSum);
    }

    /**
     * @param $stringToSeparate
     * @return array
     */
    private function separateNumbersFromString($stringToSeparate): array
    {
        return preg_split('/(' . self::SEPARATOR_COMMA . '|\\' . self::SEPARATOR_EOL . ')/', $stringToSeparate);
    }

    /**
     * @param $number
     */
    private function checkIfIsNegativeNumber($number): void
    {
        if ($number < 0) {
            throw new \InvalidArgumentException('negative numbers not allowed: ' . $number);
        }
    }
}
