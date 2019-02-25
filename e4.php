<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>aulaarray</title>
    </head>
    <body>
        
    <?php 
        $c = 0;
        $vet = array();
        for( $i= 0 ; $i < 30 ; $i++ ){
            $vet [$i]= $i;
            $c+= $vet [$i];
        }
        
        for( $i= 1 ; $i < 30 ; $i++ ){
            if($vet [$i]>$vet [$i-1]){
                $melemento = $vet [$i];
                $mindice = $i;
            }
        }
        print "Soma total: ".$c."<br>";
        print "Média total: ".($c/count($vet))."<br>";
        print "Maior valor: ".$melemento."<br>";
        print "índice correspondente: ".$mindice."<br>";
        
        var_dump ($vet);
    ?>

    </body>
</html>