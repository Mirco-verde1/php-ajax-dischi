<?php

$request = $_GET['genere'];


function filteredByGenre($dataAlbums, $request){
  $dataFiltered = [];

  foreach ($dataAlbums as $value) {

    if (!empty($request) && array_key_exists('genere', $_GET)) {

      if ($value['genre'] === $request) {
      $dataFiltered[] = $value;
      }

    }
    else {
      $dataFiltered[] = $dataAlbums;
    }

  }
  return $dataFiltered;

}
