<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diziler</title>
</head>
<body>
    <?php
    /*dizinin yazdırılması*/
   $erkekler=array("Ali","Ahmet","Kemal");
   $kadınlar=array("Ayşe","Ebru","Elif");
   echo "<pre>";
   print_r($erkekler);
   echo "<pre>";

   echo "<pre>";
   print_r($kadınlar);
   echo "<pre>";

   /*Dizinin bir elemanın yazdırılması*/
   echo /*erkekler dizisindeki birinci eleman*/    $erkekler[0] . "<br>";
   echo /*kadınlar dizisindeki üçücüncü eleman*/    $kadınlar[2] . "<br>";


   /*Array tanımlarken key value ilişkisi */
   $personel = array(
    "id"        => 1,
    "name"      => "Elif Nur",
    "surname"   => "Candan",
    "graduate"  => "Aymes Bilgisayar Programcılığı"
   );
   echo "<pre>";
   print_r($personel);
   echo "</pre>";
   
   echo "Personelin Adı:". $personel ["name"] . "<br>";
   echo "Personelin Soyadı". $personel["surname"]. "<br>";
   
   
   /*Foreach Döngüsüyle Dizi İçeriğinin Yazdırılması: */
   foreach ($personel as $key => $value) {
        echo "$key - $value <br>";
   }


    ?>

    <h3>Tanımlı Diziye İçerik Ekleme</h3>
    <?php
    $degerler =[];

    echo "<pre>";
    print_r($degerler);
    echo "</pre>";
    
    $degerler[] = "Ocak";
    $degerler[] = "Şubat";
    $degerler[5] = "Mart";
    $degerler["key"] = "Nisan";
    $degerler[] = "Eylül";
    $degerler[3] = "Temmuz";

    echo "<pre>";
    print_r($degerler);
    echo "</pre>";
    ?>
</body>
</html>