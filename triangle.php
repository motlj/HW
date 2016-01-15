<?php
class ShapeMaker {
	var $dots = array();
	
function __construct($size){
	for($i = 0; $i <= $size; $i++){
		$temparray = array();
			for($j = 0; $j <= $size; $j++){
				array_push($temparray,".");
		}
		array_push($this->dots,$temparray);
	}	
}

function Triangle (){
	for($i = 0; $i <= 5; $i++){  // iteration for "rows" loop - if $i (row) <= 5 move to nested loop and add 1 to $i
		for($j = 0; $j <= $i; $j++){     //iteration for "columns" loop - if $j (column) is <= $i print "." and add 1 to $j. continue to run nested loop until result is false ($j > $i). when false, print line break and go back to outer loop. remember now $i = 1. 

			print_r(".");
		}
		print_r("\n");
	}
	print_r("\n");
}


function BackwardsTriangle (){
$col = 5; //starts columns at 5
$dotlocation = 0;   //establishes dot location
	for($i = 0; $i <= 5; $i++){   //if $i (row) <= 5 move to next loop and add 1 to $i
		for($j = 0; $j <= $col; $j++){   //if $j (column) <= $col print " " and add 1 to $j. continue to run nested loop until result is false. when false move to next nested loop.
			print_r(" ");
		}
		for($d = 0; $d <= $dotlocation; $d++){   //if $d <= $dotlocation print "." and add 1 to $d.
			print_r(".");
		}
		$dotlocation = $dotlocation + 1;   //adds 1 do $dotlocation
		$col = $col-1;                     //subtracts 1 from $col
		print_r("\n");		           //print line break
	}                                          //begin outer loop again - note the new values of $col $dotlocation $i $j and $d
	print_r("\n");
}

function UpsideDownTriangle (){
$col = 5; //starts the columns at 5
	for($i = 0; $i <= 5; $i++){     //iteration for the "rows" loop - if $i <= 5 move to nested loop and add 1 to $i
		for($j = 0; $j <= $col; $j++){    //iteration for the "columns" loop - if $j <= $col print "." and add 1 to $j. run loop until false. 
			print_r(".");
		}
		$col = $col-1;      //subtracts one from $col when the nested loop is false.
		print_r("\n");      //prints line break & returns to original loop, note new values for variables.
	}
}
}

$printShape = new ShapeMaker (4);   //creates a variable calling class
	$printShape->Triangle();
	$printShape->BackwardsTriangle();
	$printShape->UpsideDownTriangle();
?>
