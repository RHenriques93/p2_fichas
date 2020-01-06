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

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-UA-compatible" content="IE-edge">
    
     <title>Ex.4</title>

    <meta name="description" content="Exercicio 1 - Programação II">
    <meta name="keywords" content="Exercicios, Programação, PHP">
    <meta name="authors" content="Rafael Henriques">

</head>

<body>

<?php 
if (isset($_REQUEST["numeroa"])) {

    $numeroa = $_REQUEST["numeroa"];
    $numeros = array();

function mensagem($numeroa) {
   
    for ($i = 0; $i<=$numeroa; $i++) {
           
        echo $numeros = $i ." ";
            
    } 

} 

echo "Valor Recebido : $numeroa <br>";
echo "Impressão Programa - " ;
mensagem($numeroa);


  
}

    ?>

<form name="ex1" method="GET" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
<label for="numeroa">Insira um Nº:</label>
<input type="number" name="numeroa"><br>
<input type="submit">
</form>

</body>