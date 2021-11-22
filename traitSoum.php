<?php 
        
session_start();

if (isset($_POST["nom"]) && isset($_POST["pnom"]) && isset($_POST["ent"])  && isset($_POST["nomp"])  && isset($_POST["status"])  && isset($_POST["mail"]) && isset($_POST["motpasse"])   && isset($_POST["dest"])  && isset($_POST["cat"])) {
      $nom=$_POST["nom"];
      $pnom=$_POST["pnom"];
      $nomp=$_POST["nomp"];
      $mail=$_POST["mail"];
      $status=$_POST["status"];
      $cat=$_POST["cat"];
      $mdp=$_POST["motpasse"];
      $dest=$_POST["dest"];
      $ent =$_POST["ent"];
      echo $ent;
 try{
     print($nom);
     $connect = new PDO ('mysql:host=localhost;dbname=chrysalidz;charset=utf8','root','');
     $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $sql = "INSERT INTO `projets` (`Nom`,`Prenom`,`Email`,`Mdp`,`Status`,`NomProjet`,`Categorie`,`NomEntreprise`,`Description`,`Date`) VALUES (\"$nom\",\"$pnom\",\"$mail\",\"$mdp\",\"$status\",\"$nomp\",\"$cat\",\"$ent\",\"$dest\",NOW())";
     $connect->exec($sql);

 }catch(PDOException $e){
     echo "Erreur : ".$e->getMessage();
     exit();
 }
}


?>