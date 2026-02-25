<?php

require_once "C:/Turma2/xampp/htdocs/Projetos-sele-es/Config/Database.php";
require_once "C:/Turma2/xampp/htdocs/Projetos-sele-es/MVC/Controller/SelecaoController.php";    

$UsuarioController = new SelecaoController();
$id = $_GET["id"];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Seleção</title>
</head>
<body>
    
<form id="formresultado" method="POST" action="index.php?pagina=selecao&acao=editar&id=<?=$dados['id'];?>">

      <input type="text" name="nome" placeholder="Nome"  value="<?= $dados['nome']; ?>" required>

    <input type="text" name="continente" placeholder="Continente"  value="<?= $dados['continente']; ?>" required>

    <input type="number" name="grupo_id" placeholder="Grupo"  value="<?= $dados['grupo_id']; ?>" required>
    
    <button type="submit">Registrar</button>
</form>

</body>
</html>