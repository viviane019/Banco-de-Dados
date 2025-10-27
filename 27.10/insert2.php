<?php
$NOME = $_POST['nome'];
$ID = $_POST['id'];
$IDPRECO = $_POST['preco'];


$conn = new mysqli("localhost", "root", "senaisp", "livraria");

if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

$sql = "INSERT INTO Autores (Cod_autor, Nome, Nacionalidade, Data_Nascimento) VALUES ('$ID', '$NOME','$PRECO')";
if ($conn->query($sql) === TRUE) {
    echo "Dados salvos com sucesso!";
} else {
    echo "Erro" . $conn->error;
}
header("Location: index.html");
exit;
$conn->close();
?>
