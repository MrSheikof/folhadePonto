<?php
include('header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar tabela</title>
</head>
<body>

<h2>Ano</h2>
<div style="display: flex; flex-direction: row; width: 20%; gap: 2px;">
<button>2024</button><button>2025</button><br>
</div>

<h2>Mês</h2>
<div style="display: flex; flex-direction: row; width: 20%; gap: 2px;">
<button>Janeiro</button><br>
<button>Fevereiro</button><br>
<button>Março</button><br>
<button>Abril</button><br>
</div>

<?php
/*
foreach ($month as $months){
    echo "<button>$months</button>";
} */ 


require_once "conexao.php"; // Inclui a conexão com o banco

$sqlTabela = "SELECT * FROM horarios";
$result = $conn->query($sqlTabela);

echo "<table border='1'>
    <thead class='table-header'>
        <tr>
            <th>Data</th>
            <th>Horas Previstas</th>
            <th>Entrada</th>
            <th>Saída</th>
            <th>Total</th>
            <th>Horas Extras</th>
        </tr>
    </thead>
    <tbody>";

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>" . date("d/m/Y", strtotime($row["data"])) . "</td>
            <td>" . $row["horasPrevistas"] . "</td>
            <td>" . $row["horaEntrada"] . "</td>
            <td>" . $row["horaSaida"] . "</td>
            <td>" . $row["totalHoras"] . "</td>
            <td>" . $row["horasExtras"] . "</td>
        </tr>";
    }
} else {
    echo "<tr><td colspan='6'>Nenhum registro encontrado</td></tr>";
}

echo "</tbody></table>";

$conn->close();
?>



</body>
</html>