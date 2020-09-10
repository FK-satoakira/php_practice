<?php
$dat = fopen("sample.txt","a+");
flock($dat , LOCK_EX);
$count = fgets($dat);   /* テキストファイルの文字や数字 */
$count = $count + 1; /* 文字も可能 。が、テキストファイルに初めから文字が入ってると、＋演算子だとエラーになる。が、数字のカウントは実行される*/ 
rewind($dat);        /* このrewwind()が無いと二進数みたいになって６が限界なのはなぜ？ */
fwrite($dat,$count);
flock($dat , LOCK_UN);
fclose($dat);
echo $count;