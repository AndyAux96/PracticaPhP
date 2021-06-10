<?php
$number=11;
$name='AndyAux';
echo gettype($number); #Conocer que tipo de variable es

#1. Parseo de caracteres
$number=(string)$number;
#$name=(int)$name;
echo ($number);
echo gettype($number);
echo var_dump($number); #Retorna el valor de caracteres y lo que almacena la variable
echo var_dump($name);

#2. Concatenación
echo ("Hola $name su nivel es $number");

#3. Recortar caractéres
$nombre='AndyAux';
echo substr($nombre,-3);


#4. Busqueda de caracteres en una cadena
$cadena='Bienvenido al mundo de la programación';
$buscar='do';
echo strpos($cadena,$buscar);#Devuelve un número entero de la primera posición del string buscado en la cadena

#5. Encotrar y reemplazar $cadena
$cadBusqueda=' ';
$nuevacadena='xd';
$cadena='10 11 12 AB CD EF';
echo str_replace($cadBusqueda,$nuevacadena,$cadena,$count); #1 Lo que se busca,2 lo que se va a cambiar,3 La cadena a analizar,4 Retorna cuantas veces se encontro algo

#hola mundo 

 ?>
