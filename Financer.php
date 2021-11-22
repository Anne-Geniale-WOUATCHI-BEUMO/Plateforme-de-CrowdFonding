<?php 
        
session_start();
$projet = $_SESSION["projet"];
$cat = $_SESSION["cat"];
$client = $_SESSION["client"];
$date=$_SESSION["date"];
echo $projet;
echo $cat;
echo $date;
if (isset($_POST["status"]) && isset($_POST["ent"]) && isset($_POST["nom"])  && isset($_POST["pnom"])  && isset($_POST["montant"])  && isset($_POST["moyen"]) && isset($_POST["phoneNumber"])) {
      $status=$_POST["status"];
      $ent=$_POST["ent"];
      $nom=$_POST["nom"];
      $pnom=$_POST["pnom"];
      $montant=$_POST["montant"];
      $mode=$_POST["moyen"];
      $tel=$_POST["phoneNumber"];
      
      echo $ent;
 try{
     print($nom);
     $connect = new PDO ('mysql:host=localhost;dbname=chrysalidz;charset=utf8','root','');
     $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $sql = "INSERT INTO `financer` (`Status`,`NomEntreprise`,`NomParticulier`,`Prenom`,`Montant`,`Paiement`,`Tel`,`Date`,`NomProjet`,`Categorie`,`Datesoumission`) VALUES ('$status','$ent','$nom','$pnom','$montant','$mode','$tel',NOW(),'$projet','$cat','$date')";
     $connect->exec($sql);

 }catch(PDOException $e){
     echo "Erreur : ".$e->getMessage();
     exit();
 }
}


?>