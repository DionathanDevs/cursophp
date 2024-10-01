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
                                       
           
                                       
        $numero = mt_rand(1,1000);
                
                echo "O número gerado foi $numero \u{1F3B2}";

        ?>
        </div>
        <div class="voltar">
       <p> <a href="javascript:history.go(-1)">Voltar</a></p></div>
    </main>
</body>
</html>