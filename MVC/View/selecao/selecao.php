<?php 
require_once "C:/Turma2/xampp/htdocs/Projetos-sele-es/Config/Database.php";
require_once "C:/Turma2/xampp/htdocs/Projetos-sele-es/MVC/Controller/SelecaoController.php";
 
$SelecaoController = new SelecaoController();
?>


<!DOCTYPE html>
<html>
<head>
    <title>Seleções</title>
    <link rel="stylesheet" href="css/selecao.css">
</head>
<body>

<h2>Cadastro de Seleções</h2>

<form id="formselecao" method="POST" action="index.php?pagina=selecao&acao=inserir">

    <input type="text" name="nome" placeholder="Nome da Seleção" required>

    <input type="text" name="continente" placeholder="Continente" required>

    <input type="number" name="grupo_id" placeholder="ID do Grupo" required>
    
    <button type="submit">Cadastrar</button>
</form>

<h3>Lista de Seleções</h3>

<table border="1">
<tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Continente</th>
    <th>Grupo</th>
    <th>Ações</th>
</tr>

<?php foreach ($dados as $selecao): ?>
<tr>
    <td><?= $selecao['id'] ?></td>
    <td><?= $selecao['nome'] ?></td>
    <td><?= $selecao['continente'] ?></td>
    <td><?= $selecao['grupo_id'] ?></td>
    <td>
                <a href="index.php?pagina=selecao&acao=mostrareditar&id=<?= $selecao['id'] ?>">Editar</a>
                |
                <a href="index.php?pagina=grupo&acao=excluir&id=<?= $selecao['id'] ?>" 
                   onclick="return confirm('Tem certeza que deseja excluir?')">
                   Excluir
                </a>
            </td>
</tr>
<?php endforeach; ?>

</table>

</body>
</html>
