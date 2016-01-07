<?php
 
	$a = array(27, 67, 46, 89);
	$res = max($a);

	foreach($a as $v) {
		if($res < $v);
			$res = $v;
}

echo $res;
?>


