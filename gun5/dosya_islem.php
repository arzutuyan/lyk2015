<?php

$isimler =[
    "ahmet",
    "mehmet",
    "ali",
    "veli",
    "ömer"
];



$json=json_encode($isimler);

$dosya="omer.txt";

if(file_exists($dosya))
{
    //işlemler
    $open=fopen($dosya,"w");
    fwrite($open, $json);
    fclose($open);
}
else
{
  touch($dosya);
}

echo "<br/>";
echo "<a href='fread.php'>dosyayı oku</a>"

?>