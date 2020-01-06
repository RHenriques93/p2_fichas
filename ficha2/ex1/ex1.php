<?php
/* 
************ DESCRIÇÃO DO DOCUMENTO ************
* Nome do ficheiro: ex1.php *
* UC: P2 *
* @author Rafael Henriques *
* @version 1.0 *
* Data: Setembro 2019 *
* Descrição: primeiro exercício prático *
************************************************ 
*/
?>

<?php 

$numero = $_GET["numero"];

if ($numero < 100) echo "O $_GET[numero] que inseriu é menor que 100.";

elseif ($numero == 100) echo "O $_GET[numero]  que inseriu é igual a 100.";

else echo "O $_GET[numero] que inseriu é maior que 100.";


?>