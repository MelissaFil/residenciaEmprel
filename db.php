<?php
$usuario = 'root';
$senha = '';
$db = 'testeEmprel';
$servidor = 'localhost';

$conexao = mysqli_connect($servidor, $usuario, $senha, $db);

#tabela Complaint

$query_complaint = "CREATE TABLE complaint (
    idComplaint int not null auto_increment,
    observacao varchar (400) not null,
    descricao varchar (100) not null,
    nomeReclamante varchar (100) not null,
    enderecoReclamante varchar (200) not null,
    enderecoEvento varchar (200) not null,
    email varchar (10) not null,
    telefoneReclamante varchar (10) ,
    idFoodComplaint int,
    idAnimalComplaint int,
    primary key (idComplaint)
)";
$executar = mysqli_query ($conexao, $query_complaint);

$query_FoodComplaint = "CREATE TABLE FoodComplaint (
    idFoodComplaint int not null auto_increment,
    qtdeComensais int not null,
    qtdeDoentes int not null,
    qtdeInternacoes int not null,
    qtdeObitos int not null,
    localAtendimento varchar (50) not null,
    refeicaoSuspeita varchar (50) not null,

    primary key (idFoodComplaint)
)";
$executar = mysqli_query ($conexao, $query_FoodComplaint);

$query_AnimalComplaint = "CREATE TABLE AnimaComplaint (
    idAnimalComplaint int not null auto_increment,
    nomeAnimal varchar (50) not null,
    ruaOcorrencia varchar (50) not null,
    complementOcorrencia varchar (50) not null,
    qtdeAnimal int not null,
    diaIncomodo date not null,
    primary key (idAnimalComplaint)
)";
$executar = mysqli_query ($conexao, $query_AnimalComplaint);

#query de consultas
$query_complaint = 'SELECT * FROM complaint';


#Consultas
$consulta_complaint = mysqli_query($conexao, $query_complaint);


