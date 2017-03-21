<?php

	include_once "models/handouts.php";
	include_once "models/handoutsRepository.php";
	$handDB = new HandoutsRepository($db);
	
	$handoutSubmitted = isset($_REQUEST['save_handout']);
	if ($handoutSubmitted) {
			$weeknumber = $_REQUEST['weeknumber'];
			$handout_text = $_REQUEST['handout_text'];
			$hand = new Handout($weeknumber, $handout_text);
			$output = $handDB->addHandout($hand);
	} else {    //this runs if form was NOT submitted    
		$output = include_once "views/handout.php";
	}
	return $output;
?>