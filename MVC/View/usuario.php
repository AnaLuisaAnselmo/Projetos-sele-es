<!DOCTYPE html>
<html>
<head>
    <title>Usuários</title>
    <link rel="stylesheet" href="css/usuario.css">
</head>
<body>

<h2>Cadastro de Usuários</h2>

<form id="formusuario" method="POST" action="index.php?pagina=usuario&acao=inserir">
    <input type="text" name="nome" placeholder="Nome" required>
    <input type="number" name="idade" placeholder="Idade" required>
    <input type="text" name="cargo" placeholder="Cargo" required>
    <input type="number" name="selecao_id" placeholder="ID da Seleção" required>
    <button type="submit">Cadastrar</button>
</form>

<h3>Lista de Usuários</h3>

<table border="1">
<tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Idade</th>
    <th>Cargo</th>
    <th>Seleção</th>
    <th>Ações</th>
</tr>

<?php foreach ($dados as $usuario): ?>
<tr>
    <td><?= $usuario['id'] ?></td>
    <td><?= $usuario['nome'] ?></td>
    <td><?= $usuario['idade'] ?></td>
    <td><?= $usuario['cargo'] ?></td>
    <td><?= $usuario['selecao_id'] ?></td>
    <td>
                <a href="index.php?pagina=grupo&acao=editar&id=<?= $linha['id'] ?>">Editar</a>
                |
                <a href="index.php?pagina=grupo&acao=excluir&id=<?= $linha['id'] ?>" 
                   onclick="return confirm('Tem certeza que deseja excluir?')">
                   Excluir
                </a>
            </td>
</tr>
<?php endforeach; ?>

</table>

</body>
</html>
