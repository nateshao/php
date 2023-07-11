<?php

echo "<br>";
echo "------------------------------- Web表单 -----------------------------";
echo "<br>";


?>
    <form method="post" action="reg.php">
        <input type="text" name="user" value=""/>
        <input type="password" name="pwd" value=""/>
        <input type="submit" value=" 提交"/>
        <!--
        <form>标签的method属性表示提交方式；action属性表示提交的目标地址，
        可以用相对路径（reg.php）或完整URL地址（http://.../reg.php）。
        如果省略action属性，表单则提交给当前页面。<form>标记中的<input type="submit">是一个提交按钮，
        当单击按钮时，表单中具有name属性的元素会被提交，提交数据的参数名为name属性的值，参数值为value属性的值。
        在表单中的提交方式中，“method=post”表示表单以POST方式提交，当省略“method”属性时默认以GET方式提交。
        相比GET方式，POST方式提交的数据是不可见的，在交互时相对安全，因此通常情况下使用POST方式提交表单数据。
        -->
    </form>
    <h3>单选按钮</h3>
    <input type="radio" name="binary" value="yes"/> 对
    <input type="radio" name="binary" value="no"/> 错
    <h3>下拉菜单</h3>
    <select name="city">
        <option value=" 济南">济南</option>
        <option value="天津">天津</option>
        <option value=" 大连">大连</option>
        <option value="其他">其他</option>
    </select>
    <h3>复选框</h3>
    <!-- 复选框 -->
    <input type="checkbox" name="hobby[]" value="篮球"/> 篮球
    <input type="checkbox" name="hobby[]" value="羽毛球"/> 羽毛球
    <input type="checkbox" name="hobby[]" value="排球"/> 排球
    <input type="checkbox" name="hobby[]" value="乒乓球"/> 乒乓球

<?php
//输出所有的元素
var_dump($_POST);
//输出指定元素
echo $_POST['name'];
?>


<?php
echo "<br>";
echo "------------------------------- 判断表单数据是否存在 -----------------------------";
echo "<br>";
//获取$_POST中的name元素，没有时默认为空字符串
$name = isset($_POST['name']) ? $_POST['name'] : '';
/**
 * isset()用于判断变量或数组元素是否存在，存在时返回true，不存在时返回false。
 * 结合三元运算符的应用，可实现存在name元素时取出元素，不存在时当作空字符串处理。
 */


echo "<br>";
echo "------------------------------- 判断数据是否为空 -----------------------------";
echo "<br>";

if(empty($_POST['name'])){
    //没有收到name，或name的值为空
}

echo "<br>";
echo "------------------------------- nl2br()函数 -----------------------------";
echo "<br>";

echo nl2br("千羽\n编程", false); //输出结果：千羽<br>编程
/**
 * nl2br()函数的第2个参数用于设置使用XHTML兼容换行符，默认值为true。
 * 当第二个参数设置为false时，会将字符串中的“\n”转换成<br>，否则转换为<br/>。
 */


echo "<br>";
echo "------------------------------- trim()函数 -----------------------------";
echo "<br>";
/**
 * trim()函数可以去除字符串左右两端的空白字符，包括空格、换行和制表符等
 */
echo trim(' 测试 ');      //输出结果：“测试”
echo "<br>";
echo trim(' 测  试 ');    //输出结果：“测  试”
echo "<br>";
echo trim("\n\t 测试");   //输出结果：“测试”

echo "<br>";
echo "------------------------------- intval()函数 -----------------------------";
echo "<br>";
/**
 * intval()函数可以将字符串转换为整型
 */
echo intval('123abc');   //输出结果：123
echo "<br>";
echo intval(' 123abc');  //输出结果：123（忽略空格）
echo "<br>";
echo intval('abc123');   //输出结果：0

echo "<br>";
echo "------------------------------- strip_tags()函数 -----------------------------";
echo "<br>";

echo strip_tags('<b>测试</b>'); //输出结果：“测试”
echo strip_tags('<传智>播客');   //输出结果：“播客”

echo "<br>";
echo "------------------------------- htmlspecialchars()函数 -----------------------------";
echo "<br>";
echo htmlspecialchars('<测试>');      //输出结果：“&lt;测试&gt;”
echo htmlspecialchars('<b>测试</b>'); //输出结果：“&lt;b&gt;测试&lt;/b&gt;”
$name = 'A&B C';
$name = urlencode($name);  //URL编码
echo "http://www.bxg.com/test.php?name=$name";




echo "<br>";
echo "------------------------------- 判断数据是否为空 -----------------------------";
echo "<br>";





echo "<br>";
echo "------------------------------- 判断数据是否为空 -----------------------------";
echo "<br>";




echo "<br>";
echo "------------------------------- 判断数据是否为空 -----------------------------";
echo "<br>";


echo "<br>";
echo "------------------------------- 判断数据是否为空 -----------------------------";
echo "<br>";


echo "<br>";
echo "------------------------------- 判断数据是否为空 -----------------------------";
echo "<br>";

echo "<br>";
echo "------------------------------- 判断数据是否为空 -----------------------------";
echo "<br>";

echo "<br>";
echo "------------------------------- 判断数据是否为空 -----------------------------";
echo "<br>";
?>