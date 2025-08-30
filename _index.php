<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clase de php</title>
</head>
<body>
    <?php
        /*
        // esto es un ejercicio de variables en PHP
        // estos son array
        $numero = "123";
        $array = array("uno", "dos", "tres");
        echo "<h1>Array de ejemplo:</h1>";
        echo "<p>Los elementos: " . $array[0] . ", " . $array[1] . " y " . $array[2] . "</p>";

        // Ejercicio de operadores aritmeticos.
        $a = 10;
        $b = 5;
        $suma = $a + $b;
        $resta = $a - $b;
        $multiplicacion = $a * $b;
        $division = $a / $b;

        echo "<h1>Operadores aritmeticos</h1>";
        echo "<p>La suma de $a y $b es: $suma</p>";
        echo "<p>La resta de $a y $b es: $resta</p>";
        echo "<p>La multiplicacion de $a y $b es: $multiplicacion</p>";
        // Ejercicio en clase
        
        El señor carlos y su esposa tiene 5 Hijos y 2 nietos
        Los nietos tuviero 5 hijos cada uno
        pasado el tiempo fallecieron dos hijos y un nieto
        El señor carlos muy trite cuanta cuantas personas quedan en su familia
        incluyendolo a el.
        Realiza la formula e imprime el resultado.
        
        // Ejercicios de estructuras de control. 
        // Determinar el numero mayor de dos numeros
        $num1 = 15;
        $num2 = 14;
        $num3 = 20;

        if ($num1 > $num2) {
            echo "El numero mayor es: $num1";
        } else {
            echo "El numero mayor es: $num2";
        }
        // Determinar el numero mayor de tres numeros
       
        if ($num1 > $num2 && $num1 > $num3) {
            echo "El numero mayor es: $num1";
        } elseif ($num2 > $num1 && $num2 > $num3) {
            echo "El numero mayor es: $num2";
        } else {
            echo "El numero mayor es: $num3";
        }
        
        
        // Determinar el indice de masa corporal
        $peso = 70; // en kg
        $altura = 1.75;
        $imc = $peso / ($altura * $altura);
        echo "El indice de masa corporal es: $imc";
        
        
        // Determinar si un numero es par o impar
        $numero = 7;
        if ($numero % 2 == 0) {
            echo "El numero es par";
        } else {
            echo "El numero es impar";
        }
        // Determinar si un numero es positivo, negativo o cero
        $numero = -5;
        if ($numero > 0) {
            echo "El numero es positivo";
        }
        */

        // Estructuras de control switch
        /*
        $dia = 9; // 1: Lunes, 2: Martes, 3: Miércoles, etc.
        switch ($dia) {
            case 1:        
                echo "Hoy es lunes";
                break;
            case 2:
                echo "Hoy es martes";
                break;
            case 3:
                echo "Hoy es miércoles"."</br>";
                $numero = 7;
                if ($numero % 2 == 0) {
                    echo "El numero es par";
                } else {
                    echo "El numero es impar";
                }
                break;
            default:
                echo "La opcion escogida no corresponde";
        }
        */
        /*
        // Estructuras de control while
        $contador = 1; 
        while ($contador <= 5) {
            echo "Contador: $contador <br>";
            $contador++;
        }
        echo "<h2>fuera de la estructura while</h2>" . $contador;

        */
        /*
        // Estructuras de control do while
        $contador = 1;
        do {
            echo "Contador: $contador <br>";
            $contador++;
        } while ($contador <= 15);
        
        // Estructuras de control for
        for ($i = 1; $i <= 5; $i++) {
            echo "Contador: $i <br>";
        }
        
        // Estructuras de control foreach
        $array = array("uno", "dos", "tres");
        foreach ($array as $valor) {
            echo "Valor: $valor <br>";
        }
        */
        /*
        // arreglos simples
        $arreglo = array("uno", "dos", "tres");
        echo "<h1>Arreglo simple</h1>";
        foreach ($arreglo as $valor) {
            echo "<p>Valor: $valor</p>";
        }
        */
        /*
        // arreglos asociativos
        $arregloAsociativo = array("nombre" => "Felipe", "edad" => 30, "ciudad" => "Bogotá");
        echo "<h1>Arreglo asociativo</h1>"; 
        foreach ($arregloAsociativo as $clave => $valor) {
            echo "<p>Clave: $clave, Valor: $valor</p>";
        }
        */
        /*
        // arreglos multidimensionales
        $arregloMultidimensional = array(
            array("nombre" => "Felipe", "edad" => 30),
            array("nombre" => "Juan", "edad" => 25),
            array("nombre" => "Maria", "edad" => 28)
        );
        echo "<h1>Arreglo multidimensional</h1>";
        foreach ($arregloMultidimensional as $valor) {
            echo "<p>Nombre: " . $valor["nombre"] . ", Edad: " . $valor["edad"] . "</p>";
        }
        */
        /*
        // arreglos con bucles
        $arreglo = array("uno", "dos", "vaca", "gato");
        echo "<h1>Arreglo con bucles</h1>";
        for ($i = 0; $i < count($arreglo); $i++) {
            echo "<p>Valor: " . $arreglo[$i] . "</p>";
        }
        */
        /*
        // funciones basicas
        function suma($a, $b) {
            $suma = $a +$b;
            return $suma;
        }
        echo "<h1>Funciones basicas</h1>";
        echo "<p>Suma: " . suma(5, 3) . "</p>";
        */
        
        // funciones con arreglos
        function sumaArreglo($arreglo) {
            $suma = 0;
            foreach ($arreglo as $valor) {
                $suma += $valor;
            }
            return $suma;
        }
        echo "<h1>Funciones con arreglos</h1>";
        echo "<p>Suma arreglo: " . sumaArreglo(array(1, 2, 3, 4, 5, 6)) . "</p>";

        ?>
 

</body>
</html>