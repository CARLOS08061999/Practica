<!DOCTYPE html>
<html>
    <body>
        <title>PHP</title>

        <h3 style="text-align: center;">PHP ARCHIVO 2</h3>

        <?php
        //variables
            $num1 = 28;  
            $num2 = 58;
            $num3 = 23.785;
            $num4 = 32.934;
            $txt = "Carlos";
            $txt2 = "Daniel";
            $txt3 = "Gonzalez";

        //operacion de enteros
            $sum = $num1 + $num2;
            $multiplicacion = $num1 * $num2;

        // operaciones  decimales
            $sum1 = $num3 + $num4;
            $multiplicacion2 = $num3 * $num4;
        
        //concatenacion
            $texto = $txt . $txt2 .$txt3;

        //resultados
        echo "La suma de  $num1 + $num2 es: $sum y son numeros enteros <br>. ";
        echo "La suma de $num3 + $num4 es: $sum1  y son numeros decimales<br>. "; 
        echo "La multiplicacion de $num1 * $num2 es: $multiplicacion y esta es una multiplicaccion. <br>";
        echo "La multiplicacion de $num3 * $num4 es: $multiplicacion2 y esta es una multiplicacion decimal.<br>";
        echo "Concatenacion de $txt . $txt2. $txt3 es : $texto"

        ?>  

    </body>
</html>







