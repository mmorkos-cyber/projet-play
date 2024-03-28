<?php
session_start();
require('../include/dbConnect.php');

// verif of filled fields
if(!empty($_POST['mail'])) {
    $mail = htmlspecialchars($_POST['mail']);
    //update mail
    $query = $connect->prepare("UPDATE playstation SET mail = ? WHERE mail = ?");
    // update session
    $_SESSION['mail'] = $mail;
    $_SESSION['error'] = "<p class= text-success'> le mail has been modified.</p>";
    header('Location: ../profile.php');
    exit();
} else {
    //empty field
    $_SESSION['error'] = "<p class='text-danger'>field is empty.</p>";
    header('Location: ../profile.php');
    exit();
}