<?php

class Attendance {
    public $weekNumber;
    public $stuID;
    public $stuName;
	public $attendance;

    public function __construct($weekNumber, $stuID, $stuName, $attendance) {
        $this->weekNumber = $weekNumber;
        $this->stuID = $stuID;
        $this->stuName = $stuName;
		$this->attendance = $attendance;
    }

}
