<?php
include_once '../racine.php';
include_once RACINE.'/service/EtudiantService.php';
extract($_GET);
$es = new EtudiantService();
$es->delete($es->findByIdd($id));
header("location:../index.php");