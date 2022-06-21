<?php
include 'db.php';

$observacao= $_POST['observacao'];
$descricao= $_POST['descricao'];
$nomeReclamante= $_POST['nomeSolicitante'];
$enderecoReclamante= $_POST['ruaSolicitante'];
$email= $_POST['email'];
$enderecoEvento= $_POST['enderecoEvento'];
$tipoProblema = $_POST['tiposelect'];

#Se o problema for do tipo FOOD

if($tipoProblema == 1){
$qtdeComensais= $_POST['qtdeComensais'];
$qtdeDoentes= $_POST['qtdeDoentes'];
$qtdeInternacoes= $_POST['qtdeInternacoes'];
$qtdeObitos= $_POST['qtdeObitos'];
$localAtendimento= $_POST['localAtendimento'];
$refeicaoSuspeita= $_POST['refeicaoSuspeita'];

$query = "INSERT INTO foodcomplaint (idFoodComplaint, qtdeComensais, qtdeDoentes, qtdeInternacoes,qtdeObitos, localAtendimento, refeicaoSuspeita) 
VALUES (DEFAULT, '$qtdeComensais','$qtdeDoentes', '$qtdeInternacoes','$qtdeObitos', '$localAtendimento', '$refeicaoSuspeita')";

mysqli_query($conexao, $query);


}

$query = "INSERT INTO complaint (idComplaint, observacao, descricao, nomeReclamante,enderecoReclamante, enderecoEvento, email) 
VALUES (DEFAULT, '$observacao', '$descricao','$nomeReclamante', '$enderecoReclamante','$enderecoEvento', '$email')";


mysqli_query($conexao, $query);
header("location:index.php?pagina");
