<?php
include 'albums.php';
/* var_dump($albums); */
header('Content-Type: applicaton/json');
echo json_encode($albums);

