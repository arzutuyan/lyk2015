<?php session_start();
echo $_SESSION["x"];//verimizi sunucu tarafından dosya olusturup veri kaydeder. ve ona ıp verir.cookie gibi.
echo "<br/>";
echo $_COOKIE["mevcut"];//cookie da ne olusturdugumuzu gösteriyo.
//session_destroy();//tüm seçimleri silip,çıkış işlemi yapıyor.
echo "<br/>";
session_unset("x");
if(isset($_SESSION["x"]))//olur olmadıgına baktık.
{
    echo "var";
}

else
{
    echo "yok";
}
?>
