<!DOCTYPE html>
<html lang="en">
  <head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="Content-Language" content="TR"/>	
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DiziBoard - AdminPanel - Dizi Ekle</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="stil.css" rel="stylesheet">
  </head>
  <body>
<?php
@$baglan = mysql_select_db("diziboard", mysql_connect("localhost","root",""));

	if($_POST){
		
		$dizi_adi = $_POST["dizi_adi"];
		$dizi_aciklama = $_POST["dizi_aciklama"];
		$dizi_etiket = $_POST["dizi_etiket"];
		$dizi_dili =  $_POST["dizi_dili"];
		$sezon =  $_POST["sezon"];
		$dizi_bolum =  $_POST["dizi_bolum"];
		$yonetmen = $_POST["yonetmen"];
		$url = $_POST["url"];
		$vk_url = $_POST["vk_url"];
		$mail_url = $_POST["mail_url"];
		$dizi_kat = $_POST["dizi_kat"];

		if($_FILES["resim"]["size"] < 1024*1024){
			if($_FILES["resim"]["type"] == "image/jpeg" || "image/png"){
				$dosyaadi = $_FILES["resim"]["name"];
				$uret = array("ju","vu","ne","km","qa","te","yr","iz","op","sr","cf","km","dw","gt","ab");
				$uzanti = substr($dosyaadi,-4,4);
				$sayitut = rand(1,100000);
				$yeniad = "afisler/".$uret[rand(0,4)].$sayitut.$uzanti;
				if(move_uploaded_file($_FILES["resim"]["tmp_name"],$yeniad)){
					echo "Afiş Başarıyla Yüklendi :)";
				}else {
					echo "Afiş Yüklenemedi.!";
				}
			}
		}else {
			echo "Maksimum Boyutu Geçtiniz. Yüklediğiniz Resim 1mb'dan Büyük Olmaz.!";
		}
		
				
				$ekle = mysql_query("insert into diziler (dizi_adi,dizi_img,dizi_aciklama,dizi_etiket,dizi_dili,sezon,dizi_bolum,yonetmen,vk_url,mail_url,url,dizi_kat) values ('$dizi_adi','$yeniad','$dizi_aciklama','$dizi_etiket','$dizi_dili','$sezon','$dizi_bolum','$yonetmen','$vk_url','$mail_url','$url','$dizi_kat')");
				
			if($ekle) {
				echo "Dizi Başarıyla Eklendi";
				header("refresh:3;url=index.php?admin=dizilist");
			}else {
				echo "Ekleme Başarısız.! Tekrar Deneyin";
			}
		
	}else {
		
		echo '
		
		<div class="row">
		<div class="col-md-7">
		<h3>Dizi Ekleme Paneli</h3>
		<form action="" method="post" enctype="multipart/form-data">
  <table class="dizieklegenel">
  <tr>
  <td class="diziekleyazi">Dizi Adı:</td>
  <td><input type="text" class="diziekle" name="dizi_adi" /></td>
  </tr>
  <tr>
  <td class="diziekleyazi">Sezon:</td>
  <td><select class="diziekle" name="sezon">
  <option value="1">Sezon 1</option>
  <option value="2">Sezon 2</option>
  <option value="3">Sezon 3</option>
    <option value="4">Sezon 4</option>
  <option value="5">Sezon 5</option>
  <option value="6">Sezon 6</option>
    <option value="7">Sezon 7</option>
  <option value="8">Sezon 8</option>
  <option value="9">Sezon 9</option>
    <option value="10">Sezon 10</option>
  <option value="11">Sezon 11</option>
  <option value="12">Sezon 12</option>
    <option value="13">Sezon 13</option>
  <option value="14">Sezon 14</option>
  <option value="15">Sezon 15</option>
    <option value="16">Sezon 16</option>
  <option value="17">Sezon 17</option>
  <option value="18">Sezon 18</option>
</select>
</td>
  </tr>
      <tr>
  <td class="diziekleyazi">Bölüm:</td>
  <td>
  <select class="diziekle" name="dizi_bolum">
  <option value="bolum1">Bölüm 1</option>
  <option value=" bolum2">Bölüm 2</option>
  <option value=" bolum3">Bölüm 3</option>
    <option value=" bolum4">Bölüm 4</option>
  <option value=" bolum5">Bölüm 5</option>
  <option value=" bolum6">Bölüm 6</option>
    <option value=" bolum 7">Bölüm 7</option>
  <option value=" bolum 8">Bölüm 8</option>
  <option value=" bolum 9">Bölüm 9</option>
    <option value=" bolum 10">Bölüm 10</option>
  <option value=" bolum 11">Bölüm 11</option>
  <option value=" bolum 12">Bölüm 12</option>
    <option value=" bolum 13">Bölüm 13</option>
  <option value=" bolum 14">Bölüm 14</option>
  <option value=" bolum 15">Bölüm 15</option>
    <option value=" bolum 16">Bölüm 16</option>
  <option value=" bolum 17">Bölüm 17</option>
  <option value=" bolum 18">Bölüm 18</option>
<option value=" bolum 19">Bölüm 19</option>
<option value=" bolum 20">Bölüm 20</option>
<option value=" bolum 21">Bölüm 21</option>
<option value=" bolum 22">Bölüm 22</option>
<option value=" bolum 23">Bölüm 23</option>
<option value=" bolum 24">Bölüm 24</option>
<option value=" bolum 25">Bölüm 25</option>



  <tr>
  <td class="diziekleyazi">Kategori:</td>
  <td><select class="diziekle" name="dizi_kat">
  <option value="aile">Aile</option>
  <option value="aksiyon">Aksiyon</option>
   <option value="ask">Aşk</option>
  <option value="bilim">Bilim Kurgu</option>
    <option value="biyo">Biyografi</option>
  <option value="dram">Dram</option>
  <option value="fant">Fantastik</option>
    <option value="ger">Gerilim</option>
  <option value="giz">Gizem</option>
  <option value="komedi">Komedi</option>
    <option value="kork">Korku</option>
  <option value="mac">Macera</option>
  <option value="politik">Politik</option>
    <option value="polis">Polisiye</option>
  <option value="psiko">Psikolojik</option>
  <option value="rom">Romantik</option>
    <option value="sav">Savaş</option>
  <option value="suc">Suç</option>
  
</select>
</td>
  </tr>



</select>
  </td>
  </tr>
   <tr>
  <td class="diziekleyazi">Dil:</td>
  <td><select class="diziekle" name="dizi_dili">
  <option value="dublaj">Türkçe Dublaj</option>
  <option value="ing">İngilizce</option>
  <option value="altyazi">Tr Altyazı</option>
</select>
</td>

	<tr>
	<td class="diziekleyazi">Yönetmen:</td>
	<td><input type="text" class="diziekle" name="yonetmen" /></td>
	</tr>

  <tr>
  <td class="diziekleyazi">Özet:</td>
  <td><textarea class="diziekle" rows="5" cols="30" name="dizi_aciklama">
</textarea></td>
  </tr>

	<tr>
	<td class="diziekleyazi">Vk.com URL:</td>
	<td><input type="text" class="diziekle" name="vk_url" /></td>
	</tr>

	<tr>
	<td class="diziekleyazi">Mail.Ru URL:</td>
	<td><input type="text" class="diziekle" name="mail.url" /></td>
	</tr>

	<tr>
	<td class="diziekleyazi">URL:</td>
	<td><input type="text" class="diziekle" name="url" /></td>
	</tr>	
 
 
  <tr>
  <td class="diziekleyazi">Etiket:</td>
  <td><input type="text" class="diziekle" name="dizi_etiket" /></td>
  </tr>
    
  	<tr>
	<td class="diziekleyazi">Afiş Yükle:</td>
	<td><input type="file" class="diziekle" name="resim" /></td>
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
	
	<div class="row">
	<input class="pull-right btn btn-primary diziekle" type="submit" value="Ekle" />
	 </form>
	</div>



		
		';
		
		}



?>
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>