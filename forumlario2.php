<?php

echo "Nombre: ".$_POST['nombre'];
echo "<br>";

echo "Apellido: ".$_POST['apellido'];
echo "<br>";

echo "Curso: ".$_POST['curso'];
echo "<br>";

echo "Ciclo: ".$_POST['ciclo'];
echo "<br>";

echo "Calificación PROG: ".$_POST['prog'];
echo "<br>";

echo "Calificación ED: ".$_POST['ed'];
echo "<br>";

echo "Calificación LLMM: ".$_POST['llmm'];
echo "<br>";

echo "Calificación BBDD: ".$_POST['bbdd'];
echo "<br>";

//Media de las notas
$media=($_POST['bbdd']+$_POST['llmm']+$_POST['ed']+$_POST['prog'])/4;
echo "La note media es: ".$media;

 ?>
