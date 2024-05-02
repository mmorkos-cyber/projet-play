<nav>
      <ul class="sidebar">
        <li id="close-sidebar"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg></a></li>
        <li><a href="./index.php"><img src="" alt="navbar-logo"></a></li>
        <li><a href="./forum.php">Forum</a></li>
        <li><a href="./guides.php">Guides</a></li>
        <li><a href="./leaderboard.php">Leaderboard</a></li>
        <li><a href="./games.php">Games</a></li>
        <li><a href="./trophies.php">Trophies</a></li>
        <li><a href="./sessions.php">sessions</a></li>
        <li>
          <div>
          <a href="./createAcc.php">Log In</a>
          <a href="./createAcc.php">Create Account</a>
          </div>
        </li>    
      </ul>
    <ul>
        <li><a href="../index.php"><img src="" alt="navbar-logo"></a></li>
        <li class="hideOnMobile"><a href="./forum.php">Forum</a></li>
        <li class="hideOnMobile"><a href="./guides.php">Guides</a></li>
        <li class="hideOnMobile"><a href="./leaderboard.php">Leaderboard</a></li>
        <li class="hideOnMobile"><a href="./games.php">Games</a></li>
        <li class="hideOnMobile"><a href="./trophies.php">Trophies</a></li>
        <li class="hideOnMobile"><a href="./sessions.php">sessions</a></li>
        <li class="hideOnMobile">
        <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalToggleLabel">Log IN</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

            <form action="./scripts/connexion.php" method="POST">
              <h2>Log IN</h2>

              <div>
              <label for="mail2">Mail</label>
              <input type="email" class="input" name="mail2" id="mail2">
          </div>

          <div>
              <label for="pass2">Password</label>
              <input type="password" class="input" name="pass2" id="pass2">
          </div>

          <button class="btn-btn" type="submit">Log IN</button>
          </form>

          </div>

          <div class="modal-footer">
            <button class="btn btn-couleur" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Sign UP</button>
          </div>

        </div>
      </div>
    </div>


    <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalToggleLabel2">Sign UP</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <div class="modal-body">

            <form action="./scripts/inscription.php" method="POST">
              <h2>Sign UP</h2>

              <div>
                  <label for="username">Username</label>
                  <input type="text" class="input" name="username" id="username">
              </div>

              <div>
                  <label for="mail">Mail</label>
                  <input type="email" class="input" name="mail" id="mail">
              </div>

              <div>
                  <label for="pass">Password</label>
                  <input type="password" class="input" name="pass" id="pass">
              </div>

              <div>
                  <label for="pass2">Confirm your Password</label>
                  <input type="password" class="input" name="pass2" id="pass2">
              </div>

              <button class="btn-btn" type="submit">Sign UP</button>

              </form>

          </div>
          <div class="modal-footer">
            <button class="btn btn-couleur" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">Log IN</button>
          </div>
        </div>
      </div>
    </div>
    <a class="btn btn-couleur" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Sign UP and Log IN</a>
        </li>
        <li id="open-sidebar" class="menu-button"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg><a href="#"></a></li>
    </ul>
</nav>