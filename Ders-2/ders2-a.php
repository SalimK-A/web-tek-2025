<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Ders-2</title>
</head>
<body>
    <!--
Değişken Tanımlama:
1. Değişkenler dolar işareti ile tanımlanır.
2. Mutlaka bir harf veya alt çizgi işareti ile başlayabilir.
3. Değişkenler Rakamlar ile başlayamaz.
4. Değişken içerisinde boşluk ve  türkçe karakterler kullanulmaz.
5. Değişkenlerde büyük küçük harf duyarlılığı vardır.
6. Programlama Dili içerisinde bulunan özel tanımlar değişken ismi olara kullanılmaz.
-->

<h4>Matematiksel İfadeler</h4>
<h5>Toplama İşlemi</h5>
<?php
$sayi1=20;  //Sayi1 değişkeni tanımlandı
$sayi2=17;  //Sayi2 Değişkeni tanımlandı
$sonuc=$sayi1 + $sayi2;  //Toplama işlemi yapıldı
echo $sonuc;  //Sonuc ekrana yazdırıldı. 
echo "<br>İşlemin sonucu: $sayi1 + $sayi2 = $sonuc"; //Sonuc ekrana yazdırıldı

echo "<br><br> Atamalı Toplama İşlemi:";

$deger=10;
$ekdeger=59;
echo "<br>Sonuç: $deger + $ekdeger = " . $deger +=$ekdeger;
echo "<br>Değer Değişkenin İçeriği: $deger";
echo "<br>Değer Değişkenin Yeni İçeriği:" . $deger+=123;
echo "<br>Değer Değişkenin Son İçeriği: $deger";
?>

<h5>Çıkarma İşlemi</h5>
<?php
$sayi1=50;  //Sayi1 değişkeni tanımlandı
$sayi2=77;  //Sayi2 Değişkeni tanımlandı
$sonuc=$sayi1 - $sayi2;  //Çıkarma işlemi yapıldı
echo $sonuc;  //Sonuc ekrana yazdırıldı. 
echo "<br>İşlemin sonucu: $sayi1 - $sayi2 = $sonuc"; //Sonuc ekrana yazdırıldı

echo "<br><br> Atamalı Çıkarma İşlemi:";

$deger=120;
$ekdeger=72;
echo "<br>Sonuç: $deger - $ekdeger = " . $deger -=$ekdeger;
echo "<br>Değer Değişkenin İçeriği: $deger";
echo "<br>Değer Değişkenin Yeni İçeriği:" . $deger-=123;
echo "<br>Değer Değişkenin Son İçeriği: $deger";



?>
<h5>Çarpma İşlemi</h5>
<?php
$sayi1=50;  //Sayi1 değişkeni tanımlandı
$sayi2=77;  //Sayi2 Değişkeni tanımlandı
$sonuc=$sayi1 * $sayi2;  //Çarpma işlemi yapıldı
echo $sonuc;  //Sonuc ekrana yazdırıldı. 
echo "<br>İşlemin sonucu: $sayi1 * $sayi2 = $sonuc"; //Sonuc ekrana yazdırıldı

echo "<br><br> Atamalı Çarpma İşlemi:";

$deger=120;
$ekdeger=72;
echo "<br>Sonuç: $deger * $ekdeger = " . $deger *=$ekdeger;
echo "<br>Değer Değişkenin İçeriği: $deger";
echo "<br>Değer Değişkenin Yeni İçeriği:" . $deger-=123;
echo "<br>Değer Değişkenin Son İçeriği: $deger";



?>
<h5>Bölme İşlemi</h5>
<?php
$sayi1=50;  //Sayi1 değişkeni tanımlandı
$sayi2=13;  //Sayi2 Değişkeni tanımlandı
$sonuc=$sayi1 / $sayi2;  //Bölme işlemi yapıldı
echo $sonuc;  //Sonuc ekrana yazdırıldı. 
echo "<br>İşlemin sonucu: $sayi1 / $sayi2 = $sonuc"; //Sonuc ekrana yazdırıldı

echo "<br><br> Atamalı Bölmeli İşlemi:";

$deger=120;
$ekdeger=72;
echo "<br>Sonuç: $deger / $ekdeger = " . $deger /=$ekdeger;
echo "<br>Değer Değişkenin İçeriği: $deger";
echo "<br>Değer Değişkenin Yeni İçeriği:" . $deger/=123;
echo "<br>Değer Değişkenin Son İçeriği: $deger"; 




?>
<h5>Mod İşlemi</h5>
<?php
$sayi1=50;  //Sayi1 değişkeni tanımlandı
$sayi2=10;  //Sayi2 Değişkeni tanımlandı
$sonuc=$sayi1 % $sayi2;  //mod işlemi yapıldı
echo $sonuc;  //Sonuc ekrana yazdırıldı. 
echo "<br>İşlemin sonucu: $sayi1 % $sayi2 = $sonuc"; //Sonuc ekrana yazdırıldı








?>
<h5>Arttırma İşlemi</h5>
<?php
$sayi1=50;  //Sayi1 değişkeni tanımlandı
echo "<br>Arttırma İşlemi Yapıldı.: ".$sayi1++;  // Bu satırda hala $sayi değerini yazacaktır fakar bir sonraki değikeni çağırdığımız satırda değişkenin 1 arttırıldığı görüntülencektir.Değişkenin sağında bulunan ++ ifadesi satır yorumladıktan sonra arttırma işlemini yapar.
echo "<br>Değişkenin Değeri: ". ++$sayi1; //değişkenin solunda bulunan ++ ifadesi değişkenin öncelikli olarak arttırılmasını sağlar.


$sayi4=6;
echo "<br>Azaltma işlemi yapıldı:". --$sayi4;
echo "<br>azaltma işlemi yapıldı".--$sayi4;
echo "<br>azaltma işlemi yapıldı".--$sayi4;

$sayi5=6;
echo "<br>azaltma işlemi yapıldı".$sayi4--;
echo "<br>azaltma işlemi yapıldı".$sayi4--;
echo "<br>azaltma işlemi yapıldı".$sayi4--;


?>
</body>
</html>