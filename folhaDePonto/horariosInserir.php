<?php
include('header.php');
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Folha de Ponto</title>
    <script>
        function calcularHoras() {
            let hora1 = parseInt(document.getElementById("hora1").value) || 0;
            let min1 = parseInt(document.getElementById("min1").value) || 0;
            let hora2 = parseInt(document.getElementById("hora2").value) || 0;
            let min2 = parseInt(document.getElementById("min2").value) || 0;
            let botaoDiaSeguinte = document.getElementById("botaoDiaSeguinte").checked;

            let horaTrabalhada = hora2 - hora1;
            let minTrabalhado = min2 - min1;

            if (botaoDiaSeguinte) {
                if (hora2 < hora1 || (hora2 === hora1 && min2 < min1)) {
                    horaTrabalhada += 24;
                }
            }

            if (minTrabalhado < 0) {
                minTrabalhado += 60;
                horaTrabalhada -= 1;
            }

            if (horaTrabalhada < 0) {
                horaTrabalhada = 0;
                minTrabalhado = 0;
            }

            document.getElementById("resultadoHoras").textContent = `${horaTrabalhada} horas e ${minTrabalhado} minutos`;
        }

        function selecionarMotivo() {
            calcularHoras(); // Ensure hours are calculated before selecting a reason
            let hora1 = parseInt(document.getElementById("hora1").value) || 0;
            let min1 = parseInt(document.getElementById("min1").value) || 0;
            let hora2 = parseInt(document.getElementById("hora2").value) || 0;
            let min2 = parseInt(document.getElementById("min2").value) || 0;
            let botaoDiaSeguinte = document.getElementById("botaoDiaSeguinte").checked;

            let horaTrabalhada = hora2 - hora1;
            let minTrabalhado = min2 - min1;

            if (botaoDiaSeguinte) {
                if (hora2 < hora1 || (hora2 === hora1 && min2 < min1)) {
                    horaTrabalhada += 24;
                }
            }

            if (minTrabalhado < 0) {
                minTrabalhado += 60;
                horaTrabalhada -= 1;
            }

            if (horaTrabalhada > 4) {
                document.getElementById("motivo").innerHTML = `
                Motivo hora extra:<br>
                    <button><input type="radio" id="1" value="outros" name="motivo">1</button>
                    <button><input type="radio" id="2" value="atrasoVoo" name="motivo">2</button>
                    <button><input type="radio" id="3" value="formacao" name="motivo">3</button>
                    <button><input type="radio" id="4" value="outros" name="motivo">4</button>
                    <button><input type="radio" id="5" value="reuniao" name="motivo">5</button>
                    <button><input type="radio" id="6" value="ll" name="motivo">6</button>
                `;
            } else {
                document.getElementById("motivo").innerHTML = "";
            }
        }
    </script>
</head>
<body>

<div class="card">
    <div class="card-header">
        <h2>Registro de Ponto</h2>
    </div>
    <div class="card-body">
        <form action="CRUDfolha.php" method="POST">
            <label>Data:</label>
            <input type="date" name="data" required>
            
            <label>Entrada:</label>

        <div style="display: flex; flex-direction: row; gap: 2px;">    <input type="number" name="hora1" id="hora1" min="0" max="23" placeholder="hora" required>
            <input type="number" name="min1" id="min1" min="0" max="59" placeholder="minuto" required></div>
        
            <label>Saída:</label>
        <div style="display: flex; flex-direction: row; gap: 2px;">    <input type="number" name="hora2" id="hora2" min="0" max="23" placeholder="hora" required>
            <input type="number" name="min2" id="min2" min="0" max="59" placeholder="minuto" required></div>

            <label>
                <input type="checkbox" id="botaoDiaSeguinte"> Trabalhou até o dia seguinte?
            </label>

            <button type="button" onclick="calcularHoras(); selecionarMotivo()">Calcular Horas</button>
            <button class="btn btn-success" type="submit">Enviar</button>

            <p id="resultadoHoras"></p>
            <p id="motivo"></p>
        </form>
    </div>
</div>
</body>
</html>
