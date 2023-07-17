<!DOCTYPE html>
<html lang="en">
  <head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="Content-Language" content="TR"/>	
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DiziBoard - AdminPanel - Üye Düzenle</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="stil.css" rel="stylesheet">
  </head>
  <body>
<?php
@$baglan = mysql_select_db("diziboard", mysql_connect("localhost","root",""));

$id = $_GET["id"];

		if($_POST){
		
		$k_adi = $_POST["k_adi"];
		$sifre = $_POST["sifre"];
		$eposta = $_POST["eposta"];
		$ulke =  $_POST["ulke"];
		$sehir =  $_POST["sehir"];
		$rutbe =  $_POST["rutbe"];

		
		
		
		$guncelle = mysql_query("UPDATE uyeler SET k_adi='$k_adi',sifre='$sifre',eposta='$eposta',ulke='$ulke',sehir='$sehir',rutbe='$rutbe' WHERE id='$id'");
			 if($guncelle){
			 
			 header("location:index.php?admin=uyelistesi");
			}else {
			
				echo "Güncelleme Başarız..!".mysql_error();
			
			}	
		}else {
		$bul = mysql_query("SELECT * FROM uyeler WHERE id='$id'");
		$goster = mysql_fetch_array($bul);
		extract($goster);
		
		echo '
		<div class="container temel">
		<div class="row diziduzenle">
		    <div class="col-md-6 panelust">
    <h4>DiziBoard Admin Paneli </h4>
    </div>
	    <div class="col-md-6 panelust">
    <h6 class="pull-right"><i>DiziBoard Script v1.0</i></h6>
    </div>
		<div class="col-md-7">
		<h3>Üye Düzenleme Paneli</h3>
		<form action="" method="post" enctype="multipart/form-data">
  <table class="dizieklegenel">
  <tr>
  <td class="diziekleyazi">Üye Adı :</td>
  <td><input type="text" class="diziekle" name="k_adi" value="'.$k_adi.'"/></td>
  </tr>
  

	<tr>
	<td class="diziekleyazi">Şifre :</td>
	<td><input type="text" class="diziekle" name="sifre" value="'.$sifre.'"/></td>
	</tr>

		<tr>
	<td class="diziekleyazi">E-posta :</td>
	<td><input type="text" class="diziekle" name="eposta" value="'.$eposta.'"/></td>
	</tr>


	<tr>
	<td class="diziekleyazi">Ülke :</td>
	<td><input type="text" class="diziekle" name="ulke" value="'.$ulke.'"/></td>
	</tr>

	<tr>
	<td class="diziekleyazi">Şehir :</td>
	<td><input type="text" class="diziekle" name="sehir" value="'.$sehir.'"/></td>
	</tr>

	<tr>
	<td class="diziekleyazi">Rütbe :</td>
	<td><input type="text" class="diziekle" name="rutbe" value="'.$rutbe.'" /></td>
	</tr>	
 
 
 
  
  </table>
  </div>
  <div class="col-md-5">

	<table>

	<tr>
	<td></td>
	</tr>
	</table>
	</div>
	</div>
	
	<div class="row duzenlebuton">
	<input class="btn btn-primary panelbuton" type="submit" value="Düzenle" />
	<a href="index.php?admin=uyelistesi" class="pull-right btn btn-danger "><span class="glyphicon glyphicon-minus-sign" aria-hidden="true"></span></a>
	 </form>
	</div>
</div>

		
		';
		
		}
		
		



?>
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>