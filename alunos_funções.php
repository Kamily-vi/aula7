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
function MudarNota(array &$turma, $nome, $MudarNota){
 
    foreach($turma as $chave => $aluno) {
        if($aluno["nome"] == $nome ){
            $turma[$chave]["nota"] = $MudarNota;
 
            return;
        }
    }
}

function fecharNotaAlunos( array &$turma){
    foreach($turma as $chave => $aluno){
        if($aluno["nota"] >= 50){
            $turma[$chave]["situação"] = "aprovado";
        }else{
            $turma[$chave]["situação"] = "reprovado";
        }
    }
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

fecharNotaAlunos($alunos);
 
MudarNota($alunos,"Gustavo", 45);
MudarNota($alunos,"Isabela", 23);
 
print_r($alunos);

echo "<br><br>";

 
 
$media = calcularMedia($alunos);
 
//echo "A média da sala é $media";
 
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
 
$mediaTurmaB = calcularMedia ($alunosTurmaB);
 
echo "A média da Turma B é: $mediaTurmaB";
 
echo "<br><br>";
 
$melhorAluno = alunoComMaiorNota($alunosTurmaB);
 
echo "Melhor estudante é " . $melhorAluno["nome"] 
        . " com nota " . $melhorAluno["nota"] . ".";
 
echo "<br><br>";
 
function AprovadoReprovado(){


    if($nota >= 50){
        echo "Aprovado: $nota";
    }else{
        echo "Reprovado: $nota";
    }
}