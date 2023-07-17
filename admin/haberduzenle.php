<!DOCTYPE html>
<html lang="en">
  <head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="Content-Language" content="TR"/>	
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DiziBoard - AdminPanel - Haber Düzenle</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="stil.css" rel="stylesheet">
  </head>
  <body>
<?php
@$baglan = mysql_select_db("diziboard", mysql_connect("localhost","root",""));

$id = $_GET["id"];

	 



		if($_POST){
		
		$haber_adi = $_POST["haber_adi"];
		$haber_konusu = $_POST["haber_konusu"];
		$haber_etiket = $_POST["haber_etiket"];
		$kaynak = $_POST["kaynak"];
		$haber_url = $_POST["haber_url"];
		$haber_kat = $_POST["haber_kat"];

		
		if($_FILES["resim"]["size"] < 1024*1024){
			if($_FILES["resim"]["type"] == "image/jpeg" || "image/png"){
				$dosyaadi = $_FILES["resim"]["name"];
				$uret = array("cs","coronals");
				$uzanti = substr($dosyaadi,-4,4);
				$sayitut = rand(1,1000000);
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
		
		$guncelle = mysql_query("UPDATE haberler SET haber_adi='$haber_adi',haber_konusu='$haber_konusu',haber_etiket='$haber_etiket',kaynak='$kaynak',haber_url='$haber_url',haber_kat='$haber_kat',haber_img='$yeniad' WHERE id='$id'");
			 if($guncelle){
			 
			 header("location:index.php?admin=haberlist");
			}else {
			
				echo "Güncelleme Başarız..!".mysql_error();
			
			}	
		}else {
		$bul = mysql_query("SELECT * FROM haberler WHERE id='$id'");
		$goster = mysql_fetch_array($bul);
		extract($goster);
		
		echo '
		<div class="container temel">
		<div class="row haberduzenle">
			    <div class="col-md-6 panelust">
    <h4>DiziBoard Admin Paneli </h4>
    </div>
	    <div class="col-md-6 panelust">
    <h6 class="pull-right"><i>DiziBoard Script v1.0</i></h6>
    </div>
		<form action="" method="post" enctype="multipart/form-data">
		<div class="col-md-7">
		<h3>Haber Düzenleme Paneli</h3>
		
  <table class="dizieklegenel">
  <tr>
  <td class="diziekleyazi">Haber Adı:</td>
  <td><input type="text" class="diziekle" name="haber_adi" value="'.$haber_adi.'" /></td>
  </tr>
  <tr>
  <td class="diziekleyazi">Kategori:</td>
  <td><select class="diziekle" name="haber_kat" value="'.$haber_kat.'">
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
  <td class="diziekleyazi">Konu:</td>
  <td><textarea class="diziekle" rows="5" cols="30" name="haber_konusu" >'.$haber_konusu.'
</textarea></td>
  </tr>

	<tr>
	<td class="diziekleyazi">URL:</td>
	<td><input type="text" class="diziekle" name="haber_url" value="'.$haber_url.'"/></td>
	</tr>

	<tr>
	<td class="diziekleyazi">Kaynak:</td>
	<td><input type="text" class="diziekle" name="kaynak" value="'.$kaynak.'" /></td>
	</tr>

	<tr>
	<td class="diziekleyazi">Etiket:</td>
	<td><input type="text" class="diziekle" name="haber_etiket" value="'.$haber_etiket.'" /></td>
	</tr>	
 
 

    
  	<tr>
	<td class="diziekleyazi">Resim Yükle:</td>
	<td><input type="file" class="diziekle" name="resim" value="'.$haber_img.'" /></td>
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
	<a href="index.php?admin=haberlist" class="pull-right btn btn-danger "><span class="glyphicon glyphicon-minus-sign" aria-hidden="true"></span></a>
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