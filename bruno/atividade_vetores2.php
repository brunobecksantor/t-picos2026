<?php 
$numeros = ["1", "2", "3", "4", "5"];
foreach($numeros as $numero){
    echo"$numero<br>";
}
echo"<br><br><br>";
unset($numeros[3]);
foreach($numeros as $num){
    echo"$num <br>";
}
?>