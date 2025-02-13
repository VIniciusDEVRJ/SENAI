<?php
include("conexao.php");
    $Nome = $L["Nome"];
    $Data_nascimento = $L["Data_nascimento"];
    $Rg = $L["Rg"];
    $Cpf = $L["Cpf"];
    $Endereco = $L["Endereco"];
    $Estado = $L["Estado"];
    $Email = $L["Email"];
    $Telefone = $L["Telefone"];
    $Celular = $L["Celular"];
    $Bairro = $L ["Bairro"];
    $Rua = $L ["Rua"];
    $Numero = $L ["Numero"];
    $Complemento = $L ["Complemento"];
    $Sobrenome = $L ["Sobrenome"];

settype($id, "integer");

$sql = "select * from cliente where id = $id";
$query = mysqli_query($conn, $sql);
$dados = mysqli_fetch_array($query);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
<title>Atualizar Cliente</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="salvar_edicao.php">
<input type="hidden" name="id" id="id" value="<?php echo $id; ?>" />
<h2 align="center"><strong>Edição de Cadastro de Cliente</strong></h2>
<table width="390" border="1" align="center">
    <tr>
        <td width="165">Titulo</td>
        <td width="209">
            <input name="nome" type="text" id="nome" value="<?php echo $L['Nome']; ?>" />
        </td>
    </tr>
    <tr>
        <td>Data de Nascimento</td>
        <td>
            <input name="data_nascimento" type="text" id="data_nascimento" value="<?php echo $L['Data_nascimento']; ?>" />
        </td>
    </tr>
    <tr>
        <td>RG</td>
        <td>
            <input name="rg" type="text" id="rg" value="<?php echo $dados['Rg']; ?>" />
        </td>
    </tr>
    <tr>
        <td>CPF</td>
        <td>
            <input name="cpf" type="text" id="cpf" value="<?php echo $dados['Cpf']; ?>" />
        </td>
    </tr>
    <tr>
        <td>Endereço</td>
        <td>
            <input name="endereco" type="text" id="endereco" value="<?php echo $dados['Endereco']; ?>" />
        </td>
    </tr>
    <tr>
        <td>Estado</td>
        <td>
            <input name="estado" type="text" id="estado" value="<?php echo $dados['Estado']; ?>" />
        </td>
    </tr>
    <tr>
        <td>Email</td>
        <td>
            <input name="email" type="text" id="email" value="<?php echo $dados['Email']; ?>" />
        </td>
    </tr>
    <tr>
        <td>Telefone</td>
        <td>
            <input name="telefone" type="text" id="telefone" value="<?php echo $dados['Telefone']; ?>" />
        </td>
    </tr>
    <tr>
        <td>Celular</td>
        <td>
            <input name="celular" type="text" id="celular" value="<?php echo $dados['Celular']; ?>" />
        </td>
    </tr>
    <tr>
        <td>Bairro</td>
        <td>
            <input name="bairro" type="text" id="bairro" value="<?php echo $dados['Bairro']; ?>" />
        </td>
    </tr>
    <tr>
        <td>Rua</td>
        <td>
            <input name="rua" type="text" id="rua" value="<?php echo $dados['Rua']; ?>" />
        </td>
    </tr>
    <tr>
        <td>Número</td>
        <td>
            <input name="numero" type="text" id="numero" value="<?php echo $dados['Numero']; ?>" />
        </td>
    </tr>
    <tr>
        <td>Complemento</td>
        <td>
            <input name="complemento" type="text" id="complemento" value="<?php echo $dados['Complemento']; ?>" />
        </td>
    </tr>
    <tr>
        <td>Sobrenome</td>
        <td>
            <input name="sobrenome" type="text" id="sobrenome" value="<?php echo $dados['Sobrenome']; ?>" />
        </td>
    </tr>
</table>
