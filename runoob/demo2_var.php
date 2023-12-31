<?php
$x = 5;
$y = 10;

function myTest()
{
    global $x, $y;
    $y = $x + $y;
}

myTest();
echo $y; // 输出 15

?>


<?php
$x = 5;
$y = 10;
function myTest1()
{
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}

myTest1();
echo $y;
?>

<!-- 传值赋值 -->
<?php
echo "<br>";
echo "------------- 传值赋值 --------------";
echo "<br>";
$price = 58;     //定义变量$price，并且为其赋值为58
$cost = $price;  //定义变量$cost，并将$price的值赋值给$cost
$price = 100;    //为变量$price重新赋值为100
echo $cost;      //输出$cost的值，结果为58
echo "<br>";
echo "------------- 引用变量 --------------";
echo "<br>";
$age = 12;      // 定义变量$age，并且为其赋值为12
$num = &$age;   // 定义变量$num，并将$age值的引用赋值给$num
$age = 100;     // 为变量$age重新赋值为100
echo $num;      // 输出$num的值，结果为100
echo "<br>";
echo "------------- 可变变量 --------------";
echo "<br>";


$a = 'hello';
$hello = '千羽的编程时光';
$PHP = 'best';
echo $a;           //输出结果： hello
echo "<br>";
echo $$a;          //输出结果： PHP
echo "<br>";
echo $$$a;         //输出结果： best


?>
<!--① define()函数-->
<?php

define('CON', '千羽的编程时光');      //定义名称为CON的常量，其值为php
echo CON;                  // 输出结果：php

?>

<!-- ② const关键字 -->
<!-- ② const关键字 -->
<!-- ② const关键字 -->
<?php
const PAI = 3.14;    //定义名字为PAI的常量，其值为3.14
echo "<br>";
echo PAI;            // 输出结果：3.14
echo "<br>";
?>
<!-- （4）预定义常量 -->

<?php
//（4）预定义常量
echo PHP_VERSION;      //输出结果：5.6.19
echo "<br>";
echo PHP_OS;           // 输出结果：WINNT

echo "<br>";

$var = 100;      // 在此处定义变量$var
$str = '千羽的编程时光';    // 在此处定义变量$str
function test()
{
    //方式1：利用global关键字取得全局变量
    global $var; // 全局变量用global修饰
    echo '全局变量$var：' . $var;
    //方式2：利用$GLOBALS['变量名']访问
    echo '全局变量$str：' . $GLOBALS['str'];
}

test();
?>




