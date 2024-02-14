<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>título</title>
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            height: 100vh;
            margin: 0;
        }
    </style>
</head>
<body>
    <?php 
        $salario = $_GET['salario']??0;
        $salario_minimo = 1412;
        $x_salario_minimo = intdiv($salario, $salario_minimo);
        $resto = $salario - $salario_minimo * $x_salario_minimo;
    ?>
        <main>
            <h1>Informe o seu salário</h1>
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
                <p>
                    <label for="salario">Salário(R$)</label>
                    <input type="number" name="salario" id="id_salario" value="<?= $salario ?>">
                </p>
                <p>Considerando o salário minimo <strong><?= number_format($salario_minimo,2,",",".") ?></strong></p>
                <p>
                    <input type="submit" value="Calcular">
                </p>
            </form>
        </main>
        <section>
            <h2>Resultado final</h2>
            <p>Quem recebe um salário de <?= number_format($salario,2,",",".") ?>R$, ganha <strong><?= $x_salario_minimo ?> salários mínimos</strong> + <?= number_format($resto,2,",",".") ?>R$</p>
        </section>
</body>
</html>