<?php


class Student {
    public $stuID;
    public $stuName;

    public function __construct($stuID, $stuName) {
        $this->stuID = $stuID;
        $this->stuName = $stuName;
    }

}
