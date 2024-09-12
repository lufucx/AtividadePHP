<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $descricao = htmlspecialchars($_POST['descricao']);
    $fabricante = htmlspecialchars($_POST['fabricante']);
    $qtd_inteiro = (int)$_POST['qtd_inteiro'];
    $preco_custo = (float)$_POST['preco_custo'];
    $preco_venda = (float)$_POST['preco_venda'];
    $imagem = htmlspecialchars($_POST['imagem']);

    $stmt = $pdo->prepare("INSERT INTO produtos (descricao, fabricante, qtd_inteiro, preco_custo, preco_venda, imagem) VALUES (:descricao, :fabricante, :qtd_inteiro, :preco_custo, :preco_venda, :imagem)");
    $stmt->bindParam(':descricao', $descricao);
    $stmt->bindParam(':fabricante', $fabricante);
    $stmt->bindParam(':qtd_inteiro', $qtd_inteiro);
    $stmt->bindParam(':preco_custo', $preco_custo);
    $stmt->bindParam(':preco_venda', $preco_venda);
    $stmt->bindParam(':imagem', $imagem);

    if ($stmt->execute()) {
        echo "Produto adicionado com sucesso!";
        header("location: index.php");

    } else {
        echo "Erro ao adicionar produto.";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Produto</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Adicionar Novo Produto</h1>
    <form method="POST" action="">
        <label for="descricao">Descrição:</label>
        <input type="text" id="descricao" name="descricao" required>
        <br>
        <label for="fabricante">Fabricante:</label>
        <input type="text" id="fabricante" name="fabricante" required>
        <br>
        <label for="qtd_inteiro">Quantidade:</label>
        <input type="number" id="qtd_inteiro" name="qtd_inteiro" required>
        <br>
        <label for="preco_custo">Preço de Custo:</label>
        <input type="number" step="0.01" id="preco_custo" name="preco_custo" required>
        <br>
        <label for="preco_venda">Preço de Venda:</label>
        <input type="number" step="0.01" id="preco_venda" name="preco_venda" required>
        <br>
        <label for="imagem">Imagem (URL):</label>
        <input type="text" id="imagem" name="imagem" required>
        <br>
        <button type="submit">Adicionar Produto</button>
    </form>
    <a href="index.php">Voltar para a Lista</a>
</body>
</html>
