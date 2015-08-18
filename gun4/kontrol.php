<?php

include_once("veriler.php");// dahil et. varsa 1 kere dahıl et. yüklenmese bile çalısmalı.
require_once("veriler.php");//gereklilik. olmayan dosya verıldıgınde hiç biri çalısmaz.
//

echo "senin adın ". $_POST["ad"]."<br/>";
echo "senin soyadın ". $_POST["soyad"]."<br/>";
echo "senin dogum tarıhın ". $_POST["dogumtarih"]."<br/>";
echo "senin cinsiyetin ". $_POST["cinsiyet"]."<br/>";
echo "senin üniversiten  ".$uniler[$_POST["okul"]]."<br/>";

echo"senin hobilerin : <br/>";

foreach($_POST["hobi"]  as $hobi)
{
    echo $hobiler[$hobi]. "<br/>";//hobilerin içindeki hobilerdeki dizileri getir dedik.
}
?>