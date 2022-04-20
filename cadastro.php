<?php

include 'conexao.php';
$id = $_POST['id'];
$nome = $_POST['nome'];
$ddi = $_POST['ddi'];
$ddd = $_POST['ddd'];
$numero = $_POST['numero'];
$recebendo_dados = "INSERT INTO contato VALUES('','$nome','$ddi','$ddd','$numero')";
$query_cadastro = mysqli_query($connx,$recebendo_dados);

header('location:listagem.php');    




?>
