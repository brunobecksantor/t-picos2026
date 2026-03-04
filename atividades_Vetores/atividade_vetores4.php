<?php 
$aluno = [
    ["m" => "Bruno", "n" => 10],
    ["m" => "Lorenzo", "n" => 5],
    ["m" => "Theo", "n" => 0]
];

$notaTotal = 0;
foreach ($aluno as $estudante) {
    $notaTotal += $estudante["n"];
}
$media = $notaTotal / count($aluno);

echo "<br>Média:$media <br><br>";

$notas = array_column($aluno, "n");
$maior = max($notas);
$indice = array_search($maior, $notas);
$nomeMaior = $aluno[$indice]["m"];

echo "O aluno com a maior nota é: $nomeMaior <br>";
echo "Nota: $maior <br>";


?>