<?php
session_start();
require('../include/dbConnect.php');

if (!empty($_POST['username']) && !empty($_POST['mail']) && !empty($_POST['pass']) && !empty($_POST['pass2'])) {
    //verif des mdp
    if ($_POST['pass'] === $_POST['pass2']) {
        //securisation des inputs
        $username = htmlspecialchars($_POST['username']);
        $mail = htmlspecialchars($_POST['mail']);
        $pass = password_hash($_POST['pass'], PASSWORD_BCRYPT);
        // verif mail username
        $query = $connect->prepare("SELECT * FROM playstation WHERE username = ? OR mail = ?");
        $query->execute([$username, $mail]);
        $response = $query->fetch();
        if($response === false) {
            //username et mail n'existe pas insertion dans la BDD
            $query = $connect->prepare("INSERT INTO playstation(username, mail, pass) VALUES (?, ?, ?)");
            $query->execute([$username, $mail, $pass]);
            $_SESSION['error'] = "<p class='text-success'> SIGN UP successful. please LOG IN.</p>";
            header('location: ../createAcc.php');
            exit();
        } else {
            $_SESSION['error'] = "<p class='text-danger'> your mail or username already exists.</p>";
            header('Location: ../createAcc.php');
            exit();
        }
    }else {
        //error mdp diff
        $_SESSION['error'] = "<p class='text-danger'>Your passwords don't match";
        header('Location: ../createAcc.php');
        exit();
    }
} else {
    //error empty fields
    $_SESSION['error'] = "<p class='text-danger'>One of your fields is empty.</p>";
    header('Location: ../createAcc.php');
    exit();
}