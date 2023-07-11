<?php
//定义变量保存学生资料
$name = '邵桐杰';            //保存学生的姓名
$birth = '2001-08-07';    //保存学生的出生日期
$subject = '千羽的编程时光';        //保存学生的所属学科
$snum = '0150427001';    //保存学生的学号

// 分割字符串，获取学生出生的年、月、日
$temp = explode('-', $birth);

$stu_by = $temp[0];
$stu_bm = $temp[1];
$stu_bd = $temp[2];

// 获取当前时间的年份、月份和日期
$cur_y = date('Y'); //4位数字完整表示的年份
$cur_m = date('n'); //数字表示的月份，没有前导零,1~12
$cur_d = date('j'); //月份中的第几天，没有前导零,1~31

// 计算学生从出生到当前年的周岁
$age = $cur_y - $stu_by;
//判断学生是否已过生日
if ($cur_m < $stu_bm || $cur_m == $stu_bm && $cur_d < $stu_bd) {
    $age--;
}

// 判断学生的日期是否是两位数
if ($stu_bd < 10) {
    $stu_bd = '0' . $stu_bd;
}
$date = "$stu_bm.$stu_bd";
// 定义保存星座图片名称的变量
$lev = '';
if ($date >= 1.21 && $date <= 2.19) {
    $const = '水瓶座';
    $lev = 1;
} elseif ($date >= 2.20 && $date <= 3.20) {
    $const = '双鱼座';
    $lev = 2;
} elseif ($date >= 3.21 && $date <= 4.20) {
    $const = '白羊座';
    $lev = 3;
} elseif ($date >= 4.21 && $date <= 5.21) {
    $const = '金牛座';
    $lev = 4;
} elseif ($date >= 5.22 && $date <= 6.21) {
    $const = '双子座';
    $lev = 5;
} elseif ($date >= 6.22 && $date <= 7.22) {
    $const = '巨蟹座';
    $lev = 6;
} elseif ($date >= 7.23 && $date <= 8.23) {
    $const = '狮子座';
    $lev = 7;
} elseif ($date >= 8.24 && $date <= 9.23) {
    $const = '处女座';
    $lev = 8;
} elseif ($date >= 9.24 && $date <= 10.23) {
    $const = '天秤座';
    $lev = 9;
} elseif ($date >= 10.24 && $date <= 11.22) {
    $const = '天蝎座';
    $lev = 10;
} elseif ($date >= 11.23 && $date <= 12.21) {
    $const = '射手座';
    $lev = 11;
} else {
    $const = '魔羯座';
    $lev = 12;
}
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>判断学生星座</title>
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

    .const span {
        line-height: 60px;
    }

    .const img {
        width: 50px;
        height: 50px;
        border-radius: 50px;
        border: 1px solid #74A4CD;
        vertical-align: middle;
    }
</style>
<body>
<div class="detial">
    <table>
        <tr>
            <th colspan="3">判断学生星座</th>
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
        <tr>
            <td>星　　座:</td>
            <td class="const">
                <span><?php echo $const; ?></span>
                <img src="./images/<?php echo $lev . '.png'; ?>"/>
            </td>
        </tr>
    </table>
    <div class="icon-top"></div>
    <div class="icon-bottom"></div>
</div>
</body>
</html>