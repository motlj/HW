<?php
//INCOMPLETE AND INCORRECT CODE:
//$myString = "I really hope that I'm doing this correctly.";
//$word = "";
//$explosion = array();
//	for ($i = 0; $i == count($myString); $i++){
//		if($myString{$i} == " "){
//			array_push($explosion, $i);

//}
//}
//print_r($explosion);


function explosion($delimiter, $myString){
$word = "";
$myExplosion = array();
	for ($i = 0; $i <strlen($myString); $i++){
		if($myString[$i] == " ") {
			array_push($myExplosion,$word);
				$word = "";
		} else {
			$word = $word.$myString[$i];
		}
	}
array_push($myExplosion,$word);
return $myExplosion;
}

print_r (explosion(" ", "I really hope this works."));






?>
