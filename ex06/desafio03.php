<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 03</title>
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
        <h1>Resultado final</h1>
        <?php
            $reais = $_GET['reais'];
            $cotacao = 0.201;
            $cotacao_em_real = 1/$cotacao;
            $dolares = $reais*$cotacao;
            
            echo "<p>Seus R$".number_format($reais,2,",",".")." em dólares equivalem a <strong>U$".number_format($dolares,2,",",".")."</strong></p>";
            echo "<p>A cotação é de <strong>R$".number_format($cotacao_em_real,2,",",".")."</strong></p>";
        ?>
        <p>
            <a href="javascript:history.go(-1)">← Voltar</a>
        </p>
    </main>
</body>
</html>