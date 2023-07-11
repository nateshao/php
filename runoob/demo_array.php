<?php
//定义索引数组
$color = array('red', 'blue');                  //省略键时，默认使用0、1作为键
$fruit = array(2 => 'apple', 5 => 'grape');         //指定键
//定义关联数组
$card = array('id' => 100, 'name' => 'Tom');        //使用字符串作为键
//定义空数组、混合型数组
$empty = array();                               //空数组
$mixed = array(0, 'str', true, array(1, 2));    //数组元素支持多种数据类型，支持多维数组
$data = array('name' => 'test', 123);             //此时123省略键，默认使用0作为键
$list = array(5 => 'a', 'id' => 'b', 123);          //此时123省略键，默认使用6作为键（即5+1）
?>


<?php

//定义索引数组
$color = array('red', 'blue');                  //省略键时，默认使用0、1作为键
print_r($color);
echo "<br>";
$fruit = array(2 => 'apple', 5 => 'grape');         //指定键
print_r($fruit);
echo "<br>";
//定义关联数组
$card = array('id' => 100, 'name' => 'Tom');        //使用字符串作为键
print_r($card);
echo "<br>";
//定义空数组、混合型数组
$empty = array();                               //空数组
print_r($empty);
echo "<br>";
$mixed = array(0, 'str', true, array(1, 2));    //数组元素支持多种数据类型，支持多维数组
print_r($mixed);
echo "<br>";
$data = array('name' => 'test', 123);             //此时123省略键，默认使用0作为键
print_r($data);
echo "<br>";
$list = array(5 => 'a', 'id' => 'b', 123);          //此时123省略键，默认使用6作为键（即5+1）
print_r($list);
?>















