<?php 
require_once "C:/Turma2/xampp/htdocs/Projetos-sele-es/Config/Database.php";
require_once "C:/Turma2/xampp/htdocs/Projetos-sele-es/MVC/Controller/JogoController.php";
 
$jogoController = new JogoController();

?>
<!DOCTYPE html>
<html>
<head>
    <title>Jogos</title>
    <link rel="stylesheet" href="css/jogo.css">
</head>
<body>

<h2>Cadastro de Jogos</h2>

<form id="formjogo" method="POST" action="index.php?pagina=jogo&acao=inserir">

    <input type="text" name="mandante" placeholder="ID Mandante" required>

    <input type="text" name="visitante" placeholder="ID Visitante" required>
    
    <input type="number" name="gols_mandante" placeholder="gols mandante" required>
    
    <input type="number" name="gols_visitante" placeholder="gols visitante" required>
    
    <input type="text" name="estadio" placeholder="Estádio" required>

    <input type="datetime-local" name="data_jogo" required>

    <input type="text" name="grupo" placeholder="Grupo">

    <button type="submit">Cadastrar</button>
</form>

<h3>Lista de Jogos</h3>

<table border="1">
<tr>
    <th>ID</th>
    <th>Mandante</th>
    <th>Visitante</th>
    <th>GM</th>
    <th>GV</th>
    <th>Estádio</th>
    <th>Data</th>
    <th>Grupo</th>
    <th>Ações</th>
</tr>

<?php foreach ($dados as $jogo): ?>
<tr>
    <td><?= $jogo['id'] ?></td>
    <td><?= $jogo['mandante'] ?></td>
    <td><?= $jogo['visitante'] ?></td>
    <td><?=$jogo['gols_mandante']?></td>
    <td><?=$jogo['gols_visitante']?></td>
    <td><?= $jogo['estadio'] ?></td>
    <td><?= $jogo['data_jogo'] ?></td>
    <td><?=$jogo['grupo']?></td>
    <td>
                <a href="index.php?pagina=jogo&acao=editar&id=<?= $jogo['id'] ?>">Editar</a>
                |
                <a href="index.php?pagina=jogo&acao=jogodeletar&id=<?= $jogo['id'] ?>" 
                   onclick="return confirm('Tem certeza que deseja excluir?')">
                   Excluir
                </a>
            </td>
    
</tr>
<?php endforeach; ?>

</table>

</body>
</html>
