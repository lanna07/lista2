<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>1</title>
    </head>
    <body>
        <?php
        function numero_primo($n) {
            $cont = 1;
            if ($n == 1) {
                echo"O numero: $n é primo";
            } else {
                for ($i = 1; $i <= $n; $i++) {
                    if ($n % $i == 0) {
                        $cont++;
                    }
                }
                if ($cont == 2) {
                    echo "O número: $n  é primo";
                } else {
                    echo "O número: $n  nao é primo";
                }
            }
        }
        ?>
    </body>
</html>
