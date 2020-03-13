<?php

namespace politecnico\modelo;


class EcuacionGrado2
{
    private $a, $b, $c;

    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function eq($x)
    {
        return $this->a * pow($x, 2) + $this->b * $x + $this->c;
    }
}