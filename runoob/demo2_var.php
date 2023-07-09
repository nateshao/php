<?php
$x = 5;
$y = 10;

function myTest()
{
    global $x, $y;
    $y = $x + $y;
}

myTest();
echo $y; // 输出 15

?>


<?php
$x = 5;
$y = 10;
function myTest1()
{
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}

myTest1();
echo $y;
?>
