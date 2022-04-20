<?php

include 'conexao.php';
$id = $_POST['id'];
$nome = $_POST['nome'];
$ddi = $_POST['ddi'];
$ddd = $_POST['ddd'];
$numero = $_POST['numero'];

$recebendo_dados = "UPDATE contato 
SET nome = '$nome', ddi = '$ddi', ddd = '$ddd', numero = '$numero' 
WHERE id = $id";

//echo $id;
//echo $nome;
//echo $ddi;
//echo $ddd;
//echo $numero;
$query_cadastro = mysqli_query($connx,$recebendo_dados);    

header("location: /CRUD 2.0/listagem.php")
  




?>
