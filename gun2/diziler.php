<?php

$a="a";
echo ++$a; //stringde a dan sonrakı harfi aldı önüne yazılarak..
echo "<br/>";

$bilgiler =array(
    array("ad" => "arzu","soyad" => "tuyan","yas" => 21),
    array("ad"=>"ozgul","soyad" =>"colakoglu","yas"=>25),
    );
echo $bilgiler[0]["ad"];


$encode=json_encode($bilgiler);//kodlayıp eski haline çevırıyo.
print_r($bilgiler);
echo"<hr/>";
echo $encode;
echo"<hr/>";
print_r(json_decode($encode,true));//anlayacagımız hale cevırmesı ıcın true dedık.

$a="a";
echo +$a;



//print_r($bilgiler);
//var_dump($bilgiler);

echo "<pre>";
var_dump($bilgiler);//tipini uzunlugunu tum bılg. vericek.
echo "</pre>";
?>