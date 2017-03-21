<?php


class Assignment {
    public $asignmentWeek;
    public $assignmentText;
    public $marks;
    public $duedate;

    public function __construct($asignmentWeek, $assignmentText,$marks,$duedate) {
        $this->asignmentWeek = $asignmentWeek;
        $this->assignmentText = $assignmentText;
        $this->marks = $marks;
        $this->duedate = $duedate;
    }

}
