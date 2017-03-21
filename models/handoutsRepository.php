<?php

include_once 'models/handouts.php';

class HandoutsRepository {
    //declare a new property
    private $db;

    //declare a constructor method requires a database connection as argument
    public function __construct($dbConnection) {
        //store the received conection in the $this->db property
        $this->db = $dbConnection;
    }

    public function addHandout($hand) {
        $sql = "INSERT INTO handouts (week, handout) VALUES ('$hand->handoutWeek','$hand->handoutText')";
        $insertCount = $this->db->exec($sql);
        if ($insertCount > 0)
            return "handout was added.";
        else
            return "handout wasn't added.";
    }
	public function checkHandout($weekNumber) {
		$handoutList = array();
        $sql = "select * from handouts where week='$weekNumber'";
        $checkCount = $this->db->query($sql);
		$check = $checkCount->fetch();
        while ($check) {
			$handoutList[0]=$check['week'];
			$handoutList[1]=$check['handout'];
            return $handoutList;
        }
    }
}
