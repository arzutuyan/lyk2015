<!doctype  html />
<html>
    <head>
      <title>kayıt formu</title>
    </head>
<body>

<form action="kontrol.php" method="post">
    Adınız: <input type="text" name="ad" /><br/>
    Soyadınız: <input type="text" name="soyad" /><br/>
    Şifreniz: <input type="password" name="sifre" /><br/>
    Doğum Tarihiniz: <input type="date" name="dogumtarih" /><br/>
    Cinsiyet:
    <input type="radio" name="cinsiyet" value="kadin" id="kadin" />
         <label for="kadin">Kadın</label> <!--kadına tıkladıgında id kadına gidicek -->
     <input type="radio" name="cinsiyet" value="erkek" id="erkek "/>
          <label for="erkek">erkek</label>
    <br/>
    <br/>

    okul:
    <?php
    include("veriler.php");
    ?>

    <select name="okul">
    <?php
            foreach ($uniler as $k => $v)
          {
            echo "<option value='$k'>$v</option>";
          }
    ?>
    </select>
    <br/>

<?php

foreach($hobiler as $k => $v)
{
    echo "<input type='checkbox' name='hobi[]' value='$k'> $v <br/>"; //birden fazla hobi seç. için ekranda gözüksün diye.
}

    ?>

    <input type="submit" />
</form>


</body>
</html>