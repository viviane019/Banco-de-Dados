<?php
$conn = new mysqli("localhost", "root", "senaisp", "loja");

$Nome = $_GET['Nome'];
$result = $conn->query("SELECT * FROM lojas WHERE Nome = '$Nome'");
$row = $result->fetch_assoc();  
?>

<form action="atualizar.php" method="POST">
    <input type="hidden" name="nome" value="<?php echo $row['Nome']; ?>">
    
    Nome: <input type="text" name="Produtos" value="<?php echo $row['Produtos']; ?>"><br>
    ID: <input type="text" name="ID" value="<?php echo $row['ID']; ?>"><br>
    Preço: <input type="text" name="preco" value="<?php echo $row['preco']; ?>"><br>
    <input type="submit" value="Atualizar">
</form>
