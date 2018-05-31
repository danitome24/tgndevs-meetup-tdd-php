<?php
/**
 * This software was built by:
 * Daniel Tomé Fernández <danieltomefer@gmail.com>
 * GitHub: danitome24
 */
declare(strict_types=1);

namespace Tdd\Writer;

class WriteNumber implements Writer
{

    public function __construct($number)
    {
        $this->number = $number;
    }

    public function write(): string
    {
        return (string)$this->number;
    }
}