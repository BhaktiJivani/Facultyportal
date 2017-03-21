<?php

class Handout {
    public $handoutWeek;
    public $handoutText;

    public function __construct($handoutWeek, $handoutText) {
        $this->handoutWeek = $handoutWeek;
        $this->handoutText = $handoutText;
    }

}
