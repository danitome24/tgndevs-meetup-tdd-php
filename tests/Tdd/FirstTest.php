<?php
/**
 * This software was built by:
 * Daniel Tomé Fernández <danieltomefer@gmail.com>
 * GitHub: danitome24
 */

namespace Tdd\Test;

use PHPUnit\Framework\TestCase;

class FirstTest extends TestCase
{
    public function testAssertTrue()
    {
        $this->assertTrue(false);
    }
}
