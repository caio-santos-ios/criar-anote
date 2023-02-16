<?php
$hostname = "localhost";
$usuario = "root";
$senha = "";
$bancodados = "controle-vendas";

$conexao = mysqli_connect($hostname, $usuario, $senha, $bancodados);

if (isset($_POST['cadastrar'])) {
    $dia = $_POST['dia'];
    $nome = $_POST['nome'];
    $produto = $_POST['produto'];
    $valor = $_POST['valor'];
    $quantidade = $_POST['qtd'];
    $valor_total = $_POST['valor_total'];
    $situacao = $_POST['situacao']; 

    $query = mysqli_query($conexao, "INSERT INTO criar(dia, nome, produto, valor, quantidade, valor_total, situacao) VALUES ('$dia', '$nome', '$produto', '$valor', '$quantidade', '$valor_total', '$situacao')");    
    header('Location: criar.html');
};
?>
