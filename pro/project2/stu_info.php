<?php
	//定义变量保存学生资料
	$name = '王六';			//保存学生的姓名
	$birth = '1996-08-07';	//保存学生的出生日期
	$subject = 'PHP';		//保存学生的所属学科
	$snum = '0150427001';	//保存学生的学号
?>
<!doctype html>
<html>
 <head>
  <meta charset="utf-8">
  <title>展示学生资料</title>
 </head>
 <style>
    .detial{border:2px solid #FCD5B5;background:#FDEADA;float:left;line-height:40px;margin:20px;position:relative;}
	.detial table{margin:20px 65px 40px;}
	.detial table th{border-bottom:2px dotted #FAC090;padding-bottom:5px;}
	.icon-top{width:40px;height:61px;position:absolute;top:0;margin-top:-15px;margin-left:-10px;background:url('images/icon_top.png');background-size:100% auto;}
	.icon-bottom{width:80px;height:39px;position:absolute;right:0;bottom:0;background:url('images/icon_bottom.png');background-size:100% auto;}
	.detial table td:nth-child(1){min-width:85px;}
 </style>
 <body>
	<div class="detial">
		<table>
			<tr>
				<th colspan="3">展示学生资料</th>
			</tr>
			<tr>
				<td>姓　　名：</td>
				<td><?php echo $name;?></td>
			</tr>
			<tr>
				<td>出生日期：</td>
				<td><?php echo $birth;?></td>
			</tr>
			<tr>
				<td>学　　科:</td>
				<td><?php echo $subject;?></td>
			</tr>
			<tr>
				<td>学　　号:</td>
				<td><?php echo $snum;?></td>
			</tr>
		</table>
		<div class="icon-top"></div>
		<div class="icon-bottom"></div>
	</div>
 </body>
</html>