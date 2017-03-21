<?php

	include_once "models/attendance.php";
	include_once "models/attendanceRepository.php";
	$assignDB = new AttendanceRepository($db);
	
	$attendanceSubmitted = isset($_REQUEST['save_attendance']);
	if ($attendanceSubmitted) {
			$weeknumber[] = $_REQUEST['weeknumber'];
			$studentID[] = $_REQUEST['studentID'];
			$studentName[] = $_REQUEST['studentName'];
			$atndnce[] = $_REQUEST['atndnce'];
			
			$output = $assignDB->addAttendance($weeknumber,$studentID,$studentName,$atndnce);
	} else {
		$output = include_once "views/attendance.php";
	}
	
?>
