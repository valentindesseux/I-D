<?php
$fname= $_POST['prenom'];
$lname=$_POST['nom'];
$mdp=$_POST['mdp'];
 
//include 'connexion.php'

$conn=mysqli_connect("dwarves.iut-fbleau.fr","desseux","desseux","desseux");
  $query="INSERT INTO Utilisateur (Nom, Prenom, Mdp) VALUES ('$lname','$fname', '$mdp')";
if(mysqli_query($conn,$query)){
//  break;
  echo "<p>Compte cree avec succes !</p>";
}
  else
    echo "<p>Nom ou Prenom ou mot de passe deja utilises</p>";  
?>