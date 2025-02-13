<?php
include("conexao.php");
$nome = $_POST["nome"];
$sobrenome = $_POST["sobrenome"];
$data_nasc = $_POST["data"];
$cpf = $_POST["cpf"];
$email = $_POST["email"];
$celular= $_POST["celular"];
$telefone = $_POST["telefone"];
$cidade = $_POST["cidade"];
$bairro = $_POST["bairro"];
$complemento = $_POST["complemento"];
$numero = $_POST["numero_casa"];

$result_clin = "INSERT INTO cliente(nome, sobrenome, data_nasc, cpf, email, celular, telefone, cidade, bairro, complemento, numero)
VALUES ('$nome','$sobrenome','$data_nasc','$cpf', '$email', '$celular', '$telefone', '$cidade', '$bairro', '$complemento', '$numero')";
$result_clin = mysqli_query($conn, $result_clin)

if(mysqli_affected_rows($conn) != 0){
    echo "Cliente cadastardo com sucesso";
             }else{
                   echo "Erro ao cadastrar";
            }
?>