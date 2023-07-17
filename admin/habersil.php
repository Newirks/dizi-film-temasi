<?php 
@$baglan = mysql_select_db("diziboard", mysql_connect("localhost","root",""));
$id = @$_GET["id"];

$sil = mysql_query("DELETE FROM haberler WHERE id='$id'");
if($sil) {
	header("location:index.php?admin=haberlist");
}else {
echo "Veri Silinemedi".mysql_error();
}

?>