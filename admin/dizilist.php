<!DOCTYPE html>
<html lang="en">
  <head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="Content-Language" content="TR"/>	
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DiziBoard - AdminPanel - Dizi Listesi</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="stil.css" rel="stylesheet">
  </head>
  <body>
<?php
@$baglan = mysql_select_db("diziboard", mysql_connect("localhost","root",""));
echo "<h3>Dizi Düzenleme Paneli</h3>";

$bul = mysql_query("select * from diziler ORDER BY id DESC");
while($goster = mysql_fetch_array($bul)){
echo "

<div class='row diziduzenlelist'>
<div class='col-md-4'>
  <img class='diziminiafis' src='{$goster["dizi_img"]}'/>
  </div>
  
  <div class='col-md-4'>
	<table class='diziduzenlegenel'>
  <tr>
  <td class='diziduzenleyazi'>Dizi Adı:</td>
  <td>{$goster["dizi_adi"]}</td>
  </tr>

  <tr>
  <td class='diziduzenleyazi'>Dizi Dili:</td>
  <td>{$goster["dizi_dili"]}</td>
  </tr>

  <tr>
  <td class='diziduzenleyazi'>Kategori:</td>
  <td>{$goster["dizi_kat"]}</td>
  </tr>
   <tr>
  <td class='diziduzenleyazi'>Sezon:</td>
  <td>{$goster["sezon"]}</td>
  </tr>
 <tr>
  <td class='diziduzenleyazi'>Bölüm:</td>
  <td>{$goster["dizi_bolum"]}</td>
  </tr>
  </table>
  </div>
  <div class='col-md-4'>
  <a href='diziduzenle.php?id={$goster["id"]}' class='btn btn-info btn-sm panelbuton'>Diziyi Düzenle</a>
  <a href='dizisil.php?id={$goster["id"]}' class='btn btn-danger btn-sm panelbuton'>Diziyi Sil</a>
  </div>
  </div>
  ";

}
?>
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>