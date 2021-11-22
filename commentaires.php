<?php 
    session_start();
   
    if ( isset($_POST['name']) && isset($_POST['email'])  && isset($_POST['subject'])  && isset($_POST['message'])) {
         $nom=$_POST['name'];
         $mail=$_POST['email'];
         $suj=$_POST['subject'];
         $mess=$_POST['message'];
    try{
        print($nom);
        $connect = new PDO ('mysql:host=localhost;dbname=chrysalidz;charset=utf8','root','');
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO `commentaire` (`Nom`,`Mail`,`Sujet`,`Messages`) VALUES (\"$nom\",\"$mail\",\"$suj\",\"$mess\")";
        $connect->exec($sql);

    }catch(PDOException $e){
        echo "Erreur : ".$e->getMessage();
        exit();
    }
 }
    
?>