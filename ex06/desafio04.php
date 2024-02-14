<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 04</title>
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
            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");

            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            $dados = json_decode(file_get_contents($url),true);

            $reais = $_GET['reais'];
            $cotacao = $dados["value"][0]["cotacaoCompra"];
            $dolares = $reais/$cotacao;
            
            echo "<p>Seus R$".number_format($reais,2,",",".")." em dólares equivalem a <strong>U$".number_format($dolares,2,",",".")."</strong></p>";
            echo "<p>A cotação é de <strong>R$".number_format($cotacao,2,",",".")."</strong></p>";
        ?>
        <p>
            <a href="javascript:history.go(-1)">← Voltar</a>
        </p>
    </main>
</body>
</html>