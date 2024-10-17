<?php
// Esto es un comentario de una linea

/*
Y esto es
un comentario
multilinea
*/

// Para transformar un "string" a HTML se usa "echo"
echo "<h2>Hola mundo 1</h2>";

// O print
print "<h2>Hola mundo 2</h2>"; // Siempre hay que poner ";" al final

# También se pueden hacer así los comentarios monolinea


// Una vez aclarado esto, vamos a empezar con teoría de php

/*
    TIPOS DE DATOS

        1. Boolean (TRUE (1) o FALSE (0))
        2. Integer (4, -3, 10...)
        3. Float (7.4, "pi", -2.532...)
        4. String ("Hola", 'hola', 'tu madre tiene una...' ...)
*/

echo "<h1>TIPOS DE DATOS</h1>";
var_dump(TRUE); // var_dump() nos devuelve el tipo y valor del dato.

echo "<br>";

var_dump(4);

echo "<br>";

var_dump(3.14);

echo "<br>";

var_dump("Hola mundo"); // En este caso var_dump nos devuelve la longitud de la cadena



// Esto está que te cagas, pero... ¿cómo almacenamos estos datos?
// CON VARIABLES

/*
    ¿Qué es una variable?
        Una variable es un ESPACIO DE MEMORIA (RAM) en el
        que almacenamos un dato (booleano, entero, flotante o string).
        Y le podemos poner un nombre, para que sea más fácil
        acceder al dato.
*/

echo "<h1>VARIABLES</h1>";
//$nombre_variable = dato
$edad = 18;
/*  El nombre de la variable siempre empieza por $, y seguidamente
    solo lleva una letra o "_".
*/

echo "$edad </br>"; // Para llamar a la variable se utiliza "$nombre_variable"

$_variable_1 = "dato </br>";
echo $_variable_1;

/*
    Hay que saber que hay ciertas variables PREDEFINIDAS,
    es decir, que ya tienen "valor" digamos. Algunos ejemplos
    son:
        $_GET : Se usa en formularios HTML
        $_POST : Se usa en formularios HTML
        $_SERVER : Información del servidor
        $GLOBALS : Referencia a todas las variables globales
        $_COOKIE : Se usa para cookies HTTP
*/

// Aunque hayamos definido anteriormente ciertas variables, podemos cambiarles el valor.

$edad = 20;
echo $edad;

/*
    ¿Y si queremos que el valor de una variable no cambie?
        Es decir, como hemos visto podemos cambiar el valor a las
        variables, pero ¿si queremos que no cambien? Ya sea porque
        es un valor CONSTANTE, como PI, su DNI o porque no te sale
        de los cojones que se cambie.
        Para ello se utiliza un tipo "especial de variable", llamada
        CONSTANTE.
*/

echo "<h1>CONSTANTES</h1>";

// Para declararlas tenemos dos formas.

// define("nombre_constante", valor); Las constantes no necesitan "$" al principio y normalmente se ponen en mayúsculas, por gusto.

define("PI", 3.14);
echo PI;
echo "<br>";

// A partir de PHP 5.3.0 hay una nueva forma de declarar constantes

const PHI = 1.62;
echo PHI;
echo "<br>";
/*
    Al igual que las variables PHP tiene ciertas constantes predefinidas,
    algunas son:
        __LINE__ : El número actual de línea en el fichero
        __FILE__ : Ruta completa y nombre del fichero
        __DIR__ : Directorio del fichero
*/

echo __LINE__;
echo "<br>";
echo __FILE__;
echo "<br>";

// A partir de PHP 7.0 se pueden añadir arrays a constantes.
// (No hace falta saber que es un array de momento)

define("ALUMNOS", array("Carlos", "Alba", "José"));
echo ALUMNOS[2];


/*
    Recapitulando hemos visto los tipos de datos, estos se pueden
    almacenar en variables o constantes si no queremos que el dato
    cambie, pero, en la mayoría de lenguajes existe lo que se llama
    "array", con esto podemos almacenar varios datos en un solo nombre,
    es como un conjunto de variables en uno. Como vimos anteriormente
    una constante puede almacenar un array, por tanto podemos hacer
    arrays VARIABLES o CONSTANTES.
*/

/*
    TIPOS DE ARRAYS:
        - Arrays escalares : Se asocian con un índice
        - Arrays asociativos : Se asocian con una clave
        - Arrays multidimensionales : Es un array que tiene arrays
*/

echo "<h1> Arrays escalares </h1>";

// Se pueden definir de dos maneras, a tavés del CONSTRUCTOR "array()"
$estudiantes = array("Carlos", "Carla", "Samuel", "Vannessa");
echo $estudiantes[0]; // Primera posición, Carlos
echo "<br>";
echo $estudiantes[2];
$estudiantes[2] = "Daniel"; //Modificando el valor de Samuel
echo "<br>";
echo $estudiantes[2];
echo "<br>";
// Se puede definir también con los "[]"
$estudiantes = ["Juan", "Manolin", "Estela"];
echo $estudiantes[0]; // Ahora mostrará "Juan" ya que $estudiantes es un array variable
// Podemos añadir valores también, por ejemplo, en los arrays escalares sería:
echo "<br>";
$estudiantes[] = "Fernando";

//Ahora, si tratamos de acceder...
echo $estudiantes[3]; // Va a poner Fernando
echo var_dump($estudiantes);

echo "<h1> Arrays asociativos</h1>";

// Los arrays asociativos referencian un valor con una "llave", que es un tipo de dato cualquiera

$vivo_muerto = [true => "Vivo", false => "Muerto"];
echo $vivo_muerto[true];
echo "<br>";

$dias_semana = array(1 => "Lunes", 2 => "Martes", 3 => "Miercoles", 4 => "Jueves", 5 => "Viernes", 6 => "Sábado", 7 => "Domingo");
echo $dias_semana[5];
echo "<br>";

$dias_semana = ["Lunes" => 1, "Martes" => 2, "Miercoles" => 3, "Jueves" => 4, "Viernes" => 5, "Sábado" => 6, "Domingo" => 7];
echo $dias_semana["Domingo"];
echo "<br>";

// Así por ejemplo, podemos agrupar datos sobre un objeto.
$persona = [
    "nombre" => "Chris",
    "apellido" => "Tutancamón",
    "edad" => 18
];

echo $persona["apellido"];

// Podemos también añadir más valores.
$persona["lengua"] = "Español";
echo "<br>";
echo $persona["lengua"];




echo "<h1> Array multidimensional </h1>";
$profesor = [
    "nombre" => "Carlos",
    "apellido" => "Vergara",
    "edad" => 36,
    "cursos" => ["Física cuática", "Termodinámica", "Manicura"]
];

echo $profesor["cursos"][2]; // Ya que en el apartado de "cursos" tenemos un array escalar


// Una vez visto todos los arrays vamos a ver como contar sus elementos

echo "<h1> Contando elementos </h1>";
echo count($estudiantes);
echo "<br>";
echo count($persona);
echo "<br>";
echo count($profesor, COUNT_RECURSIVE); // Con count recursive también cuenta los elementos de los arrays que tenga el array

// Habiendo visto lo anterior, hablaremos de la concatenación e interpolación

echo "<h1>Concatenación e interpolación</h1>";

$nombre = "Chris";
$pais = "España";

// Concatenar es unir varios strings, para ello usamos el punto.
$resultado = $nombre . " es de " . $pais;
echo $resultado;
echo "<br>";

// Interporlar es meter una variable dentro de un string (solo vale con comillas dobles)
echo "Yo, {$nombre} soy de $pais <br>"; // Se pueden poner con {} o sin ellas
// Probemos y veremos que no nos devuelve lo mismo:
echo 'Yo, {$nombre} soy de $pais <br>';


echo "<h1> Operadores aritméticos </h1>";
/*
    Operadores aritméticos
        Suma: +
        Resta: -
        Multiplicación: *
        División: /
        Módulo: %
        Exponenciación: **
*/

$num_1 = 7;
$num_2 = 4;

echo "Suma: $num_1+$num_2 = " . $num_1 + $num_2 . "<br>";
echo "Resta: $num_1-$num_2 = " . $num_1 - $num_2 . "<br>";
echo "Multiplicación: $num_1*$num_2 = " . $num_1 * $num_2 . "<br>";
echo "División: $num_1/$num_2 = " . $num_1 / $num_2 . "<br>";
echo "Módulo: $num_1%$num_2 = " . $num_1 % $num_2 . "<br>";
echo "Exponencición: $num_1**$num_2 = " . $num_1 ** $num_2 . "<br>";


echo "<h1> Operadores de asignación </h1>";
/*
    Operadores de asignación
        Asignar: =
        Sumar y asignar: +=
        Restar y asignar: -=
        Multiplicar y asignar: *=
        Dividir y asignar: /=
        Concatenar y asignar: .=
*/

$numero = 5;
echo "Asignación $numero <br>";
$numero += 3;
echo "Suma y asignación $numero <br>";
$numero -= 3;
echo "Resta y asignación $numero <br>";
$numero *= 2;
echo "Multiplicación y asignación $numero <br>";
$numero /= 2;
echo "División y asignación $numero <br>";
$numero .= "Concatenado";
echo "Concatenación y asignación $numero <br>";


echo "<h1> Asignación por referencia </h1>";
$num1 = 5;
$num2 = &$num1; // Asignación por referncia, manipulan los mismos datos
echo "Num 1: $num1" . "<br>" . "Num 2: $num2";
$num2 -= 3;
echo "<br>Restando 3 a num2<br>";
echo "Num 1: $num1" . "<br>" . "Num 2: $num2";
?>
