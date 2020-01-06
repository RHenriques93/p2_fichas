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

<?php 



if (isset($_GET["op"])) {    
    $op= $_GET["op"];

        if($op == 1) {
        require("inc/novoslancamentos.inc.php");
        } else if($op == 2) {
        require("inc/maispopulares.inc.php");}
        else if($op == 3) {
            require("inc/todososfilmes.inc.php");}
             
        }else {
            require("inc/main.inc.php");

            }
    
 

?>





<?php include("inc/footer.inc.php");?>

<script src="js/bootstrap.min.js" async>
<script src="js/jquery-3.4.1.min.js" async>

</body>
</html>



