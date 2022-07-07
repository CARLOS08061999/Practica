<!DOCTYPE html>
<html>
    <body>

    <h3 style="text-align: center;">PHP ARCHIVO 3</h3>
        <?php
        
            //declaracion de variables 
            $num1 = 40;
            $num2 = 60;
            $num3 = 70;

            //operacion de comparacion

            if($num1<$num2){
                echo "$num1 es menor que $num2 <br>";
            }elseif ($num1 > $num2){
                echo "$num1 es mayor que $num2 <brr>";
            }else echo "$num1 es igual a $num2 <br>";


            //menor de tres numeros

            if($num1 < $num2 and $num1 < $num3) {
                echo "el numero $num1 es menor que $num2 y $num3";
            }elseif ($num2 < $num1 and $num2 < $num3) {
                echo "el numero $num2 es menor que $num1 y $num3";
            }else echo "el numero $num3 es menor que $num1 y $num2";

        ?> 
        <?php

        ?>

    </body>
</html>