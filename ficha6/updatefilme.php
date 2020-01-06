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


  <?php

$db = new PDO("mysql:host=localhost; dbname=cinema","root","");
$dados = $db->query("SELECT realizador.id_realizador, filme.genero, filme.id_filme, filme.imgdir, filme.nome_pt, filme.ano_lancamento, realizador.nome FROM filme JOIN realizador ON filme.id_realizador = realizador.id_realizador ORDER BY id_realizador DESC LIMIT 1");

foreach ($dados as $row) {

 echo '  <div class="col-md-6"><h1>Update Realizador</h1>
<hr/>
<form action="" method="post">
<label>ID Realizador :</label>
<input type="number" name="id_realizador" required="required" placeholder="Ex: '.$row["id_realizador"].'"/><br /><br />
<label>Nome Realizador :</label>
<input type="text" name="nome" required="required" placeholder="Ex: '.$row["nome"].'"/><br /><br />
<input type="submit" value=" Submit " name="submit"/><br />
</form>
</div></div>';}

  


 if(isset($_POST["submit"])){
  $hostname='localhost';
  $username='root';
  $password='';

  $idrealizador = $_REQUEST["id_realizador"];
 $nomerealizador = $_REQUEST["nome"];
  
  try {
     
    $data = [
      'id_realizador' => $idrealizador,
      'nome' => $nomerealizador,      
  ];

  $sql = "UPDATE realizador SET nome=:nome WHERE id_realizador=:id_realizador";
  $db->prepare($sql)->execute($data);
  
  
  if ($db->query($sql)) {
    echo "<script type= 'text/javascript'>alert('Novo Realizador Inserido na Base de Dados');</script>";
    }
    else{
    echo "<script type= 'text/javascript'>alert('Os dados que introduziu não foram submetidos.');</script>";
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
 <h1>Update Filme</h1>
 <hr/>
 <form action="" method="post">
 <label>ID filme :</label>
 <input type="number" name="id_filme" required="required" placeholder=""/><br /><br />
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
</div>';}

  


 if(isset($_POST["submit2"])){
  $hostname='localhost';
  $username='root';
  $password='';
  
  try {
     
    $data = [
      'id_filme' => $idfilme=$_REQUEST["id_filme"],
      'nome_pt' => $nomept=$_REQUEST["nome_pt"], 
      'nome_original' => $nomeoriginal=$_REQUEST["nome_original"],
      'ano_lancamento' => $anolancamento=$_REQUEST["ano_lancamento"],
      'id_realizador' => $idrealizador2=$_REQUEST["id_realizador"],
      'imgdir' => $imgdir=$_REQUEST["imgdir"],
      'link' => $link=$_REQUEST["link"],
      'sinopse' => $sinopse=$_REQUEST["sinopse"], 
      'genero' => $genero=$_REQUEST["genero"], 
      'elenco' => $elenco=$_REQUEST["elenco"], 
  ];

  $sql = "UPDATE filme SET nome_pt=:nome_pt, nome_original=:nome_original, ano_lancamento=:ano_lancamento, id_realizador=:id_realizador, imgdir=:imgdir, link=:link, sinopse=:sinopse, genero=:genero, elenco=:elenco WHERE id_filme=:id_filme";
  $db->prepare($sql)->execute($data);
  
  
  if ($db->query($sql)) {
    echo "<script type= 'text/javascript'>alert('Novo Realizador Inserido na Base de Dados');</script>";
    }
    else{
    echo "<script type= 'text/javascript'>alert('Os dados que introduziu não foram submetidos.');</script>";
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
