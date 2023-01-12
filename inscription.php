<?php
$conn=mysqli_connect('localhost','root','','highstore') or die(mysqli_error());
$NOM=$_POST['Nom'];
$EML=$_POST['Email'];
$MSG=$_POST['Massage'];
$req="insert into CLIENTS(Nom,Email,Message) values ('$NOM','$EML','$MSG')";
$res=mysqli_query($conn,$req);
?>
<!DOCTYPE html>
<html>
<head>
	<title>page inscription</title>
	<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
	    <div class="collectipn_section_3 layuot_padding">
    	<div class="container">
    		<div class="racing_shoes">
    			<div class="row">
    			<div class="sale_text"><strong>VOTRE MESSAGE SERA<br><span style="color: #0a0506;">TRAITER</span> <br>DANS LE PLUS PROCHE<br>DELAI</strong></div>
    			</div>
    		</div>
    	</div>
    </div>
		</body>
		</html>