<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 02</title>
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            height: 100vh;
            width: 100vw;
            margin: 0;
        }
        button {
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
        button:hover {
            color: white;
            border-bottom: none;
            background-color: rgb(47, 47, 138);
        }
    </style>
</head>
<body>
    <main>
    <h1>Trabalhando com números aleatórios</h1>
        <?php
            $numero = mt_rand(0,100);
            echo "<p>Gerando um número entre 0 e 100...</p>";
            echo "<p>O número sorteado foi <strong>$numero</strong></p>";
        ?>
        <p>
            <button onclick="javascript:location.reload()">⟳ Gerar outro número</button>
        </p>
    </main>
</body>
</html>