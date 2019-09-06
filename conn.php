<?php

$servername = 'localhost';
$username = 'root';
$password = 'H01y@cc3550r135';
$dbname = 'msg_board';

$conn = new mysqli($servername, $username, $password, $dbname);

$conn->query('SET NAMES UTF8');

if($conn->connect_error) {
	die('connection failed: ' . $conn->$connect_error);
}

?>