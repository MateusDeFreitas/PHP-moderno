<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 9</title>
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
        }
        main {
            width: 80vw;
            max-width: 600px;
            margin-top: 30px;
        }
        .centro {
            text-align: center;
        }
    </style>
</head>
<body>
    <?php 
        $valor1 = $_GET['valor1']??0;
        $valor2 = $_GET['valor2']??0;
        $peso1 = $_GET['peso1']??1;
        $peso2 = $_GET['peso2']??1;
        $media = ($valor1+$valor2)/2;
        $media_ponderada = ($valor1*$peso1+$valor2*$peso2)/($peso1+$peso2);
    ?>
    <main>
        <h2 class="centro">Médias aritiméticas</h2>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <p>
                <label for="valor1">1° Valor:</label>
                <input type="number" name="valor1" id="id_valor1" value="<?php echo $valor1 ?>">
            </p>
            <p>
                <label for="peso1">1° Peso:</label>
                <input type="number" name="peso1" id="id_peso1" value="<?php echo $peso1 ?>">
            </p>
            <p>
                <label for="valor2">2° Valor:</label>
                <input type="number" name="valor2" id="id_valor2" value="<?php echo $valor2 ?>">
            </p>
            <p>
                <label for="peso2">2° Peso:</label>
                <input type="number" name="peso2" id="id_peso2" value="<?php echo $peso2 ?>">
            </p>
            <p> 
                <input type="submit" value="Calcular médias">
            </p>
        </form>
    </main>
    <section id="resultado">
        <h2 class="centro">Calculo das médias</h2>
        <p>Analisando os valores <?= "$valor1 e $valor2" ?></p>
        <ul>
            <li>A <strong>Média aritimética simples</strong> entre os valores é igual a <?= number_format($media,2,",",".") ?></li>
            <li>A <strong>Média aritimética ponderada</strong> com peso <?= "$peso1 e $peso2" ?> é igual a <?= number_format($media_ponderada,2,",",".") ?></li>
        </ul>
    </section>
</body>
</html> 