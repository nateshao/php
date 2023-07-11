<?php
//载入分页文件
require './page.php';
//定义数组保存学生信息
$info = array(
    array('name' => '邵桐杰', 'birth' => '2001-08-07', 'subject' => '千羽的编程时光', 'snum' => '0150427001'),
    array('name' => '张三', 'birth' => '1995-12-23', 'subject' => '京东', 'snum' => '0150427002'),
    array('name' => '赵二', 'birth' => '2001-01-09', 'subject' => '阿里', 'snum' => '0150427003'),
    array('name' => '孙四', 'birth' => '1995-05-04', 'subject' => '腾讯', 'snum' => '0150427004')
);
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>展示学生列表</title>
</head>
<style>
    .list .crumbs {
        margin: 20px;
        font-size: 16px;
        color: #666;
    }

    .list table {
        width: 85%;
        margin: 0 auto;
        text-align: center;
    }

    .list table th {
        border: 1px solid #FDD1AE;
        height: 50px;
        font-size: 24px;
        color: #5DB9CE;
        background-color: #FDEADA;
    }

    .list table td {
        border: 1px solid #FDD1AE;
        height: 40px;
        font-size: 16px;
        color: #444;
        background-color: #FDEADA;
        padding-left: 10px;
    }

    .list table td a {
        font-size: 13px;
        color: #5DB9CE;
        font-family: 'Microsoft YaHei';
        text-decoration: none;
    }

    .list table td a:hover {
        color: #FA3818;
        text-decoration: underline;
    }
</style>
<body>
<div class="list">
    <div class="crumbs">&gt;&gt;&nbsp;学生管理&nbsp;&gt;&gt;&nbsp;菜鸟&nbsp;&gt;&gt;&nbsp;学生列表</div>
    <!--使用for循环展示学生列表-->
    <table>
        <tr>
            <th>学号</th>
            <th>姓名</th>
            <th>出生日期</th>
            <th>详情</th>
        </tr>
        <?php for ($i = 0, $len = count($info); $i < $len; ++$i) { ?>
            <tr>
                <td><?php echo $info[$i]['snum']; ?></td>
                <td><?php echo $info[$i]['name']; ?></td>
                <td><?php echo $info[$i]['birth']; ?></td>
                <td><a href="#">点击查看详情</a></td>
            </tr>
        <?php } ?>
    </table>
</div>
</body>
</html>