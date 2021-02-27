<?php

echo 'Un texto de una linea
varias lineas
comilla simple \' backslash \\ continuar con mas texto
$variable <br>';


$name = 'rodcko';
echo "Mi nombre es $name <br>";

$courses = ['backend' => 'PHP'];

class User
{
  public $name = 'rodcko';
}

$user = new User;

//echo "$user->name quiere aprender $courses['backend']";

$teacher = 'rodcko';
$rodcko = 'Profesor de Node xd';
echo "$teacher es ${$teacher}";

function getTeacher()
{
  return 'teacher';
}

$teacher = 'Rodcko';

echo "{${getTeacher()}} ensena PHP";
