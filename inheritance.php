<?php
class car {
	var $make;  //properties
	var $model;
	var $body;
	var $color;
	var $year;
	var $doors;
	var $tranmission;
	var $engine;
	var $capacity;
	var $axels;
	function __construct(){;}      //functions
	function __accelerates() {;}
	function __brakes() {;}
	function __transports() {;}
	function __breaksDown() {;}
	function __turns(){;}
}
class truck extends Car {
	function __construct(){;}
	function __haulPayload(){;}
	function __tow(){;}
	function __plow(){;}
}

class semi extends truck {
	function __construct(){;}
	function __freight(){;}
	function __sleepsDriver(){;}
	function __comesWithTruckerHat(){;}
	function __interchangeableTrailer(){;}
	function __eighteenSpeed(){;}
	function __eighteenWheeler(){;}
	function __cbRadio(){;}
}
?>

	
