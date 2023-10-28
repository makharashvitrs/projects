<?php

// connect to a database

$server= "localhost";
$root= "root";
$password = "";
$database = "registration";

$conn = mysqli_connect($server, $root, $password, $database);

if (!$conn) {
	echo "Connection was unsuccessful. :(";
}