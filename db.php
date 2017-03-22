<?php
$host = "localhost";
$user = "it58160620";
$password = "it58160620";
$dbname = "it58160620";
$conn = new mysqli($host, $user, $password, $dbname);
$conn->query('SET NAMES UTF8');
if ($conn->connect_error) die($conn->connect_error);
?>