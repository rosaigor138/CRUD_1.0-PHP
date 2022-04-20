<?php

include 'conexao.php';
$id = $_POST['id'];


$recebendo_dados = "DELETE FROM contato WHERE id = '$id'";
$query_cadastro = mysqli_query($connx,$recebendo_dados);

header('location:listagem.php');    


?>
