<!DOCTYPE html>
<html lang="en">
  <head>

    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DiziBoard - Admin Panel</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="stil.css" rel="stylesheet">
  </head>
  <body>
<?php 
require("data/baglan.php");
session_start();

if($_POST){
		
		$k_adi = $_POST["k_adi"];
		$sifre = $_POST["sifre"];
		$bul = mysql_query("select * from uyeler where k_adi='$k_adi' && sifre='$sifre'");
		$say = mysql_num_rows($bul);
		if ($say > 0){
			
			$goster = mysql_fetch_array($bul);
			$_SESSION["diziboard"] = true;
			$_SESSION["k_adi"] = $k_adi;
			$_SESSION["sifre"] = $sifre;
			$_SESSION["rutbe"] = $goster["rutbe"];
			
		}
	
		if(@$_SESSION["rutbe"] == 1){
			header("location:admin/index.php");
		}else {
			header("location:hata.html");
		}
		
		
}else {

	if (isset($_SESSION["uye"])){
		echo 'Hoşgeldin '.$_SESSION["k_adi"].'<a href="admin/cikis.php">Çıkış Yap</a>';
		if ($_SESSION["rutbe"] ==1){
		echo "<a href='admin/index.php'>Panele Git</a>";
		
		}
	}
	
		echo
		"<div class='container'>
		<div class='row'>
		<div class='col-md-6 panelgenel'>
		<img class='panellogo' src='img/adminlogo.png'>
		<form action='' method='post'>
		<table class='panelgiris'>
		<tr>

		<td><input type='text' class='form-control panelbosluk' name='k_adi' placeholder='Kullanıcı Adı'></td>
		</tr>
		<tr>
	
		<td><input type='password' class='form-control panelbosluk' name='sifre' placeholder='Şifre'></td>
		</tr>
		<tr>

		<td><input type='submit' class='buton btn btn-warning' value='Giriş'></td>
		</tr>
		</table>
		</form>
		</div>
		</div>
		</div>";
		}
		
		

?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>