<?php

// A es positivo y B es negativo.
($A > 0) && ($B < 0);

// A, B y C son diferentes.
($A != $B) && ($A != $C) && ($B != $C);

// E es no nulo y F no es mayor que G.
($E != 0) && !($F > $G);

// B está estrictamente entre A y C.
($B > $A) && ($B < $C);

// F es negativo o E es no negativo, pero no ambos a la vez.
($F < 0) xor !($E <0);