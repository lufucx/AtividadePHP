<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="">Contatos</a></li>
                <li><a href="">Sobre</a></li>
                <li><a href="">Login</a></li>

            </ul>
        </nav>
    </header>
    <main>
        <div id="imagem">
        <img src="https://codificar.com.br/wp-content/uploads/2024/02/php.jpg">
        </div>
        <div id="dados">
            <table>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                </tr>
                <?php
                include "conecta.php";
                $sql = "SELECT id, nome, email, senha FROM usuario";
                $resultado = mysqli_query($conexao, $sql);
                if (mysqli_num_rows($resultado) > 0) {
                    while($registro = mysqli_fetch_assoc($resultado)) {
                        echo "<tr>";
                        echo "<td>" . $registro["id"] . "</td>";
                        echo "<td>" . $registro["nome"] . "</td>";
                        echo "<td>" . $registro["email"] . "</td>";
                        echo "</tr>";
                    }
                }
            ?>
            </table>
        </div>
    </main>
</body>
</html>