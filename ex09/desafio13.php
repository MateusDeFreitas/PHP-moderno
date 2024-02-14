<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 13</title>
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
        .imagens {
            width: 70px;
            height: 30px;
        }
        #moeda {
            width: 30px;
            height: 30px; 
        }
    </style>
</head>
<body>
    <?php 
        $valor = $_GET['valor']??0;
        $nota_de_100 = intdiv($valor,100);
        $nota_de_50 = intdiv($valor-($nota_de_100*100),50);
        $nota_de_20 = intdiv($valor-($nota_de_100*100+$nota_de_50*50),20);
        $nota_de_10 = intdiv($valor-($nota_de_100*100+$nota_de_50*50+$nota_de_20*20),10);
        $nota_de_5 = intdiv($valor-($nota_de_100*100+$nota_de_50*50+$nota_de_20*20+$nota_de_10*10),5);
        $nota_de_2 = intdiv($valor-($nota_de_100*100+$nota_de_50*50+$nota_de_20*20+$nota_de_10*10+$nota_de_5*5),2);
        $moeda_de_1 = intdiv($valor-($nota_de_100*100+$nota_de_50*50+$nota_de_20*20+$nota_de_10*10+$nota_de_5*5+$nota_de_2*2),1);
    ?>
    <main>
        <h1 class="centro">Caixa eletrônico</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <p>
                <label for="valor">Qual valor você deseja sacar?</label>
                <input type="number" name="valor" id="id_valor" value="<?= $valor ?>">
            </p>
            <p> 
                <input type="submit" value="sacar">
            </p>
        </form>
    </main>
    <section id="resultado">
        <h2 class="centro">Saque de <?= $valor ?>R$ realizado</h2>
            <p>
                O caixa eletronico vai te entregar:
                <ul>
                    <li><img class="imagens" src="imagens/100-reais.jpg" alt="Nota de 100 reais"> x<?=$nota_de_100?> </li><br>
                    <li><img class="imagens" src="imagens/50-reais.jpg" alt="Nota de 50 reais"> x<?=$nota_de_50?> </li><br>
                    <li><img class="imagens" src="imagens/20-reais.jpg" alt="Nota de 20 reais"> x<?=$nota_de_20?> </li><br>
                    <li><img class="imagens" src="imagens/10-reais.jpg" alt="Nota de 10 reais"> x<?=$nota_de_10?> </li><br>
                    <li><img class="imagens" src="imagens/5-reais.jpg" alt="Nota de 5 reais"> x<?=$nota_de_5?> </li><br>
                    <li><img class="imagens" src="imagens/2-reais.jpg" alt="Nota de 2 reais"> x<?=$nota_de_2?> </li><br>
                    <li><img id="moeda" src="imagens/1-real.jpg" alt="Moeda de 1 real"> x<?=$moeda_de_1?> </li>
                </ul>

            </p>
    </section>
</body>
</html> 