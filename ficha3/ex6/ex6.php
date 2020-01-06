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

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-UA-compatible" content="IE-edge">
    
     <title>Ex.6</title>

    <meta name="description" content="Exercicio 1 - Programação II">
    <meta name="keywords" content="Exercicios, Programação, PHP">
    <meta name="authors" content="Rafael Henriques">

</head>

<body>

<?php 
if (isset($_REQUEST["numeroa"],$_REQUEST["numerob"],$_REQUEST["numeroc"],$_REQUEST["numerod"],$_REQUEST["numeroe"])) {

$numeroa = $_REQUEST["numeroa"];
$numerob = $_REQUEST["numerob"];
$numeroc = $_REQUEST["numeroc"];
$numerod = $_REQUEST["numerod"];
$numeroe = $_REQUEST["numeroe"];

if ($numeroa == $numerob || $numeroa == $numeroc || $numeroa == $numerod || $numeroa == $numeroe || $numerob == $numeroc || $numerob == $numerod || $numerob == $numeroe || $numeroc == $numerod || $numeroc == $numeroe || $numerod == $numeroe) {

    echo "Repetiu Nºs";
}

else {

$numerox = array($numeroa, $numerob, $numeroc, $numerod,$numeroe);


function imprimir($a) {

    foreach ($a as $valor) {
        echo $valor ." ";
        }
    }
function ordenar($valor1)  {

    rsort($valor1);
    return $valor1;

}



echo "Números pela ordem de saída: ";
imprimir($numerox);
echo "<br>Números pela ordem decrescente: ";
imprimir(ordenar($numerox));

}
}
?>

<form name="ex1" method="GET" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
<label>Insira 5 Nºs diferentes:</label>
<br>
<input type="number" name="numeroa"><br>
<input type="number" name="numerob"><br>
<input type="number" name="numeroc"><br>
<input type="number" name="numerod"><br>
<input type="number" name="numeroe"><br>
<input type="submit">
</form>

</body>