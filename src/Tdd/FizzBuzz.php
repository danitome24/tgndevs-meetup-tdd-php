<?php

namespace Tdd;

use Tdd\Spec\Multiple;
use Tdd\Writer\WriteBuzz;
use Tdd\Writer\WriteFizz;
use Tdd\Writer\WriteFizzBuzz;
use Tdd\Writer\WriteNumber;

class FizzBuzz
{
    public function list()
    {
        $list = [];
        for ($i = 1; $i <= 100; $i++) {
            if ((new Multiple())->isSatisfiedBy($i, 15)) {
                $list[] = (new WriteFizzBuzz())->write();
            } elseif ((new Multiple())->isSatisfiedBy($i, 5)) {
                $list[] = (new WriteBuzz())->write();
            } elseif ((new Multiple())->isSatisfiedBy($i, 3)) {
                $list[] = (new WriteFizz())->write();
            } else {
                $list [] = (new WriteNumber($i))->write();
            }
        }

        return $list;
    }
}
