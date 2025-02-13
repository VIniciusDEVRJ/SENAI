<?php
include("conexao.php");
$Cpf = $_POST["Cpf"];
$Nome = $_POST["Nome"];
$Sobrenome = $_POST["Sobrenome"];
$Telefone = $_POST["Telefone"];
$Celular = $_POST["Celular"];
$Rua= $_POST["Rua"];
$Numero = $_POST["Numero"];
$Data_Nascimento = $_POST["Data_Nascimento"];
$Complemento = $_POST["Complemento"];
$Cidade = $_POST["Cidade"];
$Bairro = $_POST["Bairro"];
$admicao= $_POST["adimicao"];
$Email = $_POST["Email"];

$result_cli = "INSERT INTO cliente(Nome, Email, Cpf, Sobrenome, Telefone, Celular,Rua,Numero,Data_Nascimento,Complemento,Cidade,Bairro,adimicao,)
               VALUES ('$Nome', '$Email', '$Cpf', '$Sobrenome', '$Telefone', '$Celular', '$Rua','$Numero',$Data_Nascimento',$Complemento',$Cidade',$Bairro',$adimicao')";
$resultado_cli = mysqli_query($conn, $result_cli);

if(mysqli_affected_rows($conn) != 0){
    echo "Funcionario cadastrado com sucesso";
}else{
    echo "Erro ao cadastrar";
}
?>