<meta charset="UTF-8">
<?php

//require_once "classes/KuruTemizleme.php";
//require_once "classes/EveKuruTemizleme.php";

//birşeyibulamazsa nereye bakıcagını  tanımlıyoruz.
//ihtiyaç duyup istediğimiz kodu çalıtırdık.
//eve kuru temizleme calısması ıcın kuru temızlemeyı cagırıyo.
//sonra miras aldıgımız degeri çalıstırıyor.

function __autoload ($className)
{
    echo $className." sınıfını bulamadı. ve __autoload çalıştı.<br>";
    require_once "classes/".$className.".php";
}
$kuruTemizlemeci = new EveKuruTemizleme();
// camasir için veri gönderiyoruz
$kuruTemizlemeci->setCamasir("Pantul");
// camasir yıkama işlemlerini çalıştırıyoruz
$kuruTemizlemeci->yika();
