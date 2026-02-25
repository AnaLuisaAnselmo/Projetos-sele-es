<?php 
require_once "C:/Turma2/xampp/htdocs/Projetos-sele-es/Config/Database.php";
require_once "C:/Turma2/xampp/htdocs/Projetos-sele-es/MVC/Controller/GrupoController.php";
 
$GrupoController = new GrupoController();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Grupos</title>
    <link rel="stylesheet" href="css/grupo.css">
</head>
<body>

<h2>Cadastro de Grupos</h2>

<form id="formgrupo" method="POST" action="index.php?pagina=grupo&acao=inserir">
    <input type="text" name="nome" placeholder="Nome do Grupo (A, B...)" required>
    <button type="submit">Cadastrar</button>
</form>

<h3>Lista de Grupos</h3>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Ações</th>
    </tr>

    <?php 

    foreach ($dados as $grupo): ?>
        <tr>
            <td><?= $grupo['id'] ?></td>
            <td><?= $grupo['nome'] ?></td>
            <td>
                <a href="index.php?pagina=grupo&acao=editar&id=<?= $grupo['id'] ?>">Editar</a>
                |
                <a href="index.php?pagina=grupo&acao=excluir&id=<?= $grupo['id'] ?>" 
                   onclick="return confirm('Tem certeza que deseja excluir?')">
                   Excluir
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

</body>
</html>
