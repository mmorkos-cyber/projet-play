<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home</title>
   <?php require('./include/head.php') ?>
   <link rel="stylesheet" type="text/css" href="log.css">
</head>
<body>
  <?php require('./include/header.php') ?>
    <main>

      <div class="banner  d-flex justify-content-center">
        <div class="bg-primary" style="width: 75%; height: 100px;">
          <p>heellooo</p>
        </div>
      </div>
      
      <div class="columns bg-secondary container">
        <div class="row">
          <div class="col-4 bg-success border border-primary">
          <div>
              <h3>New Games</h3>
              <a href="games.php">more</a>
            </div>
            <div id="template-game">
              <img src="" alt="thumbnail">
              <div>
              <h4>title title</h4>
              <span>platform</span>
              </div>
              <div>
                <ul>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                </ul>
                <span>
                  <b>numb</b>Trophies 
                  <dagger>‡</dagger> 
                  <b>numb</b>
                  points
                </span>
              </div>
            </div>
          </div>
            

          <div class="col-4 bg-danger border border-primary">
            <div>
              <h3>New Guides</h3>
              <a href="guides.php">more</a>
            </div>
            <div class="template">
              <img src="" alt="thumbnail">
              <div>
                <h4>title</h4>
                <p>description</p>
              </div>

            </div>
          </div>

          <div class="col-4 bg-warning border border-primary">
            <div>
              <h3>New Forum Post</h3>
              <a href="forum.php">more</a>
            </div>
          </div>
        </div>

      </div>
    </main>


  <?php require('./include/footer.php'); ?>


</body>
</html>