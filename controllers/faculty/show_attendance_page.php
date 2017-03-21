<?php

	include_once "models/attendance.php";
	include_once "models/attendanceRepository.php";
	include_once "models/student.php";
	include_once "models/studentRepository.php";
	
	$attendanceDB = new AttendanceRepository($db);
	$studentDB = new StudentRepository($db);
	$checkExistAttendance=false;
	if(isset($_REQUEST['week'])){
		$checkExistAttendance = $attendanceDB->checkAttendance($_REQUEST['week']);
		$attendanceCount=count($checkExistAttendance);
		
		$studentsName = $studentDB->getStudents();
		$studentCount=count($studentsName);
	}
	if(isset($checkExistAttendance) && $attendanceCount>0){
		$output = include_once "views/attendance.php";
	}
	else{
		$output = include_once "views/attendance.php";
	}
	
	return $output;
?>