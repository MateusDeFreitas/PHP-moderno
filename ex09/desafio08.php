<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 8</title>
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
        $valor1 = $_GET['valor1']??0;
    ?>
    <main>
        <h1 class="centro">Informe um número</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <p>
                <label for="valor1">Número:</label>
                <input type="number" name="valor1" id="id_valor1" value="<?php echo $valor1 ?>">
            </p>
            <p> 
                <input type="submit" value="Calcular raizes">
            </p>
        </form>
    </main>
    <section id="resultado">
        <h2 class="centro">Resultado final</h2>
        <?php 
            $raiz2 = $valor1**(1/2);
            $raiz3 = $valor1**(1/3);
            echo "<p class='centro'>Analisando o número $valor1, temos:</p>";
        ?>
        <ul>
            <li>A sua raiz quadrada é <strong><?= number_format($raiz2,3,",",".") ?></strong></li>
            <li>A sua raiz cúbica é <strong><?= number_format($raiz3,3,",",".") ?></strong></li>
        </ul>
    </section>
</body>
</html> 