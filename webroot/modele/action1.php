<?php
$fname= $_POST['prenom'];
$lname=$_POST['nom'];
$mdp=$_POST['mdp'];
//include 'connexion.php'

$conn=mysqli_connect("dwarves.iut-fbleau.fr","desseux","desseux","desseux");
  $res=mysqli_query($conn,"SELECT Nom, Prenom, Mdp FROM Utilisateur");
foreach($res as $value)
  
if($lname==$value['Nom']  AND $fname==$value['Prenom'] AND $mdp==$value['Mdp']){
  //echo "<p>reussi</p>";
  include 'message.php';
  break;
  
  
}
    if($lname!=$value['Nom']  OR $fname!=$value['Prenom'] OR $mdp!=$value['Mdp']){
 
    echo "<p>Mauvais Prenom ou Nom ou Mot de passe !</p>";
   
    
   }
  
?>