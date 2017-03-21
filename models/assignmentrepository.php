<?php

include_once 'models/assignments.php';

class AssignmentRepository {
    //declare a new property
    private $db;

    //declare a constructor method requires a database connection as argument
    public function __construct($dbConnection) {
        //store the received conection in the $this->db property
        $this->db = $dbConnection;
    }

    public function addAssignment($assignment) {
		
        $sql = "INSERT INTO assignment(week, assignment, totalmarks, duedate) VALUES ('$assignment->asignmentWeek','$assignment->assignmentText','$assignment->marks','$assignment->duedate')";
        $insertCount = $this->db->exec($sql);
        if ($insertCount > 0)
            return "assignment was added.";
        else
            return "assignment wasn't added.";
    }
	public function checkAssignment($weekNumber) {
		$assignmentList = array();
        $sql = "select * from assignment where week='$weekNumber'";
        $checkCount = $this->db->query($sql);
		$check = $checkCount->fetch();
        while ($check) {
			$assignmentList[0]=$check['week'];
			$assignmentList[1]=$check['assignment'];
			$assignmentList[2]=$check['totalmarks'];
			$assignmentList[3]=$check['duedate'];
            return $assignmentList;
        }
    }
}
