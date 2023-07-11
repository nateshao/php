<?php
//定义变量保存学生资料
$name = '邵桐杰';            //保存学生的姓名
$birth = '2001-08-07';    //保存学生的出生日期
$subject = 'PHP入门到精通';        //保存学生的所属学科
$snum = '0150427001';    //保存学生的学号

//定义变量保存学生出生的年、月、日
$stu_by = 2001;
$stu_bm = 8;
$stu_bd = 19;

//获取当前时间的年份、月份和日期
$cur_y = date('Y'); //4位数字完整表示的年份
$cur_m = date('n'); //数字表示的月份，没有前导零,1~12
$cur_d = date('j'); //月份中的第几天，没有前导零,1~31

//计算学生从出生到当前年的周岁
$age = $cur_y - $stu_by;
//判断学生是否已过生日
if ($cur_m < $stu_bm || $cur_m == $stu_bm && $cur_d < $stu_bd) {
    $age--;
}
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>展示学生资料</title>
</head>
<style>
    .detial {
        border: 2px solid #FCD5B5;
        background: #FDEADA;
        float: left;
        line-height: 40px;
        margin: 20px;
        position: relative;
    }

    .detial table {
        margin: 20px 65px 40px;
    }

    .detial table th {
        border-bottom: 2px dotted #FAC090;
        padding-bottom: 5px;
    }

    .detial table td:nth-child(1) {
        min-width: 85px;
    }

    .icon-top {
        width: 40px;
        height: 61px;
        position: absolute;
        top: 0;
        margin-top: -15px;
        margin-left: -10px;
        background: url('images/icon_top.png');
        background-size: 100% auto;
    }

    .icon-bottom {
        width: 80px;
        height: 39px;
        position: absolute;
        right: 0;
        bottom: 0;
        background: url('images/icon_bottom.png');
        background-size: 100% auto;
    }
</style>
<body>
<div class="detial">
    <table>
        <tr>
            <th colspan="3">计算学生年龄</th>
        </tr>
        <tr>
            <td>姓　　名：</td>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <td>出生日期：</td>
            <td><?php echo $birth; ?></td>
        </tr>
        <tr>
            <td>年　　龄:</td>
            <td><?php echo $age; ?></td>
        </tr>
        <tr>
            <td>学　　科:</td>
            <td><?php echo $subject; ?></td>
        </tr>
        <tr>
            <td>学　　号:</td>
            <td><?php echo $snum; ?></td>
        </tr>
    </table>
    <div class="icon-top"></div>
    <div class="icon-bottom"></div>
</div>
</body>
</html>