<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>3</title>
    </head>
    <body>
        <?php
            $color = array(
                    'Rosa',
                    'Azul',
                    'Amarelo',
                    'Vermelho',
                    'caramelo',
                    'Laranja',
                    'Roxo',
                    'Verde',
                );
            function lista_cores($vetor){
                for ($i=0; $i < count($vetor) ; $i++){	
                    echo "<li>".$vetor[$i]."</li>";           
                 }
            }
            echo "<ul>";
            lista_cores($color);
            echo "</ul>";
        ?>

    </body>
</html>
