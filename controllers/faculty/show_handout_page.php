<?php

	include_once "models/handouts.php";
	include_once "models/handoutsRepository.php";
	$handDB = new HandoutsRepository($db);
	$checkExistHandout=false;
	if(isset($_REQUEST['week'])){
		$checkExistHandout = $handDB->checkHandout($_REQUEST['week']);
	}
	if($checkExistHandout === true){
		$output = include_once "views/handout.php";
	}
	else{
		$output = include_once "views/handout.php";
	}
	
	return $output; //declare new function 
?>