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
<a href="inicio.php"><label for="mainPage">Inicio</label></a><hr>


<h2>Ano</h2>
<button>2024</button><button>2025</button><br>

<h2>Mês</h2>
<button>Janeiro</button><br>
<button>Fevereiro</button><br>
<button>Março</button><br>
<button>Abril</button><br>

<table>
    <thead>
        <th>Data</th>
        <th>Nome</th>
        <th>Horas</th>
        <th>Motivo</th> 
        <th>Obs</th>
        <th>Autorizado por</th>
        <th>Ações</th>
    </thead>
    <tr>
        <td>17/02/2025</td>
        <td>Guilherme Ítalo</td>
        <td>1.5</td>
        <td>4</td>
        <td>Voo atrasou</td>
        <td>Roberta</td>
        <td><button style="color: white; background-color:blue;">Editar</button><button style="color: white; background-color:red;">Excluir</button></td>
    </tr>
</table>
    
</body>
</html>