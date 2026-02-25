<?php

require_once "C:/Turma2/xampp/htdocs/Projetos-sele-es/Config/Database.php";
require_once "C:/Turma2/xampp/htdocs/Projetos-sele-es/MVC/Controller/GrupoController.php";    

$UsuarioController = new GrupoController();
$id = $_GET["id"];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Grupos</title>
</head>
<body>
    
<form id="formresultado" method="POST" action="index.php?pagina=grupo&acao=editar&id=<?=$dados['id'];?>">

      <input type="text" name="nome" placeholder="Nome"  value="<?= $dados['nome']; ?>" required>
    
    <button type="submit">Registrar</button>
</form>

</body>
</html>