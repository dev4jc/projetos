<?php 

$anoNascimento = 1998;
$nomeCompleto = "Nome Completo";
$sobrenome = "Lindo";

$nomeCompletoE = $nomeCompleto.$sobrenome;
echo $nomeCompletoE;
exit;
// comentário
/*
Comentário
*/
echo $nomeCompleto;

//unset($nomeCompleto): // limpa memoria

if (isset($nomeCompleto)) {

	echo $nomeCompleto;
}



 ?>