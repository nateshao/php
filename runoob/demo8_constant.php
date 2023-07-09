<?php
// 区分大小写的常量名
define("GREETING", "欢迎访问 nateshao.com");
echo GREETING;    // 输出 "欢迎访问 Runoob.com"
echo '<br>';
echo greeting;   // 输出 "greeting"，但是有警告信息，表示该常量未定义
?>


<?php
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";
?>

<?php
define("GREETING", "欢迎访问 Runoob.com");

function myTest()
{
    echo GREETING;
}

myTest();    // 输出 "欢迎访问 Runoob.com"
?>