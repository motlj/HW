<?php
$numbersList = array (1,2,3);
count($numbersList);
$switch = 1;
for ($i=0; $i < count($numbersList) - 1; $i++) {
	$numbersList[$i] = $numbersList[$i + 1];
}
$numbersList[$i] = $switch; 
print_r ($numbersList);
 
for ($i =0; $i < count($numbersList); $i++) {
	$numbersList[$i] = $numbersList[$i] + 5;
}
print_r ($numbersList);
?>
