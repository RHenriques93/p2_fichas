<!DOCTYPE html>
<html lang="pt-pt">

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


  <?php

$db = new PDO("mysql:host=localhost; dbname=cinema","root","");
$dados = $db->query("SELECT realizador.id_realizador, filme.genero, filme.id_filme, filme.imgdir, filme.nome_pt, filme.ano_lancamento, realizador.nome FROM filme JOIN realizador ON filme.id_realizador = realizador.id_realizador ORDER BY id_realizador DESC LIMIT 1");

foreach ($dados as $row) {

 echo '  <div class="col-md-6"><h1>Eliminar Realizador</h1>
<hr/>
<form action="" method="post">
<label>ID Realizador :</label>
<input type="number" name="id_realizador" required="required" placeholder="Ex: '.$row["id_realizador"].'"/><br /><br />
<input type="submit" value="Eliminar" name="submit"/><br />
</form>
</div></div>';}

  


 if(isset($_POST["submit"])){
  $hostname='localhost';
  $username='root';
  $password='';

  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $idrealizador = $_REQUEST["id_realizador"];
   
  try {

$sql = "DELETE FROM realizador WHERE id_realizador=$idrealizador";
  

  if ($db->query($sql)) {
    echo "<script type= 'text/javascript'>alert('Realizador Eleminado da Base de Dados');</script>";
    }
    else{
    echo "<script type= 'text/javascript'>alert('Erro - O realizador não foi eleminado da base de dados..');</script>";
    }
    
    
  
  $db = null;
  }
  catch(PDOException $e)
  {
  echo $e->getMessage();
  }
  }
  
?>


<!-- Right side div -->
</div>
</div>
</div>
<br><hr>

<?php

$db = new PDO("mysql:host=localhost; dbname=cinema","root","");
$dados = $db->query("SELECT realizador.id_realizador, filme.genero, filme.id_filme, filme.imgdir, filme.nome_pt, filme.ano_lancamento, realizador.nome FROM filme JOIN realizador ON filme.id_realizador = realizador.id_realizador ORDER BY id_realizador DESC LIMIT 1");

foreach ($dados as $row) {

 echo '  <div class="col-md-6">
 <h1>Eliminar Filme</h1>
 <hr/>
 <form action="" method="post">
 <label>ID filme :</label>
 <input type="number" name="id_filme" required="required" placeholder=""/><br /><br />

 
<input type="submit" value=" Eliminar" name="submit2"/><br />
</form>
</div>';}

  


if(isset($_POST["submit2"])){
  $hostname='localhost';
  $username='root';
  $password='';

  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $idfilme= $_REQUEST["id_filme"];
   
  try {

$sql = "DELETE FROM filme WHERE id_filme=$idfilme";
  

  if ($db->query($sql)) {
    echo "<script type= 'text/javascript'>alert('Realizador Eleminado da Base de Dados');</script>";
    }
    else{
    echo "<script type= 'text/javascript'>alert('Erro - O realizador não foi eleminado da base de dados..');</script>";
    }
    
    
  
  $db = null;
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
