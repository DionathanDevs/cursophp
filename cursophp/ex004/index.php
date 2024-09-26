<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings em PHP</title>
</head>
<body>
    <?php
    
    $nome = "Gustavo";
    $sobrenome = "Guanabara \u{2705}";

    echo "Olá $nome $sobrenome! ";

    const estado = "RJ ";

    echo "Moro no " .estado;

    echo "Estamos no ano de " . date('Y');

    $nom = "Rodrigo";
    $snom = "Nogueira";

    echo " $nom \"Minotauro\" $snom";

    echo <<< TESTE

    Olá $nom tudo bem com vocês?
    Como está sendo blablabla
    Abraços! \u{2705}

    TESTE;

    echo <<< 'FRASE'

        Estou estudando

    FRASE;

   /* \n Nova linha
    \t Tabulação Horizontal
    \\ Barra invertida
    \$ Mostrar cifrão
*/
    ?>
</body>
</html>