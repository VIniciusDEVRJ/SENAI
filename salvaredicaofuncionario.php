<?php

include("conexao.php");

$Cpf = $_POST["Cpf"];
$Nome = $_POST["Nome"];
$Sobrenome = $_POST["Sobrenome"];
$Telefone = $_POST["Telefone"];
$Celular = $_POST["Celular"];
$Rua = $_POST["Rua"];
$Numero = $_POST["Numero"];
$Data_Nascimento = $_POST["Data_Nascimento"];
$Complemento = $_POST["Complemento"];
$Cidade = $_POST["Cidade"];
$Bairro = $_POST["Bairro"];
$admicao = $_POST["adimicao"];
$Email = $_POST["Email"];
$id = $_POST["id"];

$sql = "UPDATE funcionario 
        SET Cpf = '$Cpf', 
            Nome = '$Nome', 
            Sobrenome = '$Sobrenome', 
            Telefone = '$Telefone', 
            Celular = '$Celular', 
            Rua = '$Rua', 
            Numero = '$Numero', 
            Data_Nascimento = '$Data_Nascimento', 
            Complemento = '$Complemento', 
            Cidade = '$Cidade', 
            Bairro = '$Bairro', 
            admicao = '$admicao', 
            Email = '$Email' 
        WHERE funcionario.id = '$id'";

$query = mysqli_query($conn, $sql);

header("Location: listarfunc.php");

?>
