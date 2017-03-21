<?php

	include_once "models/assignments.php";
	include_once "models/assignmentrepository.php";
	$assignDB = new AssignmentRepository($db);
	$checkExistHandout=false;
	if(isset($_REQUEST['week'])){
		$checkExistAssignment = $assignDB->checkAssignment($_REQUEST['week']);
	}
	if($checkExistAssignment === true){
		$output = include_once "views/assignment.php";
	}
	else{
		$output = include_once "views/assignment.php";
	}
	
	return $output; //declare new function 
?>