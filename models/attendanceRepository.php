<?php

include_once 'models/attendance.php';

class AttendanceRepository {
    private $db;
    public function __construct($dbConnection) {
        $this->db = $dbConnection;
    }

    public function addAttendance($weeknumber,$studentID,$studentName,$atndnce) {
		for($i=0;$i<count($studentID[0]);$i++){		
			$sql = "INSERT INTO attendance(week, studentid, studentname, attendance) VALUES ('".$weeknumber[0][$i]."','".$studentID[0][$i]."','".$studentName[0][$i]."','".$atndnce[0][$i]."')";
        $insertCount = $this->db->exec($sql);
		}
        if ($insertCount > 0)
            return "Attendace updated.";
        else
            return "assignment wasn't added.";
		
    }
	public function checkAttendance($weekNumber) {
		$attendanceList = array();
		$i = 0;
        $sql = "select * from attendance where week='$weekNumber'";
        $checkCount = $this->db->query($sql);
		$check = $checkCount->fetch();
        while ($check) {
			$attendanceList[$i++] = new Attendance($check['week'], $check['studentid'], $check['studentname'], $check['attendance']);
            $check = $checkCount->fetch();
        }
		return $attendanceList;
    }
}
