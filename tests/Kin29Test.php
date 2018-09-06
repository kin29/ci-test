<?php

namespace Test;

use App\Kin29;
use PHPUnit\Framework\TestCase;

class Kin29Test extends TestCase
{
    public function test_isKin29()
    {
        $name = 'kin29';
        $kin29 = new Kin29();
        $this->assertTrue($kin29->isKin29($name));
    }

}
