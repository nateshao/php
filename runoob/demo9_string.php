<!--https://www.runoob.com/php/php-ref-string.html-->
<!--PHP 5 String 函数-->


<!-- PHP 字符串变量
字符串变量用于存储并处理文本。 -->
<?php
$txt = "Hello world!";
echo $txt;
echo PHP_EOL
?>

<!--
PHP 并置运算符
在 PHP 中，只有一个字符串运算符。
并置运算符 (.) 用于把两个字符串值连接起来。
下面的实例演示了如何将两个字符串变量连接在一起：
-->
<?php
echo "<br/>";
echo PHP_EOL;
echo PHP_EOL;
?>


<?php
echo PHP_EOL;
$txt1 = "Hello world!";
$txt2 = "What a nice day!";
echo $txt1 . " " . $txt2;
echo "<br/>";
echo "---------------------";
echo "<br/>";
echo $txt1 . $txt2; // 0  php的+是运算
?>
<!---->
<!--PHP strlen() 函数-->
<!--有时知道字符串值的长度是很有用的。-->
<!---->
<!--strlen() 函数返回字符串的长度（字节数）。-->
<!---->
<!--下面的实例返回字符串 "Hello world!" 的长度：-->
<?php
echo "<br/>";
echo strlen("Hello world!");
?>
<?php
echo "<br/>";
echo strpos("Hello world!", "world");


echo "<br>";
echo "------------------------------- 字符串函数 -----------------------------";
echo "<br>";
// PHP内置函数
// 字符串函数
// ① 字符串分割成数组
var_dump(explode('n', 'banana'));
// 输出结果：array(3){ [0]=> string(2) "ba" [1]=> string(1) "a" [2]=> string(1) "a" }
// ② 分割时限制次数
var_dump(explode('n', 'banana', 2));
// 输出结果：array(2){ [0]=> string(2) "ba" [1]=> string(3) "ana" }
// ③ 返回除了最后2个元素外的所有元素
var_dump(explode('n', 'banana', -2));
// 输出结果: array(1){ [0]=> string(2) "ba" }

echo "<br>";
echo "------------------------------- in_array() -----------------------------";
echo "<br>";

$tel = ['110', '120', '119'];
echo in_array('120', $tel) ? 'Got it!' : 'not found!';      // 输出结果：Got it!
echo "<br>";
echo in_array(120, $tel, true) ? 'Got it!' : 'not found!';  // 输出结果：not found!

/**
 * n_array()函数用于判断数组中是否存在某个元素。当省略第3个参数时，只搜索$tel数组中值为120的元素，
 * 当将第3个参数设为true时，表示不仅要搜索值为120的元素，还会检查数据类型是否相同。
 */





?>












