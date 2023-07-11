<?php
//载入分页文件
require './page.php';
//定义数组保存学生信息
$info = array(
    array('name' => '邵桐杰', 'birth' => '2001-08-07', 'subject' => '千羽的编程时光', 'snum' => '0150427001'),
    array('name' => '张三', 'birth' => '1995-12-23', 'subject' => '千羽的编程时光', 'snum' => '0150427002'),
    array('name' => '赵二', 'birth' => '2001-01-09', 'subject' => '千羽的编程时光', 'snum' => '0150427003'),
    array('name' => '孙四', 'birth' => '1995-05-04', 'subject' => '千羽的编程时光', 'snum' => '0150427004'),
    array('name' => '钱一', 'birth' => '2001-06-24', 'subject' => '千羽的编程时光', 'snum' => '0150427005'),
    array('name' => '郑七', 'birth' => '1995-10-10', 'subject' => '千羽的编程时光', 'snum' => '0150427006'),
    array('name' => '白三', 'birth' => '2001-12-28', 'subject' => '千羽的编程时光', 'snum' => '0150427007'),
    array('name' => '李四', 'birth' => '1995-11-01', 'subject' => '千羽的编程时光', 'snum' => '0150427008'),
    array('name' => '陆八', 'birth' => '2001-02-02', 'subject' => '千羽的编程时光', 'snum' => '0150427009'),
    array('name' => '刘六', 'birth' => '1995-03-08', 'subject' => '千羽的编程时光', 'snum' => '0150427010'),
    array('name' => '谭九', 'birth' => '2001-06-01', 'subject' => '千羽的编程时光', 'snum' => '0150427011'),
    array('name' => '韩十', 'birth' => '1995-07-09', 'subject' => '千羽的编程时光', 'snum' => '0150427012'),
    array('name' => '史二', 'birth' => '2001-11-11', 'subject' => '千羽的编程时光', 'snum' => '0150427013')
);

//总记录数
$total_num = count($info);
//每页显示的条数
$perpage = 4;

//获取当前页
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
//获取总页数
$total_page = ceil($total_num / $perpage);

//对获取的当前页进行合理性判断
//1、判断当前页是否小于1
$page = max($page, 1);
//2、判断当前页码数是否大于总页数
$page = min($page, $total_page);

//获取遍历学生数组时，每页开始的数组坐标值
$start_index = $perpage * ($page - 1);
//获取遍历学生数组时，每页最大的数组坐标值
$end_index = $perpage * $page - 1;
//防止计算结果超过最大记录数
$end_index = min($end_index, $total_num - 1);
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

    .page {
        text-align: center;
        padding-top: 10px;
    }

    .page a {
        text-decoration: none;
        color: #5DB9CE;
    }

    .page a:hover {
        color: #FA3818;
    }
</style>
<body>
<div class="list">
    <div class="crumbs">&gt;&gt;&nbsp;学生管理&nbsp;&gt;&gt;&nbsp;0427PHP就业班&nbsp;&gt;&gt;&nbsp;学生列表</div>
    <!-- 分页显示学生列表-->
    <table>
        <tr>
            <th>学号</th>
            <th>姓名</th>
            <th>出生日期</th>
            <th>详情</th>
        </tr>
        <?php for ($i = $start_index; $i <= $end_index; ++$i) { ?>
            <tr>
                <td><?php echo $info[$i]['snum']; ?></td>
                <td><?php echo $info[$i]['name']; ?></td>
                <td><?php echo $info[$i]['birth']; ?></td>
                <td><a href="#">点击查看详情</a></td>
            </tr>
        <?php } ?>
    </table>
    <div class="page"><?php echo showPage($page, $total_page, $perpage); ?></div>
</div>
</body>
</html>