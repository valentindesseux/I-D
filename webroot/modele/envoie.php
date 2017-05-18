<?php
$fname= $_POST['prenom'];
$mdp=$_POST['mdp'];
$msg=$_POST['msg'];

//echo "<p>$fname</p>";
$conn=mysqli_connect("dwarves.iut-fbleau.fr","desseux","desseux","desseux");
 
$res=mysqli_query($conn,"select Prenom,Msg from Message");
foreach($res as $message){
  echo "<dl>";
  echo "<dt>". $message['Prenom'] ."</dt>";
  echo "<dd>".$message['Msg']."</dd>";
    echo "</dl>";
}
echo "<dl>";
  echo "<dt>". $fname."</dt>";
  echo "<dd>".$msg."</dd>";
    echo "</dl>";


   $query="INSERT INTO Message (Prenom, Mdp, Msg) VALUES ('$fname', '$mdp', '$msg')";

if(mysqli_query($conn,$query)){
//  break;
   include 'message.php'; 
}
  else
    echo "<p>fail</p>";  
?>



