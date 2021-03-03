

<?php
require_once '../database/database.php';
header('Content-Type: application/json');




      $request = $_GET['genere'];
      $dataFiltered = [];


      function filteredByGenre(){

        foreach ($dataAlbums as $value) {
          if ($value['genre'] === $request) {
            $dataFiltered = json_encode($value['genre']);
          }
        }
        return $dataFiltered;
      }

      if (!empty($request)) {
        echo $dataFiltered;
      }
      ?>
