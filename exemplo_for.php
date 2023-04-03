<?php
//laço de repetição for em php

//imprima os valores de 1 ao 10 em sua página web

echo "1";
echo "<br>";
echo "2";
echo "<br>";
echo "3";
echo "<br>";
echo "4";
echo "<br>";
echo "5";
echo "<br>";
echo "6";
echo "<br>";
echo "7";
echo "<br>";
echo "8";
echo "<br>";
echo "9";
echo "<br>";
echo "10";
echo "<br>";

for($numero=0; $numero<=10; $numero++){
    echo $numero . "<br>";
}
for($impar=0; $impar<=100; $impar++){
    if($impar % 2 == 1){
        echo "<div>".$impar."</div>";
    }
}

?>