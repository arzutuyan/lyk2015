<meta charset="utf-8" />
<?php
$argv="arzu"; //dizi tanımlamasını yaptık.
echo $argv[0];
print_r($argv);//dizinin tamamını yazdık
echo"<br/>";

$argv="dünya";
echo "merhaba" ."<br/>" . $argv[0]  ; //ekrana d yazdırdık.

echo "merhaba <br/>  $argv[0]"  ; //"" işareti ile de birleştirme işlemi yaptık
echo"<br/>";

$a= (string) 22; //içinde de stringe dönüştürme işlemi yaptık.
//settype($a, "string");//tipini değiştirdik.int-string yaptı.
echo gettype($a); // ekrana bastık. gettype hangi degişken türü oldugunu gösterdi.
echo"<br/>";

$sayi1=5;
$sayi2=7;
echo ceil($sayi1 / $sayi2); //önce içteki işlem yapılır. yukarı yuvarlama yapar.
echo"<br/>";
echo floor($sayi1 / $sayi2); //aşagi yuvarlama yapar.
echo"<br/>";
echo ++$sayi1;// 1 arttir a ya ata
echo"<br/>";

// echo $$sayi2; // sayi 2 ye bakıyo oondan once tanınlanmıs deger varsa onun degerını yazdırıyo.
$Bar = "a";
$Foo = "Bar";
$World = "Foo";
$Hello = "World";
$a = "Hello";

echo $a; //Returns Hello
echo$$a; //Returns World
echo$$$a; //Returns Foo
echo$$$$a; //Returns Bar
echo$$$$$a; //Returns a



?>