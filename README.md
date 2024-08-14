$a = 5;
$b = '05';
var_dump($a == $b);
var_dump((int)'012345');
var_dump((float)123.0 === (int)123.0);
var_dump(0 == 'hello, world');
\n
bool(true) int(12345) bool(false) bool(false)   version 8.2\n
bool(true) int(12345) bool(false) bool(true)    version 7.4

$num1+=+$num2-$num2=$num1;  - обмен значениями 
