<?php

 $a = 10;
 $b = 12;
 $c = 13;
 $d = 10;

 $opA = (($a > $b) || ($a < $c)) && (($a = $c) || ($a >= $b));
 var_dump($opA);

echo "<br>";

 $opB = (($a >= $b) || ($a < $d)) && (($a >= $d) && ($c > $d));
 var_dump($opB);

 echo "<br>";

 $opC = !($a == $c) && ($c > $b);
 var_dump($opC);
