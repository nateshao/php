<?php
//function writeName()
//{
//    echo "Kai Jim Refsnes";
//}
//echo "My name is ";
//writeName();
//?>


<?php
function writeName($fname)
{
    echo $fname . " Refsnes.<br>";
}

echo "My name is ";
writeName("Kai Jim");
echo "My sister's name is ";
writeName("Hege");
echo "My brother's name is ";
writeName("Stale");
?>

<?php
function linlin($qianyu)
{
    echo $qianyu . "恋爱";
}

linlin("想");
?>


<?php
function writeName1($fname, $punctuation)
{
    echo $fname . " Refsnes" . $punctuation . "<br>";
}

echo "My name is ";
writeName1("Kai Jim", ".");
echo "My sister's name is ";
writeName1("Hege", "!");
echo "My brother's name is ";
writeName1("Ståle", "?");
?>
<!-- 返回值 -->
<?php
function add($x, $y)
{
    $total = $x + $y;
    return $total;
}

echo "1 + 16 = " . add(1, 16);
?>
