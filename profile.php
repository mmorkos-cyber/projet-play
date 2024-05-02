<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Games</title>
   <?php require('./include/head.php') ?>
</head>
<body class="">
<?php require('./include/header.php') ?>

    <main>
        <form action="./scripts/modifMail.php" method="post">
            <label for="mail">new mail</label>
            <input type="email" name="mail" id="mail">
            <button type="submit">Modify Mail</button>
        </form>
        <form action="./scripts/modifPseudo.php" method="post">
            <label for="username">new username</label>
            <input type="text" name="username" id="username">
            <button type="submit">Modify username</button>
        </form>
        <form action="./scripts/modifMDP.php" method="post">
                <label for="oldpass">Current Password</label>
                <input type="password" name="oldpass" id="oldpass">
                <label for="newpass">New password</label>
                <input type="password" name="newpass" id="newpass">
                <label for="newpass2">Confirmation</label>
                <input type="password" name="newpass2" id="newpass2">
                <button type="submit">Modify Password</button>
        </form>
        <a href="./scripts/supprCompte.php">Delete my account</a>
        <a href="./scripts/deconnexion.php">Sign Out</a>
    </main>


<?php require('./include/footer.php'); ?>


</body>
</html>