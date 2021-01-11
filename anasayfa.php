<?php 
session_start(); 
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Anasayfa</title>
	<style type="text/css">
		.buton{
			background-color:lightgray;
			width: 100px;
			border:0px solid ;
			border-radius:150px;
			height:30px;
			box-shadow: 3px 3px 4px #000;
		}
		.buton:hover{
			background-color:red;
			font-family: sans-serif;
			font-weight: bold;
			font-style: italic;
			color:white;
		}
	</style>
</head>
<body>
<?php

if (isset($_SESSION['adi'])) {
echo "Hoşgeldin"." ".$_SESSION['adi']."<br>";
echo "Şifreniz : ". $_SESSION['sifre'];
}
	else{
		header("Location:index.php");
	}
 ?>


<form method="post"><br>
	<input class="buton" type="submit" value="Çıkış" name="cikis">
<?php 
if (isset($_POST['cikis'])) {
	session_destroy();
	header("Location:index.php");
}


 ?>
</form>

</body>
</html>