<?php
/* 
************ DESCRIÇÃO DO DOCUMENTO ************
* Nome do ficheiro: ex8.php *
* UC: P2 *
* @author Rafael Henriques *
* @version 1.0 *
* Data: Setembro 2019 *
* Descrição: oitavo exercício prático *
************************************************ 
*/
?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-UA-compatible" content="IE-edge">
    
     <title>Ex.8</title>

    <meta name="description" content="Exercicio 1 - Programação II">
    <meta name="keywords" content="Exercicios, Programação, PHP">
    <meta name="authors" content="Rafael Henriques">

</head>

<body>

<?php 

function geraSenha($tamanho) {

for ($i=0; $i < $tamanho; $i++) {

    // ascii 33, 126 -- ver tabela ascii
$numero = mt_rand(33,126);
$caractere = chr($numero);
echo $caractere;

}



}

echo "A sua palavra-passe é: ";
geraSenha(8);



?>


</body>