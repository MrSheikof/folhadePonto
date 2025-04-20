<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<div id="topnav" style="background-color: rgb(78, 162, 211);">
        <a href="inicio.php" style="background-color: rgb(33, 80, 107);"><label>Inicio</label></a><hr>
        <a href="horariosInserir.php"><label>Inserir</label></a><br>
        <a href="horariosVisualizar.php"><label>Visualizar</label></a><br>
        <a href="horariosAutorizar.php"><label>Autorizar</label></a><br>
        <a href="horariosEditar.php"><label>Editar/Excluir</label></a><br>
        <a href="cadastrarConta.php"><label for="" >Cadastrar</label></a><br>

    </div>
</div>

<style>
    .table-header{
        color: white;
        background-color: rgb(33, 80, 107);
    }
    #topnav {
        display: flex;
        flex-direction: row; 
    }

    #topnav a{
        color: white;
        padding: 4px;
        padding-right: 10px;
        padding-bottom: 0px;
        background-color: rgb(78, 162, 211);
    }

    #topnav a:hover{
        background-color: rgb(33, 80, 107);
    }

    .card {
        width: 500px;
        align-items: center;
        display: flex;
        flex-direction: column;
        margin: 20px auto;
        border: 1px solid #ccc;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .card-header {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        background-color: rgb(78, 162, 211);
        border-bottom: 1px solid #dee2e6;
        padding: 10px;
        font-size: 1.5rem;
        font-weight: bold;
        color: white;
    }

    .card-body {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        width: 100%;
        padding: 20px;
        background-color: #f9f9f9;
    }

    label {
        display: block;
        margin-bottom: 10px;
        font-weight: bold;
    }

    input[type="date"],
    button {
        width: 100%;
    }
    
    input[type="number"],
    button {
        width: 100%;
    }

    input[type="number"],
    input[type="date"],
    input[type='text'],
    button {
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 1rem;
    }

    input[type="checkbox"] {
        margin-right: 10px;
    }

    button {
        background-color: rgb(78, 162, 211);
        color: white;
        border: none;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    button:hover {
        background-color: rgb(60, 130, 170);
    }

    #resultadoHoras,
    #motivo {
        display: flex;
        flex-direction: row;
        margin-top: 15px;
        font-size: 1rem;
        font-weight: bold;
    }

    a {
        text-decoration: none;
        background-color: rgb(78, 162, 211);
        color: black;
        border: none;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }




</style>
