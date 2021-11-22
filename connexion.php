<?php
session_start();
$n="";
$p="";
$mp="";
$m="";
if (isset($_POST["nom"]) && isset($_POST["pnom"]) && isset($_POST["mail"]) && isset($_POST["motpasse"])){
 
  $n = $_POST["nom"];
  $p = $_POST["pnom"];
  $m = $_POST["mail"];
  $mp = $_POST["motpasse"];
  

  try{
    $connect = new PDO ('mysql:host=localhost;dbname=chrysalidz;charset=utf8','root','');
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql=$connect->prepare("SELECT Nom, Prenom, Email,Mdp,Id FROM compte WHERE Nom='$n' AND Prenom='$p' AND Email='$m' AND Mdp='$mp'" );
    $sql->execute();
    $result = $sql->fetchAll();
    
    if($result){
      $_SESSION["nom"]=$_POST["nom"];
      $_SESSION["pnom"]=$_POST["pnom"];
      $_SESSION["mail"]=$_POST["mail"];
      $_SESSION["mdp"]=$_POST["motpasse"];
      foreach($result as $elt) {
        $_SESSION["id"]=$elt["Id"];
      }
      echo "success";
    }else{
       exit();
    }
    /*
    foreach($result as $elt){
           if($n==$elt['Nom'] and $p==$elt['Prenom'] and $m==$elt['Email'] and $mp==$elt['Mdp']){
           
            echo "success";
           }else{
             echo "failed";  
           }
        }*/
  }catch(PDOException $e){
    echo "Erreur : ".$e->getMessage();
    exit();
  }
}

       
  ?>
  

