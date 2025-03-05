<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dersleri</title>
</head>

<body>

    <?php
    /* Çoklu satırlı açıklama satırı oluşturmak için kullanılır. */
    // Tek satır açıklamak yazmak için kullanılır.
    //phpinfo();/* Bu fonksiyon yüklü olan php versiyonu  ve kurulu paketlerin bilgisini yazdırır. */
    echo "Aydın Adnan Menderes Üniversitesi Aydın MYO Bilgisayar Programcılığı";
//php içerisinde html etiketleri kullanılabilir.
    echo "<br> Aydın Adnan Menderes Üniversitesi Aydın MYO Bilgisayar Programcılığı <br>";

//uygulama: bir değişken tanımlama ve değişkeni ekrana yazdırma.
    $metin = "<br> Aydın Adnan Menderes Üniversitesi Aydın MYO Bilgisayar Programcılığı";
    echo $metin;
   
// Değişken içerisindeki metinsel ifadelerin büyük küçük harf dönüşümleri
    echo $bharf = strtoupper($metin);
    echo $kharf = strtolower($bharf);

    echo $bharf2 = mb_strtoupper($metin);
    echo $kharf2 = mb_strtolower($metin);

    ?>
</body>

</html>