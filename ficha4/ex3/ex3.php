<?php
/* 
************ DESCRIÇÃO DO DOCUMENTO ************
* Nome do ficheiro: ex3.php *
* UC: P2 *
* @author Rafael Henriques *
* @version 1.0 *
* Data: Setembro 2019 *
* Descrição: quarto exercício prático da ficha 4 *
************************************************ 
*/
?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-UA-compatible" content="IE-edge">
    
     <title>Ex.2</title>

    <meta name="description" content="Exercicio 1 - Programação II">
    <meta name="keywords" content="Exercicios, Programação, PHP">
    <meta name="authors" content="Rafael Henriques">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/mystyle.css">
    <script src="js/jquery-3.4.1.min.js" async></script>
    <script src="js/bootstrap.min.js" async></script>

</head>

<body>

<main>

<div class="row d-flex justify-content-center">
 
<div class="col-md-4 text-center">

<br>
<br>
 
<form method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>">
  <div class="form-group">
    <label for="email">Nome Utilizador:</label>
    <input type="text" class="form-control" id="email" name="user">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd" name="password">
  </div>
  <div class="form-group form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox"> Remember me
    </label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<br>

<?php

if (isset($_REQUEST["user"],$_REQUEST["password"])) {

 $user = $_REQUEST["user"];
 $password = $_REQUEST["password"];

     if ($user == "teste" && $password == "123")

    
    echo "<div class='alert alert-success'>
    Autenticação realizada
    com <strong>sucesso</strong>!
  </div>";

    else 
    echo "<div class='alert alert-danger'>Username ou password <strong>desconhecidos</strong>!</div>";
}


?>
</div>


</div>

</main>




</body>
</html>


