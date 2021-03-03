<?php 
$request = $_GET['genere'];


function filteredByGenre($dataAlbums, $request){
  $dataFiltered = [];

  foreach ($dataAlbums as $value) {

    if ($value['genre'] === $request) {
      $dataFiltered[] = $value;
    }
    else {
      $dataFiltered[] = $dataAlbums;
    }

  }
  return $dataFiltered;

}
