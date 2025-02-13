<?php

include("conexao.php");

$nome         = $_POST["Nome"];
$sobrenome    = $_POST["Sobrenome"];
$nascimento   = $_POST["Data_nascimento"];
$rg           = $_POST["Rg"];
$cpf          = $_POST["Cpf"];
$endereco     = $_POST["Endereco"];
$estado       = $_POST["Estado"];
$email        = $_POST["Email"];
$telefone     = $_POST["Telefone"];
$celular      = $_POST["Celular"];
$bairro       = $_POST["Bairro"];
$rua          = $_POST["Rua"];
$numero       = $_POST["Numero"];
$complemento  = $_POST["Complemento"];
$id           = $_POST["id"];

$sql = "UPDATE funcionario 
        SET Nome = '$nome', 
            Sobrenome = '$sobrenome', 
            Data_nascimento = '$nascimento', 
            Rg = '$rg', 
            Cpf = '$cpf', 
            Endereco = '$endereco', 
            Estado = '$estado', 
            Email = '$email', 
            Telefone = '$telefone', 
            Celular = '$celular', 
            Bairro = '$bairro', 
            Rua = '$rua', 
            Numero = '$numero', 
            Complemento = '$complemento' 
        WHERE funcionario.id = '$id'";

$query = mysqli_query($conn, $sql);

header("Location: listarfunc.php");

?>
3