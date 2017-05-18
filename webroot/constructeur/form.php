<!DOCTYPE html>
<html>
<body>

<form action="modele/action.php" method="POST"> 
                                     
 Prenom:<br>
  <input type="text" name="prenom" required>
  <br>
  Nom:<br>
  <input type="text" name="nom" required>
  <br>
  Mot de Passe:<br>
  <input type="password" name="mdp" required>
  <br><br>
  <input type="submit" value="Inscription">
</form> 
  <br><br>
  Deja inscrit:
  <form action="modele/action1.php" method="POST"> 
   <br><br>                                  
 Prenom:<br>
  <input type="text" name="prenom" required>
  <br>
  Nom:<br>
  <input type="text" name="nom" required>
    <br>
  Mot de Passe:<br>
  <input type="password" name="mdp" required>
  <br><br>
  <input type="submit" value="Connexion">
</form> 

</body>
</html>