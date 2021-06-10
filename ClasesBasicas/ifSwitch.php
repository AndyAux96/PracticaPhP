<?php
$name='Andy';
if ($name=='Andy')
{
  echo 'Si es el '.$name;
}else {
  echo 'No es el '.$name;
}
switch ($name) {
  case 'Andy':
    echo "Primer case";
    break;
  case 'Andys';
    echo "Segundo case";
    break;
  default:
    // code...
    break;
}
 ?>
