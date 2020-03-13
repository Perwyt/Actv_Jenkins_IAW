<?php

namespace politecnico\modelo;

use PHPUnit\Framework\TestCase;

class EcuacionGrado2Test extends TestCase
{
    public function testcalcular(){

        $cuadratica = new EcuacionGrado2(10,5,20);

        $test0 = $cuadratica->eq(0);
        $this->assertEquals(20, $test0);

        $test1 = $cuadratica->eq(1);
        $this->assertEquals(35, $test0);

        $test2 = $cuadratica->eq(2);
        $this->assertEquals(70, $test0);

        $test3 = $cuadratica->eq(3);
        $this->assertEquals(125, $test0);

        $test4 = $cuadratica->eq(4);
        $this->assertEquals(200, $test0);

        $test5 = $cuadratica->eq(5);
        $this->assertEquals(295, $test0);

        $test6 = $cuadratica->eq(6);
        $this->assertEquals(410, $test0);


    }
}
}
