<?php
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
echo "<br>";
$arr = array("zhangsan", "lisi", "wangwu");
echo $arr[0] . "," . $arr[1] . "," . $arr[2];

// count()
echo "<br>";
echo count($arr);
?>

<?php
$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
echo "Peter is " . $age['Peter'] . " years old.";
?>

<?php
$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

foreach ($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
?>

<?php
$arr1 = array(1, 2, 3);
$arr2 = array(1, 4, 6, "ewq");
$res = array_merge($arr1, $arr2);

echo $res; // 输出Array
echo "<br>";
// 遍历
foreach ($res as $re => $re_value) {
    echo $re_value;
}

// 函数
//
echo "<br>";
echo "------------------------------- 函数返回值 -----------------------------";
echo "<br>";

function sum($a, $b)
{    //定义sum()函数，用于求两个数的和
    $result = $a + $b;
    return $result;    //返回处理结果
}

echo sum(23, 45);        // 输出调用函数后的的返回结果：68


echo "<br>";
echo "------------------------------- 可选参数 -----------------------------";
echo "<br>";

function test($a, $b = '+golang')
{
    return $a . $b;  //拼接两个字符串
}

echo test('千羽的编程时光');     // 输出结果：itcast


echo "<br>";
echo "------------------------------- 全局变量与局部变量 -----------------------------";
echo "<br>";

$var = 100;      // 在此处定义变量 $var
$str = '千羽的编程时光';    // 在此处定义变量 $str
function test1()
{
    // 方式1：利用global关键字取得全局变量
    global $var;
    echo '全局变量$var：' . $var;
    // 方式2：利用$GLOBALS['变量名']访问
    echo '全局变量$str：' . $GLOBALS['str'];
}

test1();


echo "<br>";
echo "------------------------------- 可变函数 -----------------------------";
echo "<br>";
function test2()
{
    echo 'running....';
}

$funcname = 'test2';  // 定义变量，其值是函数的名称
echo $funcname();    // 利用可变变量调用函数
echo "<br>";
echo "------------------------------- 匿名函数  -----------------------------";
echo "<br>";
$sum = function ($a, $b) {  //定义匿名函数
    return $a + $b;
};
echo $sum(100, 200);      //输出结果：300
echo "<br>";
echo "------------------------------- 匿名函数2  -----------------------------";
echo "<br>";

function calculate($a, $b, $func)
{
    return $func($a, $b);
}

echo calculate(100, 200, function ($a, $b) {
    return $a + $b;
});  //输出结果：300


echo "<br>";
echo "------------------------------- 定义数组 -----------------------------";
echo "<br>";
// 定义索引数组
$color = array('red', 'blue');                      //省略键时，默认使用0、1作为键
$fruit = array(2 => 'apple', 5 => 'grape');         //指定键
// 定义关联数组
$card = array('id' => 100, 'name' => 'Tom');        //使用字符串作为键
// 定义空数组、混合型数组
$empty = array();                                   //空数组
$mixed = array(0, 'str', true, array(1, 2));        //数组元素支持多种数据类型，支持多维数组
$data = array('name' => 'test', 123);               //此时123省略键，默认使用0作为键
$list = array(5 => 'a', 'id' => 'b', 123);          //此时123省略键，默认使用6作为键（即5+1）
print_r($mixed);

echo "<br>";
echo "------------------------------- 访问数组 -----------------------------";
echo "<br>";

//定义数组
$info = ['id' => 1, 'name' => 'Tom'];
//方式一：通过键名访问元素
echo $info['name'];    //输出结果：Tom
$var = 'id';           //也可以使用变量的值作为键名
echo $info[$var];      //输出结果：1
//方式二：通过print_r()或 var_dump()
print_r($info);        //输出结果：Array( [id]=> 1 [name]=> Tom )
var_dump($info);       //输出结果：  (2){ ["id"]=> int(1) ["name"]=> string(3)"Tom" }


echo "<br>";
echo "------------------------------- 数组赋值 -----------------------------";
echo "<br>";

$arr = [];                   //定义数组（此步骤也可以省略）
$arr[] = '千羽的编程时光';              //等价于：$arr[0] = '千羽的编程时光'
$arr[] = 'Java';             //等价于：$arr[1] = 'Java'
$arr[5] = 'C语言';            //等价于：$arr[5] = 'C语言';
$arr['sub'] = 'iOS';         //等价于：$arr['sub'] = 'iOS';
$arr[] = 'HTML';             //等价于：$arr[6] = 'HTML'
$arr[6] = 'JavaScript';      //修改数组，替换已经存在的元素
print_r($arr);

echo "<br>";
echo "------------------------------- 数组删除 -----------------------------";
echo "<br>";
// 定义数组
$fruit = ['apple', 'pear'];
//① 删除数组中的单个元素
unset($fruit[0]);
print_r($fruit);    // 输出结果：Array ( [1] => pear )
//② 删除整个数组
unset($fruit);
print_r($fruit);    // 输出结果：空

echo "<br>";
echo "------------------------------- 数组遍历 -----------------------------";
echo "<br>";
$fruit = ['apple', 'pear',"千羽爱吃葡萄"];
foreach ($fruit as $key => $value) {
    echo $key . '---' . $value . ' ';         // 输出结果：0---apple 1---pear
}
echo "<br>";
foreach($fruit as $value){
    echo $value.' ';           // 输出结果：apple pear
}








?>

















