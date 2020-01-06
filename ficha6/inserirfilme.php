<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-UA-compatible" content="IE-edge">
    
     <title>Clube de Vídeo Online</title>

     <link rel="stylesheet" type="text/css" href="css/mystyle.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="img/83519.png">


    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
    <script src="js/jquery-3.4.1.min.js" async></script>
    <script src="js/bootstrap.min.js" async></script>

</head>
<body class="bckgr ibm">

<?php include("inc/header.inc.php");?>

<br>
<div class="container-fluid">
  <div class="row">
  <div class="col-md-6">

<h1>Inserir novo Realizador</h1>
<hr/>
<form action="" method="post">
<label>Nome Realizador :</label>
<input type="text" name="nome" required="required" placeholder="Insira o ID do Filme"/><br /><br />
<input type="submit" value=" Submit " name="submit"/><br />
</form>
</div>
<!-- Right side div -->
</div>
</div>
</div>
<br><hr>

<?php
if(isset($_POST["submit"])){
$hostname='localhost';
$username='root';
$password='';

try {
  $db = new PDO("mysql:host=localhost; dbname=cinema","root","");

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // <== add this line
$sql = "INSERT INTO realizador (nome)
VALUES ('".$_POST["nome"]."')";
if ($db->query($sql)) {
echo "<script type= 'text/javascript'>alert('Novo Realizador Inserido na Base de Dados');</script>";
}
else{
echo "<script type= 'text/javascript'>alert('Os dados que introduziu não foram submetidos.');</script>";
}

$dbh = null;
}
catch(PDOException $e)
{
echo $e->getMessage();
}
}

?>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-6">
<h1>Inserir novo Filme</h1>
<hr/>
<form action="" method="post">
<label>Nome PT:</label>
<input type="text" name="nome_pt" required="required" placeholder=""/><br /><br />
<label>Nome Original:</label>
<input type="text" name="nome_original" required="required" placeholder=""/><br /><br />
<label>Data de Lancamento:</label>
<input type="date" name="ano_lancamento" required="required" placeholder=""/><br /><br />
<label>ID Realizador:</label>
<input type="number" name="id_realizador" required="required" placeholder=""/><br /><br />
<label>Inserir Imagem:</label>
<input type="file" name="imgdir" required="required" placeholder=""/><br /><br />
<label>URL do Trailer:</label>
<input type="text" name="link" required="required" placeholder=""/><br /><br />
<label>Sinopse:</label>
<input type="text" name="sinopse" required="required" placeholder=""/><br /><br />
<label>Género:</label>
<input type="text" name="genero" required="required" placeholder=""/><br /><br />
<label>Elenco:</label>
<input type="text" name="elenco" required="required" placeholder=""/><br /><br />



<input type="submit" value=" Enviar" name="submit2"/><br />
</form>
</div>
<!-- Right side div -->
</div>
</div>
</div>
<?php
if(isset($_POST["submit2"])){
$hostname='localhost';
$username='root';
$password='';

try {
  $db = new PDO("mysql:host=localhost; dbname=cinema","root","");

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // <== add this line
$sql = "INSERT INTO filme (nome_pt, nome_original, ano_lancamento, id_realizador, imgdir, link, sinopse, genero, elenco)
VALUES ('".$_POST["nome_pt"]."','".$_POST["nome_original"]."','".$_POST["ano_lancamento"]."','".$_POST["id_realizador"]."','".$_POST["imgdir"]."','".$_POST["link"]."','".$_POST["sinopse"]."','".$_POST["genero"]."','".$_POST["elenco"]."')";
if ($db->query($sql)) {
echo "<script type= 'text/javascript'>alert('Novo Realizador Inserido na Base de Dados');</script>";
}
else{
echo "<script type= 'text/javascript'>alert('Os dados que introduziu não foram submetidos.');</script>";
}

$dbh = null;
}
catch(PDOException $e)
{
echo $e->getMessage();
}
}

?>


</form>
 







<?php include("inc/footer.inc.php");?>

<script src="js/bootstrap.min.js" async>
<script src="js/jquery-3.4.1.min.js" async>

</body>
</html>
