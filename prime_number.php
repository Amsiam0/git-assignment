<?php

$n = 10;

$flag = 1;

for($i=2;$i<$n;$i++){
    if($n/$i){
        $flag = 0;
        break;
    }
}

if($n>1 && $flag){
    echo "This is a prime number";
}else{
    echo "This is not a prime number";
}