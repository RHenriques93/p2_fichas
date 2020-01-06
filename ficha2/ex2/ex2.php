<?php
/* 
************ DESCRIÇÃO DO DOCUMENTO ************
* Nome do ficheiro: ex2.php *
* UC: P2 *
* @author Rafael Henriques *
* @version 1.0 *
* Data: Setembro 2019 *
* Descrição: segundo exercício prático *
************************************************ 
*/
?>

<?php 

$numeroa = $_POST["a"];
$numerob = $_POST["b"];
$numeroc = $_POST["c"];
$numerod = $_POST["d"];
$soma = $numeroa + $numeroc;
$multiplicacao = $numerob * $numerod;

echo "A soma do nº A --> $numeroa mais o nº C --> $numeroc é igual a $soma. E a multiplicação do nº B --> $numerob pelo nº D --> $numerod é igual a $multiplicacao. <br>";

if ($soma < $multiplicacao) { echo "O valor de soma ($soma) é menor que o valor da multiplicação ($multiplicacao).";}

else if ($soma == $multiplicacao) { echo "O valor de soma ($soma) é igual ao valor da multiplicação ($multiplicacao).";}

else { echo "O valor de soma ($soma) é maior que o valor da multiplicação ($multiplicacao),";}
?>