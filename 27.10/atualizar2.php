<?php
$conn = new mysqli("localhost", "root", "senaisp", "loja");

$NOME_PRODUTO = $_POST['NOME'];
$ID = $_POST['ID'];
$PRECO = $_POST['PRECO'];

if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

$sql = "UPDATE produtos SET NOME='$NOME', PRECO='$PRECO' WHERE ID='$ID'";

if ($conn->query($sql) === TRUE) {
    echo "Dados atualizados com sucesso!";
} else {
    echo "Erro: " . $conn->error;
}

$conn->close();
?>