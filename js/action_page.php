
<?php
$conn=mysqli_connect('localhost','root','','highstore')or die(mysqli_error());
$NOM=$_POST['Nom'];
$EMAIL=$_POST['Email'];
$MESSAG=$_POST['Messag'];

$req="INSERT INTO CLIENTS(Nom,Email,Messag) values ()";
