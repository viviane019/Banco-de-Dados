<?php 
$conn  = new mysqli("localhost", "root", "senaisp", "livraria");
$result = $conn->query("SELECT * FROM Loja"); 

echo "<h2>Lojas</h2>";
echo "<table border='1'>";
echo "<tr><th>ID</th><th>Título</th><th>Autor</th><th>Preço</th><th>Ações</th></tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>" . $row['nome'] . "</td>
            <td>" . $row['id'] . "</td>
            <td>" . $row['Preco'] . "</td>
            <td>
                <a href='editar.php?id=" . $row['id'] . "'>Editar</a> | 
                <a href='deletar.php?id=" . $row['id'] . "' onclick=\"return confirm('Tem certeza que deseja deletar esta loja?');\">Deletar</a>
            </td>
          </tr>";
}

echo "</table>";
$conn->close();
?>

<a href="index.html">Página Inicial</a>