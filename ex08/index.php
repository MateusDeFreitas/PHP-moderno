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
        // Capturando os dados dos formulários retro alimentados
        $valor1 = $_GET['valor1']??0;
        $valor2 = $_GET['valor2']??0;
    ?>
    <main>
        <h1 class="centro">Valores</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <p>
                <label for="valor1">Primeiro valor:</label>
                <input type="number" name="valor1" id="id_valor1" value="<?php echo $valor1 ?>">
            </p>
            <p>
                <label for="valor2">Segundo valor:</label>
                <input type="number" name="valor2" id="id_valor2" value="<?php echo $valor2 ?>">
            </p>
            <p> 
                <input type="submit" value="Calcular">
            </p>
        </form>
    </main>
    <section id="resultado">
        <h2 class="centro">Resultado</h2>
        <?php 
            $soma = $valor1 + $valor2;
            echo "<p class='centro'>A soma dos valores $valor1 e $valor2 é igual a $soma</p>";
        ?>
    </section>
</body>
</html> 