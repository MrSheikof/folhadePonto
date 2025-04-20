<?php
include('header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar conta</title>
</head>

<body>

<div class="card">
<label for="nameComplete">Nome completo: </label><br><input type="text" id="nameComplete" name="nameComplete" value=""><br>
<label for="dateBirthday">Data de nascimento: </label><br><input type="date" id="dateBirthday" name="dateBirthday" value=""><br>
<label for="email">E-mail: </label><br><input type="text" id="email" name="email" value=""><br>
<label for="personalCompanyId">Matrícula: </label><br><input type="text" id="personalCompanyId" name="personalCompanyId" value=""><br>
<label for="passwordPersonal">Senha: </label><br><input type="password" id="passwordPersonal" name="passwordPersonal" value=""><br>
<label for="passwordPersonal">Repita a senha: </label><br><input type="password" id="passwordPersonal" name="passwordPersonal" value=""><br>
<button>Cadastrar</button>
</div>




</body>
</html>