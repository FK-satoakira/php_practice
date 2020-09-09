<?php
$num = 10;
$nums = array(100,200,300);
$nums[3]=400;
$nums = array(1,2,3,4);
$nums[0]=100;
echo $num+$nums[0]+$nums[1]+$nums[2]+$nums[3];

// 配列は個別、一括どちらからも上書き可能。
// 文字列と連結は不可。(今のところ)
