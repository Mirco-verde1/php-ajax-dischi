

<?php
require_once '../database/database.php';
header('Content-Type: application/json');


// in base alla richiesta torna il dato completo o filtrato in base al genere
$request = $_GET['genre'];

if (empty($request) || $request === 'all') {
  echo json_encode($dataAlbums);

} else {

  $filtered = [];

  foreach ($dataAlbums as $value) {
    if ($value['genre'] === $request) {

      $filtered[] = $value;
    }
  }

  if (!empty($filtered)) {
    
    echo json_encode($filtered);
  }
}

?>
