<?php
session_start();
require('../includes/dbConnect.php');

// verification of fields
if(!empty($_POST['username'])) {
    $username = htmlspecialchars($_POST['username']);
    // update username
    $query = $connect->prepare("UPDATE playstation SET username = ? WHERE username = ?");
    $query->execute([$username, $_SESSION['username']]);
    // update session
    $_SESSION['username'] = $username;
    $_SESSION['error'] = "<p class='text-success'>Your username has been updated.</p>";
    // redirection to profile page
    header('Location: ../profile.php');
    exit();
} else {
    // error empty field
    $_SESSION['error'] = "<p class='text-danger'>Field is empty.</p>";
    header('Location: ../profile.php');
    exit();
}