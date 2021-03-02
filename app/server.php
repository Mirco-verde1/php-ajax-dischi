
  <?php
 header('Content-Type: application/json');
  require_once '../database/database.php';

  ?>

  <?php
  // controllo la struttura dei  miei dati;
print_r($dataAlbums);

// encode del mio database;
 json_encode($dataAlbums);

   ?>
