<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
        p {
            display: flex;
            justify-content: center;
        }
    </style>
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php
            //var_dump($_GET) // $_REQUEST = $_GET + $_POST + $_COOKIES
            $nome = $_GET["name"] ?? "sem nome";
            $sobre_nome = $_GET["surname"] ?? "desconhecido";
            echo "<p>Olá $nome $sobre_nome, é um prazer te conhecer!</p>";
        ?>
        <p>
            <a href="javascript:history.go(-1)">Voltar</a>
        </p>
    </main>
</body>
</html>