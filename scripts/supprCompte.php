<?php
session_start();
require('../include/dbConnect.php');

$query = $connect->prepare("DELETE FROM playstation WHERE mail = ?");
$query->execute([$_SESSION['mail']]);
header('Location: index.php');
exit();