<?php
/*
 * eşit değildi: !=
 * eşittir. ==
 * ve =
 *
 * if ( koşullar ) {
    koşullar doğru ise yapılacak işlem
}
elseif (diğer koşullar) {
    diğer koşullar doğru ise yapılacak işler
}
else {diğer her durumda yapılacak işlere ilişkin komutlar }
 */



$sayi1=20;
$sayi2=15;
$sayi3=10;
//echo $sayi1>$sayi2 ? 'büyük olan sayi:2':'büyük olan sayı 3'; //if'in kısa gözterimi ama else if de kullanılmaz.
echo "<br/>";

//1.yol
//if'in kısa kullanımı = kosul ? kosul gerceklesıyorsa : 'kosul saglamıyorsa';
$buyuk=$sayi1;
$sayi2>$buyuk ? $buyuk=$sayi2 : $buyuk=$buyuk;
$sayi3>$buyuk ? $buyuk=$sayi3 : $buyuk=$buyuk;
echo "en buyuk sayı :".$buyuk;
echo "<br/>";

//2.yol
echo "en büyük sayı:". max($sayi1,$sayi2,$sayi3);// max degerını kullanarak en buyuk degerı bulmaya calıstık.
echo "<br/>";


define("arzu", "asd");// Sabitler de değişkenler gibi değer depolamaya yararlar. adı arzu olup icinde asd olanları bulma
//define("arzu", "asddgd");//yanlış kullanımı 2.kez tanımlamaz
echo arzu; //sabit olusturdugumuz için dolar işareti yapmadık.konmaz.
echo "<br/>";

$birincisifre="123456";
$ikincisifre="123456";
if($birincisifre == $ikincisifre)//karşılastırma yaptık.
{
    echo "<b style='color:green;'>sifre dogru</b>";
}
else
{
    echo"sifre yanlıs";
}
echo "<br/>";

    $a=5;
/*
switch ( değişken ) {
case KOŞUL-1 ;
Koşul-1 doğru ise yapılacak işlem
break;switch'in sona ermesini sağlar
case KOŞUL-2 ;
Koşul-2 doğru ise yapılacak işlem
break;
case KOŞUL-3 ;
Koşul-3 doğru ise yapılacak işlem
break;
case KOŞUL-4 ;
Koşul-4 doğru ise yapılacak işlem
default:
diğer her durumda yapılacak işlem */
    switch($a)
    {
        case 5:
        echo "sayi5tir.";
        break;

    case 6:
        echo "sayı 6dır";
        break;

    default:
        echo "hiç biri değil";
        break;
    }

?>

