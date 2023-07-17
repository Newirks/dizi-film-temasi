<!DOCTYPE html>
<html lang="en">
  <head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="Content-Language" content="TR"/>	
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DiziBoard - AdminPanel - Üyeler</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="stil.css" rel="stylesheet">
  </head>
  <body>
<?php
@$baglan = mysql_select_db("diziboard", mysql_connect("localhost","root",""));
echo "<h3>Üyeler</h3>";

$bul = mysql_query("select * from uyeler");
echo "
<table class='table table-condensed'>
			<tr>
			<td class='uyelist'>Üye id</td>
			<td class='uyelist'>Üye Adı</td>
			<td class='uyelist'>Üye Şifre</td>
			<td class='uyelist'>E-posta</td>
			<td class='uyelist'>Ülke</td>
			<td class='uyelist'>Şehir</td>
			<td class='uyelist'>Rütbe</td>
			<td class='uyelist'>İşlem</td>
			</tr>
			
";

	while($goster = mysql_fetch_array($bul)){

	

		
		echo "
		
			<tr>
			<td>{$goster["id"]}</td>
			<td>{$goster["k_adi"]}</td>
			<td>{$goster["sifre"]}</td>
			<td>{$goster["eposta"]}</td>
			<td>{$goster["ulke"]}</td>
			<td>{$goster["sehir"]}</td>
			<td>{$goster["rutbe"]}</td>
			<td>
			<a href='uyeduzenle.php?id={$goster["id"]}' class='btn btn-info btn-sm uyebuton'><span class='glyphicon glyphicon-wrench' aria-hidden='true'></span></a>
			<a href='uyesil.php?id={$goster["id"]}' class='btn btn-danger btn-sm uyebuton'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></a>
			</td>
			</tr>
		
			
		";
			
}
echo "</table>";
?>
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>