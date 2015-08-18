<?php

function kisilistesibas($kisiler,$listfunc = NULL)//tek bir fonksiyonda çagırma yaptık.
{
    $izinverilenfonksiyonlar = array('asort', 'arsort', 'ksort', 'krsort');

    if (!is_null($listfunc) and in_array($listfunc,$izinverilenfonksiyonlar))// nerde aradıgını ve ne aradıgını yazdık. ın_array'e
    {
        $listfunc($kisiler);
    }

    foreach($kisiler as $kisi => $sira)
    {
        echo " "."$kisi - $sira"."<br/>";
    }
}


/*
$students= array(

    "arzu tuyan",
    "aysenur karaaslan",
    "aziz günal",
    "büsra günal",
    "büsra uman",

    3 eleman verdik
    'first_name':'arzu',
    last_name"tuyan"
    full name
    dizi kendıı içinde birleştirip direk ismi vermez mi.

    */
    /*
    array(
        'name' => "arzu",
        'surname' => "tuyan",
        'age' => 21
    ),
    array(
        'name' => "aysenur",
        'surname' => "karaaslan",
        'age' => 21
    ),

    array(
        'name' => "aziz",
        'surname' => "günal",
        'age' => 24
    ),

    array(
        'name' => "busra",
        'surname' => "gunay",
        'age' => 23
    ),

    array(
        'name' => "büsra",
        'surname' => "uman",
        'age' => 24
    ),
);
foreach($students as $student)
{
    if($student['age']>21)
    {
        echo $student['name']." ".$student['surname']."- ".$student['age']."<br/>";
    }
}

*/
$kisiler = [

    "ahmet" => 21,
    "mehmet" => 35,
    "ali" => 16,
    "veli" => 18,
    "zeki" => 17

];
/*
echo "<pre>";
//diziyi normal olarak gösterir.
echo "ham hali ";
print_r($kisiler);


echo "yaş küçükten büyüğe ";
asort($kisiler);
print_r($kisiler);


echo "yaş büyükten küçüğe ";
arsort($kisiler);
print_r($kisiler);


echo "isim z den a ya ";
krsort($kisiler);
print_r($kisiler);

echo "isim a dan z ye ";
ksort($kisiler);
print_r($kisiler);


*/
echo "<pre>";
echo "ham hali";
kisilistesibas($kisiler,'print_r');
echo "<hr/>";


//asort($kisiler);
kisilistesibas($kisiler,'asort');
// değer. sayıları kucukten buyuge sıralama olur.
/*foreach($kisiler as $kisi )
{
    echo " "."$kisi"."<br/>";
}*/
echo "<hr/>";

//arsort($kisiler);// değer. sayıları buyukten kucuge sıralama yapar.
kisilistesibas($kisiler,'arsort');
/*foreach($kisiler as $kisi )
{
    echo " "."$kisi"."<br/>";
}*/
echo "<hr/>";

//krsort($kisiler);// isimleri z den a ya sıralama yapar.
kisilistesibas($kisiler,'krsort');
/*foreach($kisiler as $kisi => $sira)
{
    echo " "."$kisi - $sira"."<br/>";
}*/
echo "<hr/>";

//ksort($kisiler);// isimleri a dan z ye sıralama yapar.
kisilistesibas($kisiler,'ksort');
/*foreach($kisiler as $kisi => $sira)// $sira olusturdugumuz adı ve numarasını birlikte yazması için.
{
    echo " "."$kisi - $sira"."<br/>";
}*/
echo "<hr/>";

?>