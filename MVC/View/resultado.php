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

</body>
</html>
