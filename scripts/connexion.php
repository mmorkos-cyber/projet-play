<?php
session_start();
require('../include/dbConnect.php');

if(!empty($_POST['mail2']) && !empty($_POST['pass2'])) {
    $mail = htmlspecialchars($_POST['mail2']);
    $query = $connect->prepare("SELECT * FROM playstation WHERE mail = ?");
    $query->execute([$mail]);
    $user = $query->fetch();
    if($user !== false){
        $verif = password_verify($_POST['pass2'], $user['pass']);
        if($verif === true){
            $_SESSION['id'] = $user['id'];
            $_SESSION['mail'] = $user['mail'];
            $_SESSION['username'] = $user['username'];
            echo '<p>connexion reussite</p>';
            header('Location: ../profile.php');
            exit();
        } else {
            $_SESSION['error'] = "<p class='text-danger'>your Password is wrong.</p>";
            header('Location: ../createAcc.php');
            exit();
        }
    } else {
        $_SESSION['error'] = "<p class='text-danger'>your Username is wrong.</p>";
        header('Location: ../createAcc.php');
        exit();
    }
} else {
    $_SESSION['error'] = "<p class='text-danger'>you left an empty input.</p>";
    header('Location: ../createAcc.php');
    exit();
}