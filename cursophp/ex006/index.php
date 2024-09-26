    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/Q0YYA8hSV8g?si=IVXfkU9Pb_dponoO" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        <?php 
        
            $r = 5 % 2;

            echo "A resposta é $r";

            $r = intdiv(5, 2);

            echo "A resposta é $r";

            $r = max (5, 2, 7, 5);

            print("A resposta é $r");

            $r = min (5, 2, 7, 5);

            print("A resposta é $r");

            $r = pi();
            echo " A resposta é $r";
            
            $r = M_PI;

            echo "A resposta é $r";

            $r = 5 ** 2; // pow() perde a ordem de precedencia.

            echo "A resposta é $r";

            $r = sin(5); // cos(), tan()

            echo "A resposta $r";

            $r = sqrt(81); // $r = 81 ** (1/2) ou (1/3);

            echo "A resposta é $r";

        ?>
    </body>
    </html>