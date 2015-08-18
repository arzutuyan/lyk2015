<meta charset="UTF-8">
<?php

function sortarraysby($array,$akeyınarray)
{
    //dizinin ilk elemanına göre alıyo.
    $holder=[]; //0 ın ıcınde 22 21  tutucu
    foreach($array as $key => $value)//dizinin içindeki bir dizinin elemanını aldık.
        $holder[$key]=$value[$akeyınarray];
    array_multisort($holder, SORT_ASC,$array);//array_multisort= dizilerin ilk elemanlarına göre listeleme
    return $array;
}
$students = array(
    /*
    "Arzu Tuyan",
    "Ayşenur Karaaslan",
    "Aziz Günal",
    "Büşra Günay",
    "Büşra Uman",
    "Uğur Arıcı"
    */
    array(
        'name' => array(
            'first_name' => 'Arzu',
            'last_name' => 'Tuyan',
            'full_name' => 'Arzu Tuyan',
        ),
        'age' => 24
    ),
    array(
        'name' => array(
            'first_name' => 'Ayşenur',
            'last_name' => 'Karaaslan',
            'full_name' => 'Ayşenur Karaaslan',
        ),
        'age' => 21
    ),
    array(
        'name' => array(
            'first_name' => 'Aziz',
            'last_name' => 'Günal',
            'full_name' => 'Aziz Günal',
        ),
        'age' => 25
    ),
    array(
        'name' => array(
            'first_name' => 'Büşra',
            'last_name' => 'Günay',
            'full_name' => 'Büşra Günay',
        ),
        'age' => 20
    ),
    array(
        'name' => array(
            'first_name' => 'Büşra',
            'last_name' => 'Uman',
            'full_name' => 'Büşra Uman',
        ),
        'age' => 28
    ),
);
/*
// çok katmanlı dizide ki kişileri listeleme.
//yaş dizisi olusturduk.
$ages =[];
//YAŞLAR DİZİSİNİ TANIMLAYICI ANAHTAR(İD) İLE BİRLİKTE DOLDURUYOUZ.
foreach($students as $id => $student)
    $ages[$id] =$student['age'];
//YAŞLARI İÇEREN DİZİYE GÖRE ÖĞRENCİLER DİZİSİNİ ARTAN SIRALIYORUZ.
array_multisort($ages,SORT_ASC,$students);
*/
$students=sortarraysby($students,'age');

foreach($students as $student){
    echo
        $student['name']['first_name'] .
        " - " .
        $student['name']['last_name'] .
        " - " .
        $student['age'] .
        "<br>";
}