

    <a href="?islem=yukari"> yukarı çık </a>


<?php

if(!isset ($_COOKIE["mevcut"]))
{
  setcookie("mevcut",2);
}
$mevcut= $_COOKIE["mevcut"];


if(isset  ($_GET["islem"])) {
    if ($_GET["islem"] == "yukari") {
        if ($mevcut == 0) {
            setcookie("mevcut", 4);
        } else {
            setcookie("mevcut", $mevcut - 1);
        }
    }
}

if($_GET["islem"]=="asagi")
{
    if($mevcut==4)
    {
        setcookie("mevcut",0);
    }
    else
    {
        setcookie("mevcut",$mevcut + 1);
    }

}

echo '<table width="200" height="400" border=1>';
for($i=0;$i<5;$i++)
{

    if($i==$mevcut)
    {
        echo "<tr><td>A</td>";
        echo"</tr>";
    }
    else
    {
        echo "<tr><td></td> </tr>";

    }

}
echo "</table>";
?>

<a href= "?islem=asagi"> AŞAĞI İN </a>

