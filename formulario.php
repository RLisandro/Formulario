<!DOCTYPE html>
<html lang="p-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css" media="screen" />
    <title>Formulário</title>
</head>
<body>

    <form action="resultado.php "  method="POST">
        <h1> Cursos Programação Web</h1>
        <label>
        Encontrar:  <input type="text"  name="busca" placeholder="  Digite o nome do curso">
        </label>
        <button type="submit" name="enviar"> Pesquisa </button>
    </form>

    <?php
    require_once 'resultado.php';
    ?>
</body>

</html>