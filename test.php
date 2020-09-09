<?php

$f = array("orange"=>80,"apple"=>90,"grape"=>100);
foreach ($f as $key => $value) {
    echo "$key:$value<br>";
}
$p="";
$s=0;
foreach($f as $key => $v){
    if($s<$v){      /* 最初は”０”なので、orangeは80だから必ず最初はこれが代入される */
        $p=$key;
        $s=$v;
    }
}
echo $p,$s;
