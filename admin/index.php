<?php @include("data/baglan.php"); ?>
<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DiziBoard - Admin Panel</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="stil.css" rel="stylesheet">
  </head>
  <body>
	<?php  

@$referer = $_SERVER['HTTP_REFERER'];  

if ($referer == "")  
{  
echo "Sayfaya Erişiminiz Yok";  
}else  
{ echo ' 
	<div class="container temel">
    <div class="row">
    <div class="col-md-6 panelust">
    <h4>DiziBoard Admin Paneli </h4>
    </div>
    <div class="col-md-6 panelust">
    <h6 class="pull-right"><i>DiziBoard Script v1.0</i></h6>
    </div>

    </div>
    <div class="row">
    <div class="col-md-2 panelsol">
    <a href="index.php?admin=diziekle" class="btn btn-primary btn-sm panelbuton">Dizi Ekle</a>
    <a href="index.php?admin=dizilist" class="btn btn-primary btn-sm panelbuton">Dizi Listesi</a>
    <a href="index.php?admin=haberekle" class="btn btn-primary btn-sm panelbuton">Haber Ekle</a>
    <a href="index.php?admin=haberlist" class="btn btn-primary btn-sm panelbuton">Haber Listesi</a>
    <a href="index.php?admin=uyelistesi" class="btn btn-primary btn-sm panelbuton">Üye Listesi</a>
	<a href="index.php?admin=katlist" class="btn btn-primary btn-sm panelbuton">Kategori Listesi</a>
    <a href="index.php?admin=etiket" class="btn btn-primary btn-sm panelbuton">Etikeler</a>
    <a href="index.php?admin=eklenti" class="btn btn-primary btn-sm panelbuton">Eklentier</a>
    <a href="index.php?admin=ayarlar" class="btn btn-danger btn-sm panelbuton">Genel Ayarlar</a>
    <a href="index.php?admin=rapor" class="btn btn-danger btn-sm panelbuton">Raporlar</a>
	<a href="cikis.php" class="btn btn-warning btn-sm panelbuton">Çıkış Yap</a>

    </div>
    <div class="col-md-9 panelsag">';
	}
	?>
    
    <?php 
		
		$admin = @$_GET["admin"];
		Switch($admin){
			
			case "diziekle";
			include("diziekle.php");
			break;

			case "dizilist";
			include("dizilist.php");
			break;

			case "haberekle";
			include("haberekle.php");
			break;

			case "haberlist";
			include("haberlist.php");
			break;

			case "habersil";
			include("habersil.php");
			break;

			case "uyelistesi";
			include("uyelistesi.php");
			break;

			case "uyeduzenle";
			include("uyeduzenle.php");
			break;

			case "menu";
			include("menu.php");
			break;

			case "etiket";
			include("etiketler.php");
			break;

			case "eklenti";
			include("eklentiler.php");
			break;

			case "ayarlar";
			include("genelayarlar.php");
			break;

			case "rapor";
			include("raporlar.php");
			break;
			
			}
	
    ?>
    
    </div>
    </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>