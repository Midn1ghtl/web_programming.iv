<?php
    $fname=$_GET['fname'];
    $lname=$_GET['lname'];
    $email=$_GET['email'];
    $numTel=$_GET['numTel'];
    $fecha=$_GET['fecha'];

    echo "<h2>Datos del registro</h2>";
    echo "Nombre: " . $fname . "<br>";
    echo "Apellido: " . $lname . "<br>";
    echo "Correo: " . $email . "<br>";
    echo "Teléfono: " . $numTel . "<br>";
    echo "Fecha: " . $fecha . "<br>";
?>