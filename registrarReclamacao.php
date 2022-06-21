<?php
include 'db.php';

$observacao= $_POST['observacao'];
$descricao= $_POST['descricao'];
$nomeReclamante= $_POST['nomeSolicitante'];
$enderecoReclamante= $_POST['ruaSolicitante'];
$email= $_POST['email'];
$enderecoEvento= $_POST['enderecoEvento'];


$query = "INSERT INTO complaint (idComplaint, observacao, descricao, nomeReclamante,enderecoReclamante, enderecoEvento, email) 
VALUES (DEFAULT, '$observacao', '$descricao','$nomeReclamante', '$enderecoReclamante','$enderecoEvento', '$email')";
mysqli_query($conexao, $query);
header("location:index.php?pagina");
