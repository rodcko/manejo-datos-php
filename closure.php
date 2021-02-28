<?php

/*
$greet = function ($name) // Se usa en una variable que requiere logica
{
  return "Hola, $name";
};

echo $greet('Rodcko');
*/

function greet(Closure $lang, $name)
{
  return $lang($name);
}

$es = function ($name)
{
  return "Hola, $name";
};

$en = function ($name)
{
  return "Hello, $name";
};

echo greet($en, 'Lynda');