<?php
//function writeName()
//{
//    echo "Kai Jim Refsnes";
//}
//echo "My name is ";
//writeName();
//?>


<?php
function writeName($fname)
{
    echo $fname . " Refsnes.<br>";
}

echo "My name is ";
writeName("Kai Jim");
echo "My sister's name is ";
writeName("Hege");
echo "My brother's name is ";
writeName("Stale");
?>

<?php
function linlin($qianyu)
{
    echo $qianyu . "恋爱";
}

linlin("想");
?>


<?php
function writeName1($fname, $punctuation)
{
    echo $fname . " Refsnes" . $punctuation . "<br>";
}

echo "My name is ";
writeName1("Kai Jim", ".");
echo "My sister's name is ";
writeName1("Hege", "!");
echo "My brother's name is ";
writeName1("Ståle", "?");
?>
<!-- 返回值 -->
<?php
function add($x, $y)
{
    $total = $x + $y;
    return $total;
}

echo "1 + 16 = " . add(1, 16);

echo "<br>";
echo "<br>";

function sum($a, $b)
{    //定义sum()函数，用于求两个数的和
    $result = $a + $b;
    return $result;    //返回处理结果
}

echo sum(23, 45);        // 输出调用函数后的的返回结果：68

echo "<br>";
echo "<br>";
function cheng($c, $d)
{
    $res = $c * $d;
    return $res;
}

echo cheng(7, 8);
?>

<?php
echo "<br>";
//（3）可选参数
function test($a, $b = '+反方辩手')
{
    return $a . $b;  // 拼接两个字符串
}

echo test('正方辩手');     // 输出结果：正方辩手+反方辩手
echo "<br>";
echo test('正方辩手', "琳琳");     // 输出结果：正方辩手+反方辩手

// 匿名函数

$sum = function ($a, $b) {  // 定义匿名函数
    return $a + $b;
};
echo "<br>";
echo $sum(100, 200);      //输出结果：300

?>


















































