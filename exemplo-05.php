<?php  

$nome =  "Julio";

function teste(){
	global $nome;
	echo $nome;
}

function teste2(){
 
$nome = "ISSOTUDOEHLINDO";
echo $nome." agora no teste 2";

}

teste();
teste2();
?>