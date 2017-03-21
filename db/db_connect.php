<?php


$dsn = 'mysql:host=localhost;dbname=osc_db';
$username = 'admin';
$password = '';

try {
    $db = new PDO($dsn, $username, $password);
} catch (PDOException $ex) {
    $error_msg = $ex->getMessage();
    include('db_error.php');
    exit();
}       
?>
