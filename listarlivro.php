<?php 

include("conexao.php");
$sql="select * from livro"
$result= mysqli_query ( $conexao, $sql);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 transitional//EN"
"https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="https;//www.w3.org/1999/xhtml">
    <head>
        <meta http-arquiv="Content-type" content="text/html ; charset=iso-8859-1"/>
        <title>Lista de Livro</title>
</head>
<body>
    <?php
    if(mysqli_fetch_array($sql)){
        $mysqli->close();

    }
    ?>
    <h1>funcionario</h1>
    <table with="500" borden="1" align="center">
        <tr>
        <th>ID</th>
            <th>Titulo</th>
            <th>Autor</th>
            <th>Editora</th>
            <th>Idioma</th>
            <th>Observaçao</th>
            <th>Genero</th>
            <th>Data</th>
        </tr>

</body>
<?php
while($l=mysqli_fetch_array($quary)){
    $Titulo =  $L["Titulo"];
    $Autor = $L["Autor"];
    $Editora = $L["Editora"];
    $Idioma = $L["Idioma"];
    $Observacao = $L["Observacao"];
    $Genero = $L["Genero"];
    $DataLivro = $L["DataLivro"];
echo"
<tr>
<td>$Titulo</td>
<td>$Autor</td>
<td>$Editora</td>
<td>$Idioma</td>
<td>$Observacao</td>
<td>$Genero</td>
<td>$DataLivro</td>

  <td><a href=\"editarcliente.php?id=$Id\">[Editar]</a> |
<a href=\"excluir.php?=$Id\">[Excluir]</a></td>
   </tr>\n";  
}
?>
</table>
</body>
</html>