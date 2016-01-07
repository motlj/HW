<?php

function computePay($hours,$rate){
$overtimeRate = $rate*1.5;
if ($hours <= 40) {
	return ($hours*$rate);
}
else {$overtimeHours = $hours-40;
	return ($overtimeHours*$overtimeRate) + (40*$rate);
}
}
 
$hours = 45;
$rate = 10;

$Pay = computePay($hours,$rate);
echo $Pay;
?>

