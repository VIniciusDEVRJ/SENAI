<?php 

include("conexao.php");
$sql="select * from cliente"
$result= mysqli_query ( $conexao, $sql);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 transitional//EN"
"https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="https;//www.w3.org/1999/xhtml">
    <head>
        <meta http-arquiv="Content-type" content="text/html ; charset=iso-8859-1"/>
        <title>Lista de Clientes</title>
</head>
<body>
    <?php
    if(mysqli_fetch_array($sql)){
        $mysqli->close();

    }
    ?>
    <h1>Clientes</h1>
    <table with="500" borden="1" align="center">
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>NASCIMENTO</th>
            <th>RG</th>
            <th>CPF</th>
            <th>ENDEREÇO</th>
            <th>ESTADO</th>
            <th>EMAIL</th>
            <th>TELEFONE</th>
            <th>EDITAR/EXCLUIR</th>
            <th>COMPLEMENTO</th> 
            <th>BAIRRO</th>
            <th>SOBRENOME</th>
            <th>CELULAR</th>
            <th>NUMERO</th>
            <th>CIDADE</th>
        </tr>

</body>
<?php
while($l=mysqli_fetch_array($quary)){
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

echo"
<tr>
<td>$Id</td>
<td>$Nome</td>
<td>$Data_nasc</td>
<td>$Rg</td>
<td>$Cpf</td>
<td>$endereco</td>
<td>$Estado</td>
<td>$Email</td>
<td>$Telefone</td>
<td>$Cidade</td>
<td>$Complemento</td>
<td>$Sobrenome</td>
<td>$Celular</td>
<td>$Numero</td>
<td>$Bairro</td>

  <td><a href=\"editarcliente.php?id=$Id\">[Editar]</a> |
<a href=\"excluir.php?=$Id\">[Excluir]</a></td>
   </tr>\n";  
}
?>
</table>
</body>
</html>