<?php

$M = 8;
$N = 9;
$R = 5;
$S = 5;
$T = 4;
$V = 77;


$op = !(($M > $N && $R > $S) || (!($T < $V && $S > $M)));
var_dump($op);
