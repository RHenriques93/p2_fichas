<?php
/* 
************ DESCRIÇÃO DO DOCUMENTO ************
* Nome do ficheiro: ex6.php *
* UC: P2 *
* @author Rafael Henriques *
* @version 1.0 *
* Data: Setembro 2019 *
* Descrição: sexto exercício prático *
************************************************ 
*/
?>

<?php 

$palavraa = $_REQUEST["palavraa"];
$palavrab = $_REQUEST["palavrab"];

if ($palavraa == $palavrab) {echo "Os valores da palavra são iguais.";}
else {echo "Os valores das palavras são diferentes.<br>";}

echo "O nº de caracteres da primeira palavra é igual a " .strlen($palavraa) ."<br>";
echo "O nº de caracteres da segunda palavra é igual a " .strlen($palavrab);

?>