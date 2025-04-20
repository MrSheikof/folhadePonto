<?php
include('header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="card">
  <div class="card-header" style="width: 800px;">
    <h2>Pendentes</h2>
  </div>
  <div class="card-body" style="width: 800px;">
    <table>
    <thead>
        <th>Data</th>
        <th>Nome</th>
        <th>Horas</th>
        <th>Motivo</th> 
        <th>Obs:</th>
        <th>Autorizar</th>
    </thead>
    <tr><td>17/02/2025</td><td>Guilherme Ítalo</td><td>1.5</td><td>4</td><td>Voo atrasou</td><td style="display: flex; flex-direction: row;"><button class="btn btn-success">Sim</button><button class="btn btn-danger">Não</button></td></tr>
    <tr><td>17/02/2025</td><td>Fernando</td><td>1.0</td><td>3</td><td>Mala extraviada</td><td style="display: flex; flex-direction: row;"><button class="btn btn-success">Sim</button><button class="btn btn-danger">Não</button></td></tr>
    <tr><td>17/02/2025</td><td>Luis</td><td>2.0</td><td>5</td><td>Cliente aguardou muito</td><td style="display: flex; flex-direction: row;"><button class="btn btn-success">Sim</button><button class="btn btn-danger">Não</button></td></tr>
    <tr><td>17/02/2025</td><td>Lidiane</td><td>0.5</td><td>2</td><td>Erro no check-in</td><td style="display: flex; flex-direction: row;"><button class="btn btn-success">Sim</button><button class="btn btn-danger">Não</button></td></tr>
    <tr><td>17/02/2025</td><td>Fernanda</td><td>1.2</td><td>4</td><td>Problema com bilhete</td><td style="display: flex; flex-direction: row;"><button class="btn btn-success">Sim</button><button class="btn btn-danger">Não</button></td></tr>
    <tr><td>17/02/2025</td><td>Monica</td><td>1.8</td><td>5</td><td>Bagagem danificada</td><td style="display: flex; flex-direction: row;"><button class="btn btn-success">Sim</button><button class="btn btn-danger">Não</button></td></tr>
    <tr><td>17/02/2025</td><td>Fernando</td><td>1.4</td><td>3</td><td>Cliente alterou destino</td><td style="display: flex; flex-direction: row;"><button class="btn btn-success">Sim</button><button class="btn btn-danger">Não</button></td></tr>
    <tr><td>17/02/2025</td><td>Luis</td><td>2.1</td><td>5</td><td>Assento trocado</td><td style="display: flex; flex-direction: row;"><button class="btn btn-success">Sim</button><button class="btn btn-danger">Não</button></td></tr>
    <tr><td>17/02/2025</td><td>Lidiane</td><td>0.7</td><td>1</td><td>Confusão no embarque</td><td style="display: flex; flex-direction: row;"><button class="btn btn-success">Sim</button><button class="btn btn-danger">Não</button></td></tr>
    <tr><td>17/02/2025</td><td>Fernanda</td><td>1.3</td><td>4</td><td>Passageiro não localizado</td><td style="display: flex; flex-direction: row;"><button class="btn btn-success">Sim</button><button class="btn btn-danger">Não</button></td></tr>
    <tr><td>17/02/2025</td><td>Monica</td><td>0.9</td><td>2</td><td>Check-in fora do horário</td><td style="display: flex; flex-direction: row;"><button class="btn btn-success">Sim</button><button class="btn btn-danger">Não</button></td></tr>
    <tr><td>17/02/2025</td><td>Fernando</td><td>1.6</td><td>5</td><td>Fila extensa</td><td style="display: flex; flex-direction: row;"><button class="btn btn-success">Sim</button><button class="btn btn-danger">Não</button></td></tr>
    <tr><td>17/02/2025</td><td>Luis</td><td>1.1</td><td>3</td><td>Sistema fora do ar</td><td style="display: flex; flex-direction: row;"><button class="btn btn-success">Sim</button><button class="btn btn-danger">Não</button></td></tr>
    <tr><td>17/02/2025</td><td>Lidiane</td><td>1.0</td><td>4</td><td>Cliente nervoso</td><td style="display: flex; flex-direction: row;"><button class="btn btn-success">Sim</button><button class="btn btn-danger">Não</button></td></tr>
    <tr><td>17/02/2025</td><td>Fernanda</td><td>0.8</td><td>2</td><td>Bagagem com etiqueta errada</td><td style="display: flex; flex-direction: row;"><button class="btn btn-success">Sim</button><button class="btn btn-danger">Não</button></td></tr>
    <tr><td>17/02/2025</td><td>Monica</td><td>2.0</td><td>5</td><td>Cliente VIP insatisfeito</td><td style="display: flex; flex-direction: row;"><button class="btn btn-success">Sim</button><button class="btn btn-danger">Não</button></td></tr>

    </table>
  </div>
</div>
<hr>
<div class="card">
  <div class="card-header">
    <h2>Autorizados</h2>
  </div>
  <div class="card-body">
<table>

<thead><th>Data</th><th>Nome</th><th>Horas</th><th>Motivo</th><th>Obs</th><th>Autorizado por</th></thead>
<tr><td>17/02/2025</td><td>Guilherme Ítalo</td><td>1.5</td><td>4</td><td>Voo atrasou</td><td>Roberta</button></td></tr>

</table>
    </div>
</div>

</body>
</html>