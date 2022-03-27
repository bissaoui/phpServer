<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
 include_once("../racine.php");
 include_once RACINE.'/service/EtudiantService.php';
 update();
}
function update(){
    
    
 extract($_POST);
 $es = new EtudiantService();
 //insertion d’un étudiant
 $filename="IMG".rand().".jpg";
 file_put_contents("../images/".$filename, base64_decode($image));
  $es->update(new Etudiant($id , $nom, $prenom, $ville, $sexe, $filename));
 //chargement de la liste des étudiants sous format json
 header('Content-type: application/json');
 echo json_encode($es->findAllApi());
 
 
}
