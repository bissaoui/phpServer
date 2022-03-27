<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once '../racine.php';
    include_once RACINE . '/service/EtudiantService.php';
    loadAll();
}

function loadAll() {
    extract($_POST);
    $es = new EtudiantService();
    header('Content-type: application/json');
    echo json_encode($es->findById($id));
}
