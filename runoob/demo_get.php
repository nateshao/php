<html>
<head>
    <meta charset="utf-8">
    <title>菜鸟教程(runoob.com)</title>
</head>
<body>

<form action="welcome.php" method="get">
    名字: <input type="text" name="fname">
    年龄: <input type="text" name="age">
    <input type="submit" value="提交">
</form>

</body>
</html>


欢迎 <?php echo $_GET["fname"]; ?>!<br>
你的年龄是 <?php echo $_GET["age"]; ?>  岁。