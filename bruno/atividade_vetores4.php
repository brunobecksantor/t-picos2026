<?php 
$aluno = [
    "Nome1" => "Bruno", 
    "Nota1" => "10",
    "Nome2" => "Lorenzo",
    "Nota2" => "5",
    "Nome3" => "Theo",
    "Nota3" => "0"
];
foreach($aluno as $notas => $melhor){
    echo"$notas: $melhor<br>";
}
$media = ($aluno["Nota1"] + $aluno["Nota2"] + $aluno["Nota3"])/3;
echo"$media";
if($alun)
?>