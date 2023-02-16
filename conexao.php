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
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>CRIAR</title>
</head>

<body>
    <main>
        <a href="index.html">Voltar</a>
        <h1>CRIAR</h1>
        <section>
            <form method="post">
                <label for="dia">DATA</label>
                <input name="dia" type="date">
                <label for="">NOME</label>
                <input name="nome" type="text">
                <label for="">PRODUTO</label>
                <input name="produto" type="text">
                <label for="">VALOR</label>
                <input name="valor" type="text">
                <label for="">QUANTIDADE</label>
                <input name="qtd" type="number">
                <label for="">VALOR TOTAL</label>
                <input name="valor_total" type="text">
                <label for="">STATUS</label>
                <select name="situacao" id="situacao">
                    <option value="vista">A vista</option>
                    <option value="parcela-duas">Parcelado 2 vezes</option>
                    <option value="parcela-tres">Parcelado 3 vezes</option>
                </select>
                <input type="submit" name="cadastrar">
            </form>
        </section>
    </main>
</body>

</html>