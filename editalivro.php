<?php
 $Titulo =  $L["Titulo"];
 $Autor = $L["Autor"];
 $Editora = $L["Editora"];
 $Idioma = $L["Idioma"];
 $Observacao = $L["Observacao"];
 $Genero = $L["Genero"];
 $DataLivro = $L["DataLivro"];
settype($id, "integer");

$sql = "select * from livro where id = $id";
$query = mysqli_query($conn, $sql);
$dados = mysqli_fetch_array($query);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"  
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
<title>Atualizar Livro</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="salvar_edicao.php">
<input type="hidden" name="id" id="id" value="<?php echo $id; ?>" />
<h2 align="center"><strong>Edição de Cadastro de livro</strong></h2>
<table width="390" border="1" align="center">
    <tr>
        <td width="165">Título</td>
        <td width="209">
            <input name="titulo" type="text" id="titulo" value="<?php echo $dados['Titulo']; ?>" />
        </td>
    </tr>
    <tr>
        <td>Autor</td>
        <td>
            <input name="autor" type="text" id="autor" value="<?php echo $dados['Autor']; ?>" />
        </td>
    </tr>
    <tr>
        <td>Editora</td>
        <td>
            <input name="editora" type="text" id="editora" value="<?php echo $dados['Editora']; ?>" />
        </td>
    </tr>
    <tr>
        <td>Idioma</td>
        <td>
            <input name="idioma" type="text" id="idioma" value="<?php echo $dados['Idioma']; ?>" />
        </td>
    </tr>
    <tr>
        <td>Observação</td>
        <td>
            <input name="observacao" type="text" id="observacao" value="<?php echo $L['Observacao']; ?>" />
        </td>
    </tr>
    <tr>
        <td>Gênero</td>
        <td>
            <input name="genero" type="text" id="genero" value="<?php echo $dados['genero']; ?>" />
        </td>
    </tr>
    <tr>
        <td>Data do Livro</td>
        <td>
            <input name="datalivro" type="text" id="datalivro" value="<?php echo $dados['datalivro']; ?>" />
        </td>
    </tr>
<td>&nbsp;</td>
<td><input type="submit" value="gravar"
style="cursor:pointer"></td>
