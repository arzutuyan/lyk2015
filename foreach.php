<?php

$a=["1.eleman","2.eleman","3.eleman"];
for($i=0; $i<count($a);$i++)//count=Bir dizideki eleman sayısını veya bir nesnedeki özellik sayısını döndürür.
{
    echo $a[$i] . "<br/>";
}

$bilgiler =array(
    array("ad" => "arzu","soyad" => "tuyan","yas" => 21),
    array("ad"=>"ozgul","soyad" =>"colakoglu","yas"=>25),
);

    foreach($bilgiler AS $k => $v) // a degerini v diye gösteriyor. ne istiyosak v degerını olusturduk.onun içine
    {
      foreach($v as $kk => $vv)// içindeki elemanların tümünü listelemek için kullandık.
      {
          echo "$vv <br/>";
      }
        echo"<hr/>";
    }


?>