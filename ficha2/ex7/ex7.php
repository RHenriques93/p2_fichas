<?php
/* 
************ DESCRIÇÃO DO DOCUMENTO ************
* Nome do ficheiro: ex7.php *
* UC: P2 *
* @author Rafael Henriques *
* @version 1.0 *
* Data: Setembro 2019 *
* Descrição: sétimo exercício prático *
************************************************ 
*/
?>

<?php 

$nomealuno = $_REQUEST["nomealuno"];
$notateste = $_REQUEST["notateste"];
$notatrabalho = $_REQUEST["notatrabalho"];
$notaprojetofinal = $_REQUEST["notaprojetofinal"];


$pesoteste = $notateste * 3;
$pesotrabalho = $notatrabalho * 2;
$pesoprojetofinal = $notaprojetofinal * 5;


$mediaponderanda = ($pesoteste + $pesotrabalho +$pesoprojetofinal) / 10;


echo "Nota do Teste: $notateste valores (ponderação: 30%)<br>";
echo "Nota do Trabalho: $notatrabalho valores (ponderação: 20%)<br>";
echo "Nota do Projeto Final: $notaprojetofinal valores (ponderação: 50%)<br>";
echo "<strong>Nota Final: $mediaponderanda valores</strong>.<br><br>";

if ($mediaponderanda < 9.5) {echo "O aluno $nomealuno <strong>reprovou</strong> à disciplina de Matemática Aplicada.";}
else {echo "O aluno $nomealuno foi aprovado na disciplina de Matemática Aplicada.";}

?>