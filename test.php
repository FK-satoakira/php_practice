<?php
$s = "hello";$s2 = "world";
echo $s.$s2;
$n = 3;
$nn = $n++;     /* 式が評価された後プラス、つまり、$nnに３を代入した後$nは４になる */
echo $n;    /* 4 */
echo $nn;   /* 3 */
$a = 3;
echo $n+$a;     /* 4+3 */
echo $nn+$a;    /* 3+3 */

