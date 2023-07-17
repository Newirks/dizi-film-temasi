<!DOCTYPE html>
<html lang="en">
  <head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="Content-Language" content="TR"/>	
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DiziBoard - AdminPanel - Dizi Düzenle</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="stil.css" rel="stylesheet">
  </head>
  <body>
<?php
@$baglan = mysql_select_db("diziboard", mysql_connect("localhost","root",""));
echo "<h3>Haber Düzenleme Paneli</h3>";

$bul = mysql_query("select * from haberler ORDER BY id DESC");
while($goster = mysql_fetch_array($bul)){
echo "

<div class='row diziduzenlelist'>
<div class='col-md-3'>

<img class='haberminiresim' src='{$goster["haber_img"]}'/>

  </div>
<div class='col-md-5'>

<table>
<tr>
<td><b>Haber Adı :</b></td>
<td> {$goster["haber_adi"]}</td>
</tr>
<tr>
<td><b>Kaynak :</b></td>
<td> {$goster["kaynak"]}</td>
</tr>
<tr>
<td><b>Kategori :</b></td>
<td> {$goster["haber_kat"]}</td>
</tr>
</table>

  </div>
  
  
  <div class='col-md-4'>
  <a href='haberduzenle.php?id={$goster["id"]}' class='btn btn-info btn-sm haberbuton'>Haber Düzenle</a>
  <a href='habersil.php?id={$goster["id"]}' class='btn btn-danger btn-sm haberbuton'>Haber Sil</a>
  </div>
  </div>
  ";

}
?>
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>