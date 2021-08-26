<?php

function calcularMedia( $turma){
    $soma = 0;
 $qtdeAlunos = 0;
foreach($turma as $aluno){
    $soma = $soma + $aluno["nota"];
    
}

$media = $soma / count($turma);

return $media;
}

function alunoComMaiorNota(array $turma){

    $melhorAluno = null;
    foreach($turma as $aluno){
        if($melhorAluno == null){
            $melhorAluno = $aluno;
        }elseif($aluno["nota"] > $melhorAluno["nota"]){
            $melhorAluno = $aluno;
         }
    }

    return $melhorAluno;

}

$alunos = [
    "1" => [
    "nome" => "Maria",
    "idade" => 16,
    "nota" => 85
],
"2" => [
    "nome" => "Artur",
    "idade" => 16,
    "nota" => 92,
],
"3" =>[
    "nome" => "Gustavo",
    "idade" => 16,
    "nota" => 80
],
"4" => [
    "nome" => "Isabela",
    "idade" => 17,
    "nota" => 95

    ]

];

$media = calcularMedia($alunos);

echo "A média da sala é $media";

echo "<br><br>";

$melhorAluno = alunoComMaiorNota($alunos);

echo "Melhor estudante é " . $melhorAluno["nome"] 
        . " com nota " . $melhorAluno["nota"] . ".";

echo "<br><br>";


$alunosTurmaB = [
    "1" => [
    "nome" => "Kelly",
    "idade" => 17,
    "nota" => 100
],
"2" => [
    "nome" => "Paulo",
    "idade" => 16,
    "nota" => 85,
],
"3" =>[
    "nome" => "Gabriel",
    "idade" => 16,
    "nota" => 82
],
"4" => [
    "nome" => "Mateus",
    "idade" => 16,
    "nota" => 83

],
"5" => [
    "nome" => "Bruna",
    "idade" => 16,
     "nota" => 90
    
     ]

];

$melhorAluno = alunoComMaiorNota($alunosTurmaB);

echo "Melhor estudante é " . $melhorAluno["nome"] 
        . " com nota " . $melhorAluno["nota"] . ".";

echo "<br><br>";

$mediaTurmaB = calcularMedia ($alunosTurmaB);

echo "A média da Turma B é: $mediaTurmaB";


// escreva uma função que altere a nota de um aluno específico

function alterarNotaAluno(array $turma, $nome, $novaNota){
    foreach($turma as $aluno){
        if($aluno["nome"] == $nome){
            $aluno["nota"] = "novaNota";
            return;
        }

    }
}

