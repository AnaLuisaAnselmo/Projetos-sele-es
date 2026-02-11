<!DOCTYPE html>
<html>
<head>
    <title>Jogos</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<h2>Cadastro de Jogos</h2>

<form method="POST" action="index.php?pagina=jogo&acao=inserir">
    <input type="number" name="mandante_id" placeholder="ID Mandante" required>
    <input type="number" name="visitante_id" placeholder="ID Visitante" required>
    <input type="datetime-local" name="data_jogo" required>
    <input type="text" name="estadio" placeholder="Estádio" required>
    <button type="submit">Cadastrar</button>
</form>

<h3>Lista de Jogos</h3>

<table border="1">
<tr>
    <th>ID</th>
    <th>Mandante</th>
    <th>Visitante</th>
    <th>Data</th>
    <th>Estádio</th>
</tr>

<?php foreach ($dados as $jogo): ?>
<tr>
    <td><?= $jogo['id'] ?></td>
    <td><?= $jogo['mandante_id'] ?></td>
    <td><?= $jogo['visitante_id'] ?></td>
    <td><?= $jogo['data_jogo'] ?></td>
    <td><?= $jogo['estadio'] ?></td>
</tr>
<?php endforeach; ?>

</table>

</body>
</html>
