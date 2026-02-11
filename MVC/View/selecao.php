<!DOCTYPE html>
<html>
<head>
    <title>Seleções</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<h2>Cadastro de Seleções</h2>

<form method="POST" action="index.php?pagina=selecao&acao=inserir">
    <input type="text" name="nome" placeholder="Nome da Seleção" required>
    <input type="text" name="continente" placeholder="Continente" required>
    <input type="number" name="grupo_id" placeholder="ID do Grupo" required>
    <button type="submit">Cadastrar</button>
</form>

<h3>Lista de Seleções</h3>

<table style="border=1px">
<tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Continente</th>
    <th>Grupo</th>
</tr>

<?php foreach ($dados as $selecao): ?>
<tr>
    <td><?= $selecao['id'] ?></td>
    <td><?= $selecao['nome'] ?></td>
    <td><?= $selecao['continente'] ?></td>
    <td><?= $selecao['grupo_id'] ?></td>
</tr>
<?php endforeach; ?>

</table>

</body>
</html>
