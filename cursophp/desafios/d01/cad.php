<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do Calculo</h1>
    </header>
    <main div class="boas_vindas">
        <div class="box_php">
        <?php 
                                        // var_dump($_GET); // $_GET $_POST $_COOKIES $_REQUEST
            $numero = $_GET["number"] ?? "0";
            $antecessor = $_GET["number" ] - 1 ?? "0";
            $sucessor = $_GET["number"] + 1 ?? "0";
            
            echo "<p>O número escolhido foi $numero <p>";
            echo "<p>O antecessor é $antecessor";
            echo "<p>O sucessor é $sucessor";

        ?>
        </div>
        <div class="voltar">
       <p> <a href="javascript:history.go(-1)">Voltar</a></p></div>
    </main>
</body>
</html>