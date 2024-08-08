<?php
include 'db.php';

// Processar filtro
$filter = '';
if (isset($_GET['search'])) {
    $search = htmlspecialchars($_GET['search']);
    $filter = "WHERE descricao LIKE :search";
}

$query = "SELECT * FROM produtos $filter";
$stmt = $pdo->prepare($query);

if ($filter) {
    $stmt->bindValue(':search', "%$search%");
}

$stmt->execute();
$produtos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Lista de Produtos</h1>
    <form method="GET" action="">
        <input type="text" name="search" placeholder="Pesquisar produtos" value="<?php echo htmlspecialchars($search ?? ''); ?>">
        <button type="submit">Buscar</button>
    </form>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Descrição</th>
                <th>Fabricante</th>
                <th>Quantidade</th>
                <th>Preço de Custo</th>
                <th>Preço de Venda</th>
                <th>Imagem</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($produtos as $produto): ?>
            <tr>
                <td><?php echo htmlspecialchars($produto['id']); ?></td>
                <td><?php echo htmlspecialchars($produto['descricao']); ?></td>
                <td><?php echo htmlspecialchars($produto['fabricante']); ?></td>
                <td><?php echo htmlspecialchars($produto['qtd_inteiro']); ?></td>
                <td><?php echo htmlspecialchars($produto['preco_custo']); ?></td>
                <td><?php echo htmlspecialchars($produto['preco_venda']); ?></td>
                <td><img src="<?php echo htmlspecialchars($produto['imagem']); ?>" alt="<?php echo htmlspecialchars($produto['descricao']); ?>" width="100"></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="add_product.php">Adicionar Novo Produto</a>
</body>
</html>
