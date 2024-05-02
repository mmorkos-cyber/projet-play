<?php
session_start();
require('../include/dbConnect.php');

// verification du remplissage des champs
if(!empty($_POST['oldpass']) && !empty($_POST['newpass']) && !empty($_POST['newpass2'])) {
    // verification de la correspondace des nouveaux mots de passe
    if($_POST['newpass'] === $_POST['newpass2']) {
        // récupération de l'utilisatreur en BDD pour comparaison du mot de passe
        $query = $connect->prepare("SELECT * FROM playstation WHERE mail = ?");
        $query->execute([$_SESSION['mail']]);
        $user = $query->fetch();
        // verification ancien mot de passe
        $verif = password_verify($_POST['oldpass'], $user['pass']);
        if($verif === true) {
            // cryptage MDP
            $pass = password_hash($_POST['newpass'], PASSWORD_BCRYPT);
            // mise à jour MDP si toutes les verifs sont bonnes
            $query = $connect->prepare("UPDATE playstation SET pass = ? WHERE mail = ?");
            $query->execute([$pass, $_SESSION['mail']]);
            // message pour user + retour profil.php
            $_SESSION['error'] = "<p class='text-success'>Password Updated.</p>";
            header('Location: ../profile.php');
            exit();
        } else {
            // erreur MDP incorrect
            $_SESSION['error'] = "<p class='text-danger'>Your assword is false.</p>";
            header('Location: ../profile.php');
            exit();
        }
    } else {
        // erreur MDP non identiques
        $_SESSION['error'] = "<p class='text-danger'>Your passwords do not match.</p>";
        header('Location: ../profile.php');
        exit();
    }
} else {
    // erreur champ vide
    $_SESSION['error'] = "Field is empty.";
    header('Location: ../profile.php');
    exit();
}