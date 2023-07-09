<?php
$t = date("H");
if ($t < "20") {
    echo "Have a good day!";
}
?>
    <!--ifelse-->
<?php
$t = date("H");
if ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}
?>
<?php
echo "<br>";
$t = date("H");
if ($t < "10") {
    echo "早上好";
} elseif ($t < "20") {
    echo "美好的一天";
} else {
    echo "晚上好~";
}


?>