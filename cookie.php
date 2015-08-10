<?php
/*
 * isset: tüm degerleri kontrol eder
if(isset($_COOKIE["deneme"]))
    echo"var";
else echo "yok";
?>

echo "<br/>";
<form action="" method="post">
action , formdaki bilgilerin nereye / hangi sayfaya gönderileceğini belirtmektedir.
method  ise bilgilerin hangi metod ile gönderileceğini belirtmektedir.
submit : gönderme buton oluşturur.
*/

//echo time();
$hafta2once=1439138291-(15*24*60*60);
var_dump(getdate($hafta2once)) ;


echo "<hr/>";

$user ="admin";
$pass ="12345";


if(isset($GET["islem"]))
{
    unset($_COOKIE["kullanici"]);//içine ne yazılırsa yok eder.
    setcookie("kullanici","",time ()-3600);
}
if(isset($_POST["ad"]))
{
    if(empty($_POST["ad"]) OR empty ($_POST["sifre"]))// kulanıcı veya sifre bossa yap.
    {
        echo "kullanıcı adın veya sifren bos. doldurda gell";
    }
    else
    {
       if($_POST["ad"]==$user && $_POST["sifre"]==$pass)
       {
           setcookie("kullanici",$_POST["ad"]);
       }
        else
        {
            echo "şifre veya user yanlış";
        }
    }
}
if(isset($_COOKIE["kullanici"]))//kullanıcı tanımlanmıs mı dıye bakıyoruz.tıklanmıssa.
{
    echo " hosgeldiniz  ".$_COOKIE["kullanici"];// cookie yoksa formlar gorulecek
    echo "cıkış yap";
    echo '<a href="?islem=cikisyap">cıkıs yap</a>';

}
else
{

    echo'
<form action="cookie.php" method="post">
        <input type="text" name="ad" />
        <input type="password" name="şifre" />
        <input type="submit"  value="Gönder" />

    </form>
    ';

}

?>