<?php
$x = 5985;
var_dump($x);
echo "<br>";
$x = -345; // 负数
var_dump($x);
echo "<br>";
$x = 0x8C; // 十六进制数
var_dump($x);
echo "<br>";
$x = 047; // 八进制数
var_dump($x);
?>
<?php
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";
?>

<!--
$x=true;
$y=false;

-->
<!-- 浮点型 -->
<?php
$x = 10.365;
var_dump($x);
echo "<br>";
$x = 2.4e3;
var_dump($x);
echo "<br>";
$x = 8E-5;
var_dump($x);
?>

<?php
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";
?>
<?php
$cars = array("Volvo", "BMW", "Toyota");
var_dump($cars);
?>

<?php

class Car
{
    var $color;

    function __construct($color = "green")
    {
        $this->color = $color;
    }

    function what_color()
    {
        return $this->color;
    }
}

?>

<?php
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";
?>

<?php
$x = "Hello world!";
$x = null;
var_dump($x);
?>

<?php
$c = mysql_connect();
echo get_resource_type($c) . "\n";
// 打印：mysql link

$fp = fopen("foo", "w");
echo get_resource_type($fp) . "\n";
// 打印：file

$doc = new_xmldoc("1.0");
echo get_resource_type($doc->doc) . "\n";
// 打印：domxml document



//5. 查看数据类型

$number = 1234;
$flag = true;
var_dump($number);  //输出结果：int(1234)
var_dump($flag);    //输出结果：bool(true)
?>



