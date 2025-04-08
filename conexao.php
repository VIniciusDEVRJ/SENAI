<?php
$servidor="localhost";//caminho do servidor de hospedagem
$bbvb = "root";// Nome de usuário do banco de dados nom ato da instalação do mesmo
$senha = "";// senha cadastrada no ato da instalação do banco de dados
$dbname = "Livraria";// nomr do banco de dados que foi criado.ex: create data base dados

//criar a conexão
$conn = mysqli_connect($servidor,$usuario,$senha,$dbname);

if(!$conn){
    die("Falha  na conexão: " . mysqli_connect_error()); 
}else{
    echo "conexão realizada com sucesso";
}
?>
