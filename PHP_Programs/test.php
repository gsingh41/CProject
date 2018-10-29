<?php

$myList = array(1, 2, 3, 4, 5);

echo "<pre>";
print_r($myList);
echo "</pre>";


$temp = $myList[0];

//echo $temp;

echo count($myList);

for ($i = 1; $i < count($myList); $i++) {
	$myList[$i - 1] = $myList[$i];
}

$myList[count($myList) - 1] = $temp;


echo "<pre>";
print_r($myList);
echo "</pre>";



?>