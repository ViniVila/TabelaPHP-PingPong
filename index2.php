<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Jogadores</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
// 1. Conexão MySQL
$servername = "localhost";
$username = "root";
$password = "Senai@118";
$dbname = "formulario";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

// 2. Criar tabela se não existir
$sql = "CREATE TABLE IF NOT EXISTS Jogadores (
    id INT AUTO_INCREMENT PRIMARY KEY,
    jogador VARCHAR(255),
    ano_mundial INT
)";
$conn->query($sql);

// 3. Formulário sempre visível
echo '
<form method="POST">
    Jogador: <input type="text" name="modelo"><br>
    Ano que venceu o mundial: <input type="number" name="ano"><br><br>
    <input type="submit" value="Cadastrar">
</form><br>
';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jogador = $_POST["modelo"];
    $ano_mundial = $_POST["ano"];

    if ($jogador == "" || $ano_mundial == "" || $ano_mundial <= 0) {
        echo "Preencha os campos corretamente.<br><br>";
    } else {
        $sqlInsert = "INSERT INTO Jogadores (jogador, ano_mundial) VALUES ('$jogador', $ano_mundial)";
        if ($conn->query($sqlInsert) === TRUE) {
            header("Location: ".$_SERVER['PHP_SELF']); 
            exit();
        } else {
            echo "Erro ao inserir: " . $conn->error . "<br><br>";
        }
    }
}

echo "<h3>Jogadores cadastrados</h3>";

// 5. Mostrar tabela sem botão excluir
$sqlAll = "SELECT * FROM Jogadores";
$result = $conn->query($sqlAll);

if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr><th>ID</th><th>Jogador</th><th>Ano Mundial</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row["id"]."</td>
                <td>".$row["jogador"]."</td>
                <td>".$row["ano_mundial"]."</td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "Nenhum jogador cadastrado.<br>";
}

// 6. Contagem total
$sqlCount = "SELECT COUNT(*) AS total FROM Jogadores";
$resCount = $conn->query($sqlCount);
$linhaCount = $resCount->fetch_assoc();
echo "<br>Total de jogadores: " . $linhaCount['total'] . "<br>";

// 7. Fechar conexão
$conn->close();
?>

</body>
</html>
