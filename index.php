<?php

$frutas = [
    "Banana",
    "Maça",
    "Uva",
    "Morango",
    "Melão",
    "Kiwi",
    "Melancia"
];

$frutaAProcurar = "Laranja";


$encontrei = false;
 foreach($frutas as $chave => $fruta){
     if($frutas == $frutaAProcurar){
         echo "Fruta Deletada $fruta";
         unset($frutas[$chave]);
         $encontrei = true;
     }
    
}

if(!$encontrei){
    echo "Fruta não encontrada!";
}
   

?>

    