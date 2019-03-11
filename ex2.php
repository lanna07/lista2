<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>2</title>
    </head>
    <body>
        <?php
        require "ex1.php";
        function primo_100() {
            for ($i = 1; $i < 100; $i++) {
                numero_primo($i);
            }
        }
            primo_100();
        ?>
    </body>
</html>
