<?php 
@$baglan = mysql_select_db("diziboard", mysql_connect("localhost","root",""));
$id = @$_GET["id"];

$sil = mysql_query("DELETE FROM uyeler WHERE id='$id'");
if($sil) {
	header("location:index.php?admin=uyelistesi");
}else {
echo "Veri Silinemedi".mysql_error();
}

?>