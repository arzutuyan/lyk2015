<?php

$a=5;
for($i=0; $i<$a; $i++)//for kullanımı. 0'dan baslayıp 5 defa dönmesi için.
{
    echo $i."arzu <br/>"; //başında rakamları 5 defa ekrana arzu yazdık.
    if($i==4)//4 e geldiginde döngüden çık.
    {
        break;
    }
    switch($i)//parametre alabılıyor.
    {
        case 4:
            break 2;//2satır
        default:
            break;
    }
}

for($i=0; $i<=10;+$i++)
{
    for($i=0; $i<=10;+$i++)
    {
       // echo $i."<br/>";
        echo "i= ".$i."a=".$a."<br/>";
    }
}

?>