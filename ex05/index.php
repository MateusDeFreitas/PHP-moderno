<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>título</title>
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>
<body>
    <?php 
        $valor = 500;
        $r =  abs($valor); // valor absoluto retorna o valor original sem o sinal negativo, se tiver
        $r = base_convert(300,10,8); // irá converter o 300 da pase decimal para a octal
            //ceil(para cima) floor(para baixo) round(padrão)// funções de arredondamento
        $r = hypot(10,10); // calcula a hipotenusa apartir do valor dos 2 catetos
        $r = intdiv(5,2); // retorna o valor da divisão sem a virgula
        $r = min(1,2); //retorna o valor mínimo de uma sequência
        $r = max(1,2); //retorna o valor máximo de uma sequência
        $r = pi(); //atribui o valor pi
        $r = pow(); //calcula a potência
            //sin(seno) cos(coseno) tan(tangente)
        $r = sqrt(); // calcula a raíz quadrada 
    ?>
</body>
</html>