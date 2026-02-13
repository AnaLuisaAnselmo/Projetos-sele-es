<!DOCTYPE html>
<html>
<head>
    <title>Resultados</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<h2>Registrar Resultado</h2>

<form method="POST" action="index.php?pagina=resultado&acao=inserir">

    <input type="number" name="jogo_id" placeholder="ID do Jogo" required>

    <input type="number" name="gols_mandante" placeholder="Gols Mandante" required>

    <input type="number" name="gols_visitante" placeholder="Gols Visitante" required>

    <button type="submit">Registrar</button>
</form>

<h3>Lista de Resultados:</h3>

<table border="1">
<tr>
    <th>ID</th>
    <th>GM</th>
    <th>GV</th>
</tr>



<?php

foreach ($dados as $resultado): ?>
<tr>
    <td><?= $resultado['jogo_id'] ?></td>
    <td><?=$resultado['gols_mandante']?></td>
    <td><?=$resultado['gols_visitante']?></td>
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
