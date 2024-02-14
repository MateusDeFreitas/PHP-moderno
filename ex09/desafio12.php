<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 12</title>
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
        $segundos = $_GET['segundos']??0;
        $semanas = intdiv($segundos,604800);
        $dias = intdiv($segundos-($semanas*604800),86400);
        $horas = intdiv($segundos-($semanas*604800+$dias*86400),3600);
        $minutos = intdiv($segundos-($semanas*604800+$dias*86400+$horas*3600),60);
        $resto = $segundos-($semanas*604800+$dias*86400+$horas*3600+$minutos*60);
    ?>
    <main>
        <h1 class="centro">Calculadora de tempo</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <p>
                <label for="segundos">Qual é o total de seguntos?</label>
                <input type="number" name="segundos" id="id_segundos" value="<?= $segundos ?>">
            </p>
            <p> 
                <input type="submit" value="calcular">
            </p>
        </form>
    </main>
    <section id="resultado">
        <h2 class="centro">Totalizando tudo</h2>
            <p>
                Analisando o tempo que você digitou,<strong><?= $segundos ?> segundos</strong> equivalem a um total de
                <ul>
                    <li><?=$semanas?> semanas</li>
                    <li><?=$dias?> dias</li>
                    <li><?=$horas?> horas</li>
                    <li><?=$minutos?> minutos</li>
                    <li><?=$resto?> segundos</li>
                </ul>

            </p>
    </section>
</body>
</html> 