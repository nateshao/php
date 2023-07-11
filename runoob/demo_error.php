<?php
//① 控制是否向网页中输出错误信息
ini_set('display_errors', 1);             //将 php.ini中的display_errors设置为开启
//② 控制PHP报告哪种级别的错误
error_reporting(0);                       //不报告错误（除了E_PARSE）
error_reporting(E_ALL & ~E_NOTICE);       //除了E_NOTICE，报告其他错误
error_reporting(E_ALL);                   //报告所有错误

/**
 *
SELECT  [DISTINCT] *|{字段名1, 字段名2, 字段名3,……}
FROM 表名
[WHERE 条件表达式1]
[GROUP BY 字段名 [HAVING 条件表达式2]]
[ORDER BY 字段名 [ASC|DESC]]
[LIMIT [OFFSET] 记录数]
 */
?>