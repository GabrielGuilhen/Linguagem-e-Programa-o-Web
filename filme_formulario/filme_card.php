        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Pagina GrandFather</title>
        </head>

        <body>


            <div style='border: solid 1px; width: 300px; margin-top: 20px;'>
                <?php
                echo $_POST["nomeFilme"] . '<br>';
                echo $_POST["diretor"]. '<br>';
                echo $_POST["ano"]. '<br>';
                echo "<img style='width: 100%; height: auto;' src='" .  $foto = $_POST["foto"] . "' />";

                ?>
            </div>

        </body>

        </html>
