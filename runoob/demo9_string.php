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
echo $txt1 + $txt2; // 0  php的+是运算
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
echo strpos("Hello world!","world");
?>












