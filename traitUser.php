<?php 
    session_start();
    $id=$_SESSION["id"];
    
    if ( isset($_POST['nom']) && isset($_POST['pnom'])  && isset($_POST['sexe'])  && isset($_POST['mail']) && isset($_POST['motpasse'])   && isset($_POST['birthdate'])  && isset($_POST['phoneNumber'])) {
         $nom=$_POST['nom'];
         $pnom=$_POST['pnom'];
         $mail=$_POST['mail'];
         $nt=$_POST['phoneNumber'];
         $dn=$_POST['birthdate'];
         $mdp=$_POST['motpasse'];
         $sexe=$_POST['sexe'];
         echo $_POST['nom'];
    try{
        print($nom);
        $connect = new PDO ('mysql:host=localhost;dbname=chrysalidz;charset=utf8','root','');
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO `compte` (`Nom`,`Prenom`,`Email`,`Mdp`,`DateNaissance`,`NumTel`,`Sexe`) VALUES (\"$nom\",\"$pnom\",\"$mail\",\"$mdp\",\"$dn\",\"$nt\",\"$sexe\"); DELETE FROM `compte` WHERE Id='$id' ";
        $connect->exec($sql);

    }catch(PDOException $e){
        echo "Erreur : ".$e->getMessage();
        exit();
    }
 }
    
?>