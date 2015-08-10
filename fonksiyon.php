<?php

/*
 * function fonksiyon_adi($parametre1, $parametre2, ...)$konmaz.
 * {
        fonksiyonun yapacağı iş ya da hesaplamalar
        return $deger;
    }
 *
 */

/*
$toplamcarpim= 0;
//array ile döndürme
function toplacarp($sayi1,$sayi2)//sayi1 ve 2 diye degişken olusturduk.
{
    $toplam = $sayi1 + $sayi2;//toplama işlemini yapıp
    $carpim = $sayi1 * $sayi2;
    $return =[$toplam , $carpim];
    return $return;

    //return  $toplam;//toplamı döndurup
}
    $toplamcarpim=toplacarp(4,5);
//echo topla(4,6);//4 sayi1'e kaydetti..sayi2 6'ya. ekrana yazdırma  sonuc içinde tutuluyo.
*/

function toplacarp($sayi1, $sayi2)//sayi1 ve 2 diye degişken olusturduk.
{
    $toplam = $sayi1 + $sayi2;
    $carpim = $sayi1 * $sayi2;
    $return = $toplam."-".$carpim;
    return $return;
}
$yenisonuc = explode("-",toplacarp(4,6));
print_r($yenisonuc);





?>