<?php
$conn=mysqli_connect('localhost','root','','highstore') or die(mysqli_error());
$EML=$_POST['Email'];
$req="insert into NEWSLETTER(Email) values ('$EML')";
$res=mysqli_query($conn,$req);
?>
<!DOCTYPE html>
<html>
<head>
	<title>newsletter</title>
	<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
	    <div class="collectipn_section_3 layuot_padding">
    	<div class="container">
    		<div class="racing_shoes">
    			<div class="row">
    			<div class="sale_text"><strong>VOTRE MAIL A ETAIT <br><span style="color: #0a0506;">ENREGISTER !</span> <br>VOUS SERREZ INFORMER DE TOUTE <br>NOUVEAUTE</strong><br> MERCI !</div>
    			</div>
    		</div>
    	</div>
    </div>
		</body>
		</html>