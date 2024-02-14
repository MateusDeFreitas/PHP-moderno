<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 11</title>
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            height: 100vh;
        }
        .centro {
            text-align: center;
        }
        input[type=range] {
            padding: 12px 0px 12px 0px;
        }
    </style>
</head>
<body>
    <?php 
        $preco = $_GET['preco']??0;
        $porcentagem = $_GET['porcentagem']??0;
        $novo_preco = $preco*(1+$porcentagem/100);
    ?>
    <main>
        <h1 class="centro">Reajustador de preços</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <p>
                <label for="preco">Preço do produto (R$):</label>
                <input type="number" name="preco" id="id_preco" value="<?= $preco ?>">
            </p>
            <p>
                <label for="porcentagem">Qual será o percentual de reajuste?(<strong><output name="numerador" id="id_numerador"><?= $porcentagem ?></output>%</strong>)</label>

                <input type="range" name="porcentagem" id="id_porcentegem" min=0 max=100 value="<?= $porcentagem ?>" oninput="numerador.innerHTML = Number(porcentagem.value)">
            </p>
            <p> 
                <input type="submit" value="Reajustar">
            </p>
        </form>
    </main>
    <section id="resultado">
        <h2 class="centro">Resultado do reajuste</h2>
            <p>O produto que custava <?=number_format($preco,2,',','.')?>, com <strong><?=$porcentagem?>% de aumento</strong> vai passar a custar <strong>R$<?= number_format($novo_preco,2,',','.') ?></strong> a partir de agora.</p>
    </section>
</body>
</html> 