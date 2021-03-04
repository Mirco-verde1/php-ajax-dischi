<?php


function filteredByGenre($dataAlbums, $userRequest){
  $dataFiltered = [];

  foreach ($dataAlbums as $value) {

      if ($value['genre'] === $userRequest) {
      $dataFiltered[] = $value['genre'];
      }


    else {
      $dataFiltered[] = $dataAlbums;
    }

  }
  return $dataFiltered;

}
