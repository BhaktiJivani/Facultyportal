<?php

	include_once "models/assignments.php";
	include_once "models/assignmentrepository.php";
	$assignDB = new AssignmentRepository($db);
	
	$assignmentSubmitted = isset($_REQUEST['save_assignment']);
	if ($assignmentSubmitted) {
			$weeknumber = $_REQUEST['weeknumber'];
			$assignment_text = $_REQUEST['assignment_text'];
			$total_marks = $_REQUEST['total_marks'];
			$due_date = $_REQUEST['due_date'];
			$assign = new Assignment($weeknumber, $assignment_text,$total_marks,$due_date);
			$output = $assignDB->addAssignment($assign);
	} else {    //this runs if form was NOT submitted    
		$output = include_once "views/assignment.php";
	}
	return $output;
?>