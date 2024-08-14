<?php
$a = 5;
$b = '05';
var_dump($a == $b);
var_dump((int)'012345');
var_dump((float)123.0 === (int)123.0);
var_dump(0 == 'hello, world');
$num1 = 2;
$num2 = 3;
echo "num1 = {$num1}, num2 = {$num2}";
$num1+=+$num2-$num2=$num1;
echo "num1 = {$num1}, num2 = {$num2}";
?>