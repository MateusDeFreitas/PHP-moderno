<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 10</title>
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
    </style>
</head>
<body>
    <?php 
        $ano_atual = date('Y');
        $ano = $_GET['ano']??2005;
        $ano_alvo = $_GET['ano_alvo']??$ano_atual;
        $idade = $ano_alvo-$ano;
    ?>
    <main>
        <h1 class="centro">Calculando sua idade</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <p>
                <label for="ano">Em que ano você nasceu?</label>
                <input type="number" name="ano" id="id_ano" value="<?= $ano ?>">
            </p>
            <p>
                <label for="ano_alvo">Quer saber a sua idade em que ano<?= " (Estamos em $ano_atual)" ?></label>
                <input type="number" name="ano_alvo" id="id_ano_alvo" value="<?php echo $ano_atual ?>">
            </p>
            <p> 
                <input type="submit" value="Qual será a minha idade?">
            </p>
        </form>
    </main>
    <section id="resultado">
        <h2 class="centro">Resultado final</h2>
        <?php 
            echo "<p class='centro'>Quem nasceu em $ano vai ter <strong>$idade anos</strong> em $ano_alvo</p>";
        ?>
    </section>
</body>
</html> 