<?php

include("conexao.php");

$autor = $_POST["autor"];
$titulo = $_POST["titulo"];
$editora = $_POST["editora"];
$genero = $_POST["genero"];
$observacao = $_POST["observacao"];
$data_livro = $_POST["data_livro"];
$idioma = $_POST["idioma"];
$id = $_POST["id"];

$sql = "UPDATE funcionario 
        SET autor = '$autor', 
            titulo = '$titulo', 
            editora = '$editora', 
            genero = '$genero', 
            observacao = '$observacao', 
            data_livro = '$data_livro', 
            idioma = '$idioma' 
        WHERE funcionario.id = '$id'";

$query = mysqli_query($conn, $sql);

header("Location: listar funcionario.php");
?>
