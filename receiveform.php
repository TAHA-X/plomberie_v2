<?php
session_start();
require('dbconnect.php');
// reception des donnees du formulaire de contact
$nom = $_POST['nom'];
$ville = $_POST['ville'];
$email = $_POST['email'];
$typelocal = $_POST['typelocal'];
$typeservice = $_POST['typeservice'];
$sujet = $_POST['sujet'];
$autre = $_POST['autre'];
$message = $_POST['message'];

echo "Votre nom est:".$nom."<br>
      Votre ville est:".$ville."<br>
      Votre email est:".$email".<br>
      Votre type de local est:".$typelocal".<br>
      Votre type de service est:".$typeservice."<br>
      Votre sujet est:".$sujet."<br> 
      Voullez vous aujouter autre chose :".$autre."<br>
      Votre message est:".$message;


$insert=$db->prepare("INSERT INTO contact(nom, ville, email, typelocal, typeservice, sujet, autre, message) VALUES(?,?,?,?,?,?,?,?)");   
$insert->execute(array($nom,$ville,$email,$typelocal,$typeservice,$sujet,$autre,$message));

header('Location:contact.php');
     
?>