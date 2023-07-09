<!-- 按照字母升序排列： -->
<?php
$cars = array("Volvo", "BMW", "Toyota");
sort($cars);
?>

<!--  按照数字升序排列  -->
<?php
$numbers = array(4, 6, 2, 22, 11);
sort($numbers);
print_r($numbers)
?>
<!-- 数组进行降序排列 -->
<?php
echo "<br>";
$cars = array("Volvo", "BMW", "Toyota");
rsort($cars);
print_r($cars)
?>


<?php
$x = 75;
$y = 25;
function addition()
{
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

addition();
echo $z;
?>