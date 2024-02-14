<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 01</title>
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;

            margin: 0;
        }
        a {
            display: block;
            background-color: darkblue;
            color: white;
            text-align: center;
            border-bottom: none;
            width: 100%;
            padding: 15px;
            font-weight: 500;
            border-radius: 15px;
        }
        a:hover {
            color: white;
            border-bottom: none;
            background-color: rgb(47, 47, 138);
        }
    </style>
</head>
<body>
    <main>
    <h1>Resultado final</h1>
        <?php
            $numero = $_GET['numero'];
            $sucessor = $numero + 1;
            $antecessor = $numero - 1;
            echo "<p>O número escolhido foi <strong>$numero</strong></p>";
            echo "<p>O seu antecessor é $antecessor</p>";
            echo "<p>O seu sucessor é $sucessor</p>";
        ?>
        <p>
            <a href="javascript:history.go(-1)">← Voltar</a>
        </p>
    </main>
</body>
</html>