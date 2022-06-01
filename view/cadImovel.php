<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro Imóvel</title>
</head>
<body>
<form name="cadUsuario" id="cadUsuario" action="" method="post">
            Descrição: <input type="text" name="descricao" id="descricao"><br/>
            Foto:<input type="url" name="foto" id="foto"><br />
            Valor: <input type="text" name="valor" id="valor"><br/>
            Tipo: <input type="text" name="tipo" id="tipo"><br/>
            <select name="permissao" id="permissao">
            <option value="R">Residencial</option>
            <option value="C">Comercial</option>
            </select><br/><br/>
            <input type="submit" name="btnSalvar" id="btnSalvar">
        </form>
</body>

<?php
if (isset($_POST['btnSalvar'])) {
    require_once '../controller/ImovelController.php';
   
    call_user_func(array('ImovelController', 'salvar'));
    header("Location: cadImovel.php?Cadastrado");
}
?>


</html>