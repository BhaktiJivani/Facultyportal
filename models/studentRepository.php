<?php

include_once 'models/student.php';

class StudentRepository {
    private $db;

    public function __construct($dbConnection) {
        $this->db = $dbConnection;
    }

	public function getStudents() {
		$studentList = array();
		$i = 0;
        $sql = "select * from students";
        $checkCount = $this->db->query($sql);
		$check = $checkCount->fetch();
        while ($check) {
			$studentList[$i++] = new Student($check['studentid'],$check['name']);
            $check = $checkCount->fetch();
        }
		return $studentList;
    }
}
