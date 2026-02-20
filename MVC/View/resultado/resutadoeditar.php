<?php

require_once "C:/Turma2/xampp/htdocs/Projeto-sele-es/DB/Database.php";
require_once "C:/Turma2/xampp/htdocs/Projeto-sele-es/Controller/ResultadoController.php";

$ResultadoController = new ResultadoController($pdo);

if(isset($_GET['id'])){

    $id = $_GET['id'];
    $resultado = $ResultadoController->buscarResultado($id);


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
</head>
<body>
    
<form id="formresultado" method="POST" action="index.php?pagina=resultado&acao=inserir">

    <input type="number" name="jogo_id" placeholder="ID do Jogo" required>

    <input type="number" name="gols_mandante" placeholder="Gols Mandante" required>

    <input type="number" name="gols_visitante" placeholder="Gols Visitante" required>

    <button type="submit">Registrar</button>
</form>

</body>
</html>

<?php

}else{
    header('Location: resultado.php');
}

if($_SERVER['REQUEST_METHOD']=='POST'){
    $jogo_id = $_POST['jogo_id'];
    $gols_mandante = $_POST['gols_mandante'];
    $gols_visitante = $_POST['gols_visitante'];

    $ResultadoController->editar($jogo_id, $gols_mandante, $gols_visitante);

    header('Location: ../../index.php');
}

?>