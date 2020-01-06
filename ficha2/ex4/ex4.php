<?php
/* 
************ DESCRIÇÃO DO DOCUMENTO ************
* Nome do ficheiro: ex4.php *
* UC: P2 *
* @author Rafael Henriques *
* @version 1.0 *
* Data: Setembro 2019 *
* Descrição: quarto exercício prático *
************************************************ 
*/
?>

<?php 

$numeroa = $_REQUEST["a"];
$numerob = $_REQUEST["b"];
$numeroc = $_REQUEST["c"];
$numerod = $_REQUEST["d"];

$numeros = array($numeroa, $numerob, $numeroc, $numerod);

sort($numeros);

//Ver tamanho do array
$arrlength = count($numeros);


for($i = 0; $i < $arrlength; $i++) {
    echo $numeros[$i];
    echo "<br>";
}

?>