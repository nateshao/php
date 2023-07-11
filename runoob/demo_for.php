<?php
$sum = 0;
for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 == 0) {
        continue;
    }
    $sum += $i;
    echo "sum = " . $sum;
}


?>


<?php
echo "<br>";
$sum = 0;              //用于保存1~100的奇数和
for ($i = 1; $i <= 100; ++$i) {
    if ($i % 2 == 0) {   //若为偶数，则不累加
        continue;     //结束本次循环
    }
    $sum += $i;        //累加奇数
}
echo '$sum = ' . $sum;
?>