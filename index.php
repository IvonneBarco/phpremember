<?php
echo '<p>Hola Mundo!</p>';

//Variables
$integer = 1;
$float = 1.5;
$isTrue = true;
$arrayColores = array('azul','morado','negro');
$string = "hello";

echo $integer;
echo $float;
if ($isTrue) {
  echo "Soy Verdadero";
  echo $string;
  echo $arrayColores[2];
}

//Variables locales y globales
function variablesGlobales(){
  $local = "Soy la variable local"; //DEF. VARIBALE LOCAL
  echo $GLOBALS["global"]; //DEF. VARIBALE GLOBAL
  echo $local;
}

//Asignar valor a la variable global
$global = "Soy la variable global";
variablesGlobales();


//Variables superGlobals: se usan en cualquier parte del script

//Constantes - Se las escribe en mayusculas

const CONSTANTE = 'Soy una constante';
echo CONSTANTE;

?>
