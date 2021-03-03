

<?php
require_once '../database/database.php';


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

      if (array_key_exists('genere', $_GET) && !empty($request)) {
        echo $dataFiltered;
      }
      header('Content-Type: application/json');
      ?>
