<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>örnek çallışmam</title>
</head>
<body>
    <?php
    $ogrenciler = array(
        "Türkçe",
        "Matematik",
        array(
            "Ahmet",
            "Ayşe",
            "Veli"
        ),
        "Fizik",
        "Kimya",
        array(
            "Mehmet",
            "Osman",
            "Elif"
        ),
        "Biyoloji",
        "Tarih",
        array(
            "Can",
            "Zeynep",
            "Berk"
        )
    );

        echo "<pre>";
        print_r($ogrenciler);
        echo "</pre>";

        echo "Matematik Dersindeki 3.öğrenci : " . $ogrenciler[2][2] . "<br>";
        echo "Kimya Dersindeki 1.öğrenci : " . $ogrenciler[5][0] . "<br>";
        echo "Tarih Dersindeki 2.öğrenci : " . $ogrenciler[8][1] . "<br>";
        
    
    
    ?>
</body>
</html>