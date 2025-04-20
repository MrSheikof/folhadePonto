<?php
require_once "conexao.php"; // Inclui a conexão com o banco

define("ACTION_INSERT_HORAS", "inserthoras");
define("ACTION_UPDATE_HORAS", "updatehoras");
define("ACTION_DELETE_HORAS", "deletehoras");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = $_POST['data']; // Exemplo: "11/02/2025"
    $hora1 = $_POST["hora1"];
    $min1  = $_POST["min1"];
    $hora2 = $_POST["hora2"];
    $min2  = $_POST["min2"];

    // Formatar horas corretamente
    $horaEntrada = sprintf("%02d:%02d", $hora1, $min1);
    $horaSaida   = sprintf("%02d:%02d", $hora2, $min2);

    // Cálculo do total de horas trabalhadas
    $horaInicio = strtotime("$hora1:$min1");
    $horaFim    = strtotime("$hora2:$min2");

    if ($horaFim < $horaInicio) { // Se passou da meia-noite
        $horaFim += 86400; // Adiciona 24 horas (86400 segundos)
    }

    $totalSegundos      = $horaFim - $horaInicio;
    $horasTrabalhadas   = floor($totalSegundos / 3600);
    $minutosTrabalhados = ($totalSegundos % 3600) / 60;
    $totalHoras         = sprintf("%02d:%02d", $horasTrabalhadas, $minutosTrabalhados);

    // Calcular as horas extras
    $horasPrevistas = 4; // Hora padrão de trabalho
    $horasExtras = 0; // Inicializar horas extras

    // Se as horas trabalhadas forem maiores que o previsto, calcula as horas extras
    if ($horasTrabalhadas > $horasPrevistas) {
        $horasExtras = $horasTrabalhadas - $horasPrevistas;
    }

    // Converter data para o formato correto YYYY-MM-DD (americano)
    $dataFormatada = date('Y-m-d', strtotime($data)); // Exemplo: "2025-02-11"

    // Insere os dados no banco
    $sql = "INSERT INTO horarios(`data`, horasPrevistas, hora   Entrada, horaSaida, totalHoras, horasExtras) 
            VALUES ('$dataFormatada', '04:00', '$horaEntrada', '$horaSaida', '$totalHoras', '$horasExtras')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
                alert('Horário inserido com sucesso!');
                window.location.href = '" . $_SERVER['HTTP_REFERER'] . "';
            </script>";
    } else {
        echo "Erro ao inserir registro: " . $conn->error;
    }

    $conn->close(); // Fecha conexão
}
?>
