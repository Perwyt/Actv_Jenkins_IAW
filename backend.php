<?php

include_once ("politecnico\modelo\EcuacionGrado2.php");

$data = file_get_contents("php://input");
$decode = json_decode($data,true);

require "vendor/autoload.php";

$EqCuadratica = new politecnico\modelo\EcuacionGrado2($decode['a'],$decode['b'], $decode['c']);

$html ="<tr><th>x</th><th>y</th></tr>";

for ($i=0; $i < 11; $i++) {
    $result = $EqCuadratica->eq($i);
    $html .= "<tr><td>".$i."</td><td>".$result."</td></tr>";
}

echo $html;