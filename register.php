<!DOCTYPE html>
<html lang="en">
  <head>

    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DiziBoard - Üye Ol</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="stil.css" rel="stylesheet">
  </head>
  <body>
<?php

	require("data/baglan.php");

	if($_POST){
		
		$k_adi = $_POST["k_adi"];
		$sifre = $_POST["sifre"];
		$eposta = $_POST["eposta"];
		$ulke = $_POST["ulke"];
		$sehir =  $_POST["sehir"];
		
		if(!empty($k_adi) && !empty($sifre) && !empty($eposta) && !empty($ulke) && !empty($sehir)){
				
				$ekle = mysql_query("insert into uyeler (k_adi,sifre,eposta,ulke,sehir,rutbe) values ('$k_adi','$sifre','$eposta','$ulke','$sehir',0)");
				
			}else {
				header("refresh:1;url=register.php");
				}
		
	}else {
		
		echo "<form action='' method='post'>
  <table>
  <tr>
  <td>Kullanıcı Adı:</td>
  <td><input type='text' name='k_adi' /></td>
  </tr>
  <tr>
  <td>Şifre:</td>
  <td><input type='text' name='sifre' /></td>
  </tr>
  <tr>
  <td>E-posta:</td>
  <td><input type='text' name='eposta' /></td>
  </tr>
  <tr>
  <td>Ülke:</td>
  <td><input type='text' name='ulke' /></td>
  </tr>
  <tr>
  <td>Şehir:</td>
  <td><input type='text' name='sehir' /></td>
  </tr>
  <tr>
  <td></td>
  <td><input type='submit' value='Kayıt Ol' /></td>
  </tr>
  </table>
 </form> '";
		
		}


?>
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>