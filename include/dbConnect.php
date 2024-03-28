<?php
//local
$host = "localhost";
$user = "root";
$dbPass = "";
$dbName = "projet_mario";

$connect = new PDO('mysql:host='.$host.';dbname='.$dbName.';charset=UTF8', $user, $dbPass);
