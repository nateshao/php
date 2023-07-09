<?php
$x = 10;
$y = 6;
echo($x + $y); // 输出16  谷歌浏览器有问题 ，16在最底下
echo '<br>';

echo($x - $y); // 输出4
echo '<br>';

echo($x * $y); // 输出60
echo '<br>';

echo($x / $y); // 输出1.6666666666667
echo '<br>';

echo($x % $y); // 输出4
echo '<br>';
echo -$x; // -10

?>

<?php
echo '<br>';
var_dump(intdiv(10, 3));
?>


<?php
echo '<br>';
echo "---------------------------";
$x = 10;
echo '<br>';
echo $x; // 输出10
echo '<br>';
$y = 20;
$y += 100;
echo $y; // 输出120

echo '<br>';
$z = 50;
$z -= 25;
echo $z; // 输出25

echo '<br>';
$i = 5;
$i *= 6;
echo $i; // 输出30

echo '<br>';
$j = 10;
$j /= 5;
echo $j; // 输出2

echo '<br>';
$k = 15;
$k %= 4;
echo $k; // 输出3
?>
<!--.是字符长拼接-->
<?php
$a = "Hello";
$b = $a . " world!";
echo $b; // 输出Hello world!

$x = "Hello";
$x .= " world!";
echo $x; // 输出Hello world!
?>
<!--
++ x	预递增	x 加 1，然后返回 x
x ++	后递增	返回 x，然后 x 加 1
-- x	预递减	x 减 1，然后返回 x
x --	后递减	返回 x，然后 x 减 1
-->

<?php

echo '<br>';
echo "---------------------------";
echo '<br>';
$x = 10;
echo ++$x; // 输出11

echo '<br>';
echo "---------------------------";
echo '<br>';
$y = 10;
echo $y++; // 输出10

echo '<br>';
echo "---------------------------";
echo '<br>';
$z = 5;
echo --$z; // 输出4

echo '<br>';
echo "---------------------------";
echo '<br>';
$i = 5;
echo $i--; // 输出5

?>

<?php
echo '<br>';
echo "---------------------------";
echo '<br>';
$x = 100;
$y = "100";
var_dump($x == $y); // returns true because values are equal
echo "<br>";
var_dump($x === $y); // returns false because types are not equal
echo "<br>";
var_dump($x != $y); // returns false because values are equal
echo "<br>";
var_dump($x !== $y); // returns true because types are not equal
echo "<br>";

$a=50;
$b=90;

var_dump($a > $b);
echo "<br>";
var_dump($a <  $b);
?>

<!--PHP 逻辑运算符-->
<!--
x and y	与	如果 x 和 y 都为 true，则返回 true	x=6
y=3
(x < 10 and y > 1) 返回 true
x or y	或	如果 x 和 y 至少有一个为 true，则返回 true	x=6
y=3
(x==6 or y==5) 返回 true
x xor y	异或	如果 x 和 y 有且仅有一个为 true，则返回 true	x=6
y=3
(x==6 xor y==3) 返回 false
x && y	与	如果 x 和 y 都为 true，则返回 true	x=6
y=3
(x < 10 && y > 1) 返回 true
x || y	或	如果 x 和 y 至少有一个为 true，则返回 true	x=6
y=3
(x==5 || y==5) 返回 false
! x	非	如果 x 不为 true，则返回 true	x=6
y=3
!(x==y) 返回 true
-->

<?php

?>







