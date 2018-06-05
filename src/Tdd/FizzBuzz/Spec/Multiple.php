<?php
/**
 * This software was built by:
 * Daniel Tomé Fernández <danieltomefer@gmail.com>
 * GitHub: danitome24
 */
declare(strict_types=1);

namespace Tdd\FizzBuzz\Spec;

class Multiple implements MultipleSpecification
{
    public function isSatisfiedBy($number, $by): bool
    {
        return $number % $by === 0;
    }
}