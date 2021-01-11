<!DOCTYPE html>
<html>
<head>
	<title>Giriş Sayfası</title>
	<style type="text/css">
		.buton{
			background-color:gray;
			
			border:0px solid ;
			border-radius:150px;
			height:30px;
			box-shadow: 3px 3px 4px #000;
		}
		.buton:hover{
			background-color:darkcyan;
			font-family: sans-serif;
			font-weight: bold;
			font-style: italic;
		}
		.textbox{
			border:2px solid;
			border-radius:4px;
			box-shadow: 3px 3px 3px #000;
		}
		fieldset{
			width:100px;
			margin-left: 35%;
			margin-top: 10%;
			bottom: 20%;
			padding:20px;
			border: 1px solid;
			border-radius: 10px;
			box-shadow: 3px 3px 4px #000;
		}
	</style>
</head>
<body>
<form method="post">
	<fieldset>
	
		<b>Ad</b>  <br><br><input class="textbox" type="text" name="ad"><br><br>

		<b>Şifre</b> <br><br> <input class="textbox" type="password" name="sifre"><br><br>

		<b>Güvenlik Kodu</b><br><br><label><del><?php $üret=substr(md5(microtime()),rand(0,26),6); echo $üret; ?></del></label><br><br>

		<b>Güvenlik Kodunu Giriniz</b> <input class="textbox" type="textbox" name="gkod"><br><br>

		<input class="buton" type="submit" name="giris" value="Giriş Yap">
	</form>

	<?php
	session_start(); 
	if (isset($_POST['giris'])) {
		$ad=$_POST['ad'];
		$sifre=$_POST['sifre'];
		$gkod=$_POST['gkod'];
		if ($ad=="gdyazilim" && $sifre=="1234" && $gkod==is_string($üret)) {
			$_SESSION['adi']=$ad;
			$_SESSION['sifre']=$sifre;
			header("Location:anasayfa.php");
		}
		else{
			echo "Girilen Bilgiler Hatalı";
		}
	}





	 ?>

<br><br>

</fieldset>
</body>
</html>