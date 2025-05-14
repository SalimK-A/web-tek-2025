<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontrol Yapıları</title>
</head>
<body>
    <h3>Kontrol Yapıları</h3>

    <?php
    if (3>5) {
       echo "Koşul Doğru";
    }else{
        echo "Koşul Yanlış";
    }



    echo "<h3>Farklı Kullanım Örneği</h3>";
    if (3>5): 
        echo "Koşul Doğru";
    else:
         echo "Koşul Yanlış";
     
    endif;



    echo "<h3>Fazla Koşul Kullanım Örneği</h3>";
    if (3<10) {
        echo "Koşul Yanlış 3>10.";
     }else if (10>15){
        echo"Koşul Doğru 10>15";

     }
     else{
         echo "Koşulların Dışında";
     }



     echo "<h3>Saat Uygulaması</h3>";

     $saat=12;

     if ($saat>= 0 && $saat<=24) {
     if ($saat>= 0 && $saat<=6) {
      echo "İyi Geceler. Saat=$saat" ;
     }elseif ($saat>=6 && $saat<=9) {
        echo "Günaydın. ";
     }elseif ($saat>=9 && $saat<=17) {
        echo "İyi Günler. ";
     }elseif ($saat>=17 && $saat<=22) {
        echo "İyi Akşamlar. ";
     }else {
        echo "İyi Geceler.";
     }}else {
        echo "Saat Hatalı.";
     }
    
    ?>
    
</body>
</html>