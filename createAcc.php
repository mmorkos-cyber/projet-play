<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <?php require('./include/head.php') ?>
    <link rel="stylesheet" href="./styles/createAcc.css">
</head>
<body>
<?php require('./include/header.php') ?>
<?php
    if(!empty($_SESSION['error'])){
        echo $_SESSION['error'];
        $_SESSION['error'] = '';
    }
    if(empty($_SESSION['id'])){
?>
<div class="center">
<main>
    <div class="f1">
        <div id="sign-up" class="sign-up">
            <form action="./scripts/inscription.php" method="POST">
            <h2>Sign UP</h2>
            <div>
                <label for="username">Username</label>
                <input type="text" name="username" id="username">
            </div>
            <div>
                <label for="mail">Mail</label>
                <input type="email" name="mail" id="mail">
            </div>
            <div>
                <label for="pass">Password</label>
                <input type="password" name="pass" id="pass">
            </div>
            <div>
                <label for="pass2">Confirm your Password</label>
                <input type="password" name="pass2" id="pass2">
            </div>
            <button type="submit">Sign UP</button>
            </form>
        </div>
        <div id="log-in" class="log-in">
            <form action="./scripts/connexion.php" method="POST">
                <h2>Log IN</h2>
                <div>
                <label for="mail2">Mail</label>
                <input type="email" name="mail2" id="mail2">
            </div>
            <div>
                <label for="pass2">Password</label>
                <input type="password" name="pass2" id="pass2">
            </div>
            <button type="submit">Log IN</button>
            </form>
        </div>
    </div>
    </main>
</div>
    <?php
    }
    ?>
    <?php require('./include/footer.php'); ?>

</body>
</html>