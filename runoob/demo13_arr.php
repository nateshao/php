<?php
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
echo "<br>";
$arr = array("zhangsan", "lisi", "wangwu");
echo $arr[0] . "," . $arr[1] . "," . $arr[2];

// count()
echo "<br>";
echo count($arr);
?>

<?php
$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
echo "Peter is " . $age['Peter'] . " years old.";
?>

<?php
$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

foreach ($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
?>

<?php
$arr1 = array(1, 2, 3);
$arr2 = array(1, 4, 6,"ewq");
$res = array_merge($arr1, $arr2);

echo $res; // 输出Array
echo "<br>";
// 遍历
foreach ($res as $re=>$re_value){
    echo $re_value;
}

?>

















