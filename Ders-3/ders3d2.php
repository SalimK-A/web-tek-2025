<?php



$gelendosya= $_FILES["cv"];

echo "<pre>";
print_r($gelendosya);
echo "</pre>";

echo "Gelen Dosyanın Adı:". $gelendosya["name"]. "<br>";
echo "Gelen Dosyanın Mim:". $gelendosya["type"]. "<br>";
echo "Gelen Dosyanın Temp Dİzini:". $gelendosya["tmp_name"]. "<br>";
echo "Gelen Dosyanın Boyutu:". $gelendosya["size"]. "<br>";