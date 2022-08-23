<?php

$A = 33;

$operacionA = !(($A > 10) && ($A < 20));

var_dump($operacionA);
 
echo "<br>";

$operacionB = !(($A> 10) || ! ($A < 20));
var_dump($operacionB);




