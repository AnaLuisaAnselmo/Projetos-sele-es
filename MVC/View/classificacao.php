<!DOCTYPE html>
<html>
<head>
    <title>Classificação</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<h2>Classificação</h2>

<table border="1">
<tr>
    <th>Seleção</th>
    <th>Grupo</th>
    <th>Pontos</th>
    <th>Vitórias</th>
    <th>Empates</th>
    <th>Derrotas</th>
    <th>GM</th>
    <th>GS</th>
    <th>Saldo</th>
</tr>

<?php foreach ($dados as $c): ?>
<tr>
    <td><?= $c['nome'] ?></td>
    <td><?= $c['grupo_id'] ?></td>
    <td><?= $c['pontos'] ?></td>
    <td><?= $c['vitorias'] ?></td>
    <td><?= $c['empates'] ?></td>
    <td><?= $c['derrotas'] ?></td>
    <td><?= $c['gols_marcados'] ?></td>
    <td><?= $c['gols_sofridos'] ?></td>
    <td><?= $c['saldo_gols'] ?></td>
</tr>
<?php endforeach; ?>

</table>

</body>
</html>


