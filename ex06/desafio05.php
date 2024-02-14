<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 05</title>
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            height: 100vh;
            width: 100vw;
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
        <h1>Analisador de números reais</h1>
        <?php
            $numero_real = $_GET['nreal'];
            $parte_inteira = intdiv($numero_real, 1);
            $parte_fracional = $numero_real - $parte_inteira;
            echo "<p>Analisando o número <strong>".number_format($numero_real,3,",",".")."</strong></p>"
        ?>
        <ul>
            <li>
                <?php echo "<p>A parte inteira do número é <strong>".number_format($parte_inteira,3,",",".")."</strong></p>" ?>
            </li>
            <li>
                <?php echo "<p>A parte fracionária do número é <strong>".number_format($parte_fracional,3,",",".")."</strong></p>" ?>
            </li>
        </ul>
        <p>
            <a href="javascript:history.go(-1)">← Voltar</a>
        </p>
    </main>
</body>
</html>