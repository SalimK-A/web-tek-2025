<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Sık Kullanılan hazır fonksiyonlar</h3>
    <?php
    echo $metin = "aydın adnan menderes üniversitesi";
    $byazi = strtoupper($metin);  //yazıyı büyük harfe dönüştür.
    $kyazi = strtolower($byazi);   // yazıyı küçük harfe dönüştür.
    $mb_byazi = mb_strtoupper($kyazi);  //ilki aynı
    $mb_kyazi = mb_strtolower($mb_byazi);  // ikinci aynı
    $ilkharf_buyuk_metin = ucfirst($mb_kyazi); //gelen metnin ilk harfini büyütür.
    $ilkharf_buyuk_kelime = ucwords($metin); //gelen metnin kalan harflerini büyütür.
    echo "<br>Karakter Sayısı" , strlen($metin);
    echo "<br> Metnin Belirli Bir Karakter Sayısı:" . substr($metin ,0,21);

    ?>
    <h4>Uygulama</h4>

    <?php

    $lorem = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus error nisi minus sit eius id neque? Odio quam nostrum doloribus at. Corporis totam placeat ad beatae expedita, possimus sint quo.";
    echo substr($lorem,0,100). "...";
    echo '<a href="https://www.adu.edu.tr/" target="_blank"><br>Devamını oku</a>';
    
?>
</body>

</html>