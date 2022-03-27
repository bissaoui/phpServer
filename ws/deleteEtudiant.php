<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
 include_once("../racine.php");
 include_once RACINE.'/service/EtudiantService.php';
 create();
}
function create(){
 extract($_POST);
 $es = new EtudiantService();
 //insertion d’un étudiant
  
  $es->delete($es->findByIdd($id));
 //chargement de la liste des étudiants sous format json
 header('Content-type: application/json');
 echo json_encode($es->findAllApi());
}