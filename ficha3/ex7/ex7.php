<?php
/* 
************ DESCRIÇÃO DO DOCUMENTO ************
* Nome do ficheiro: ex7.php *
* UC: P2 *
* @author Rafael Henriques *
* @version 1.0 *
* Data: Setembro 2019 *
* Descrição: setimos exercício prático *
************************************************ 
*/
?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-UA-compatible" content="IE-edge">
    
     <title>Ex.7</title>

    <meta name="description" content="Exercicio 1 - Programação II">
    <meta name="keywords" content="Exercicios, Programação, PHP">
    <meta name="authors" content="Rafael Henriques">

</head>

<body>

<?php 
if (isset($_REQUEST["nome"],$_REQUEST["idade"],$_REQUEST["sexo"])) {

    $nome = $_REQUEST["nome"];   
    $idade = $_REQUEST["idade"];
    $sexo = $_REQUEST["sexo"];


function recolhaDados($nome, $idade, $sexo) {


    if ($idade >= 18 && $idade <= 35 && $sexo == "Masculino") {

return "$nome ($idade) - PARABÉNS $nome , foi aceite no nosso desafio!";

    }

else {
    return "Lamentamos $nome, fica para uma próxima";
}


}

echo recolhaDados($nome, $idade, $sexo);
}

?>

<form name="ex1" method="GET" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
<label for="nome">Nome:</label>
<input type="text" name="nome"><br>

<label for="idade">Idade:</label>
<input type="number" name="idade"><br>

<label for="sexo">Sexo:</label>
<select name="sexo">
<option value="Masculino">Masculino</option>
<option value="Feminino">Feminino</option>
</select>

<input type="submit">
</form>

</body>