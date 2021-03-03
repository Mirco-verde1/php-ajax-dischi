

<?php
require_once '../database/database.php';
require_once '../database/function.php';

header('Content-Type: application/json');



filteredByGenre($dataAlbums,$request);
echo json_encode($dataAlbums);



?>
