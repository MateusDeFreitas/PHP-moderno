<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>
<body>
    <h1>Exemplo de PHP</h1>
    <?php 
        date_default_timezone_set("America/sao_paulo");
        echo "Hoje é dia " . date("d/M/Y");
        echo "<br>";
        echo "E a hora é " . date("G:i:s");
        //comentário
        #comentário
        /*
                            Regras para variaveis

            1- sempre começa com $
            2- o segundo caracter pode ser uma letra ou um _
            3- aceita-se caracteres [a-z], [A-Z], [0-9] e _
            4- acita se caracteres da tabela ASCII apartir de 128
            5- aceita caracteres como á, õ e ç
            6- essa linguegem é case sensitive
            7- nomes especiais como $this não podem ser usados
        */
    ?>
</body>
</html>