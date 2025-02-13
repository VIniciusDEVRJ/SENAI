<?php
include("conexao.php");

$Titulo = $_POST["Titulo"];
$Autor = $_POST["Autor"];
$Editora = $_POST["Editora"];
$Idioma = $_POST["Idioma"];
$Observacao = $_POST["Observacao"];
$Genero = $_POST["Genero"];
$DataLivro = $_POST["DataLivro"];

$result_livro = "INSERT INTO livros (Titulo, Autor, Editora, Idioma, Observacao, Genero, DataLivro) 
                 VALUES ('$Titulo', '$Autor', '$Editora', '$Idioma', '$Observacao', '$Genero', '$DataLivro')";
$resultado_livro = mysqli_query($conn, $result_livro);

if(mysqli_affected_rows($conn) != 0){
    echo "Livro cadastrado com sucesso";
}else{
    echo "Erro ao cadastrar";
}
?>
