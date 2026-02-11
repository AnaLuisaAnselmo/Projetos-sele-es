<!DOCTYPE html>
<html>
<head>
    <title>Grupos</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<h2>Cadastro de Grupos</h2>

<form method="POST" action="index.php?pagina=grupo&acao=inserir">
    <input type="text" name="nome" placeholder="Nome do Grupo (A, B...)" required>
    <button type="submit">Cadastrar</button>
</form>

<h3>Lista de Grupos</h3>

<table style="border=1px">
    <tr>
        <th>ID</th>
        <th>Nome</th>
    </tr>

    <?php foreach ($dados as $grupo): ?>
        <tr>
            <td><?= $grupo['id'] ?></td>
            <td><?= $grupo['nome'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>

</body>
</html>
