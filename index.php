<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>aulaarray</title>
    </head>
    <body>
        
        <?php
        echo '<select>';    
        
            $m [0] = 'Bandas';
            $m [1] = 'System of a Down';
            $m [2] = 'Lynyrd Skynyrd';
            $m [3] = 'Blackberry Smoke';
            $m [4] = 'Guns and Roses';
            $m [5] = 'a';
            $m [6] = 'b';
            $m [7] = 'c';
            $m [8] = 'd';
            $m [9] = 'e';
            
            for( $i= 0 ; $i < 10 ; $i++ ){
               echo '<option>';
               echo $m [$i] ;
               echo '</option>';
            }
            
            echo '</select>';
        ?>
        
    </body>
</html>
