<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
  integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
  crossorigin="anonymous" />
  <link rel="stylesheet" href="dist/app.css">
  <meta charset="utf-8">
  <title></title>
</head>
<body>

  <?php
  require_once 'database/database.php';
  ?>

  <div class="app-container">
    <div class="header">

    </div>
    <div class="left-blu-bar">

    </div>

    <div class="content-background">
      <div class="container">
        <div class="album-container">

          <?php

          foreach ($dataAlbums as  $value) {

            ?>

            <div class="album-box">
                 <div class="box-image">
                 </div>

                 <div class="title">
                  <h3> <?php echo $value['albumname']; ?></h3>
                 </div>

                 <div class="artist">
                  <h5> <?php echo $value['artistname']; ?></h5>
                 </div>

                 <div class="year">
                    <h5> <?php echo $value['year']; ?></h5> 
                 </div>
            </div>


          <?php  }?>
        </div>
      </div>
    </div>

    <div class="right-blu-bar">

    </div>

  </div>


</body>
</html>
