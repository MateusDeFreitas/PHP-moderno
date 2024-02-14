<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 06</title>
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif:
            margin: 0;
        }
        section p {
            align-items: center;
            display: flex;
            justify-content: center;
        }
        span {
            display: inline-block;
            padding: 5px 50px 5px 50px;
            width: 130px;
            height: 50px;
        }
        #spa_dividendo {
            border-left: 2px solid black;
            border-bottom: 2px solid black;
        }
        #spa_quociente {
            border-left: 2px solid black;
        }
        #p_div1 {
            margin-bottom: 0;
            line-height: 30px
        }
        #p_div2 {
            margin-top: 0;
            line-height: 50px
        }
    </style>
</head>
<body>
    <?php 
        $dividendo = $_GET['dividendo']??0;
        $divisor = $_GET['divisor']??1;
        $quociente = intdiv($dividendo,$divisor);
        $resto = $dividendo-$divisor*$quociente;
    ?>
    <main>
        <h1>Anatomia de uma divisão</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <p>
                <label for="dividendo">Dividendo:</label>
                <input type="number" name="dividendo" id="id_dividendo" value="<?= $dividendo ?>">
            </p>
            <p>
                <label for="divisor">Divisor:</label>
                <input type="number" name="divisor" id="id_divisir" value="<?= $divisor ?>">
            </p>
            <p>
                <input type="submit" value="Analisar">
            </p>
        </form>
    </main>
    <section>
        <h2>Estrutura da divisão</h2>
        <p id="p_div1"><span id="spa_divisor"><?= $dividendo ?></span><span id="spa_dividendo"><?= $divisor ?></span></p>
        <p id="p_div2"><span id="spa_resto"><?= $resto ?></span><span id="spa_quociente"><?= $quociente ?></span></p>
    </section>
</body>
</html>