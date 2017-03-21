<?php

?>
<center><?php
include_once "models/PageData.php";
$pageData = new PageData();
$pageData->title = "HomeWork 2";
$pageData->addCSS('css/style.css');
$pageData->addCSS('css/navigation.css');

//connect to database
include_once "db/db_connect.php";

$pageData->content .= include_once "views/faculty_home_page.php";
$navigationIsClicked = isset($_GET["action"]);
if ($navigationIsClicked) {
    $action = $_GET["action"];
	if(isset($_GET["week"])){
		$week=$_GET["week"];
	}
	
} else {
    $action = "show_faculty_home_page";
	$week="0";
}
$page = include_once "views/page.php";
$pageData->content .= include_once "controllers/faculty/".$action.".php";

echo $page;
?>
</center>