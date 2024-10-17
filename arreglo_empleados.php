<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php

$empleados = [
    ["nombre" => "Omar", "sueldo" => 1500],
    ["nombre" => "Ana", "sueldo" => 1800],
    ["nombre" => "Luis", "sueldo" => 1200],
    ["nombre" => "Camila", "sueldo" => 2000],
    ["nombre" => "Jose", "sueldo" => 1700]

];

usort($empleados, function($a, $b) {

    return $a["sueldo"] <=> $b["sueldo"];

});

echo "Empleados ordenados por sueldo: " . "<br>" . "<br>";

foreach ($empleados as $empleado) {

    echo $empleado["nombre"] . ": $" . $empleado["sueldo"] . "<br>";

}

array_push($empleados, ["nombre" => "Miguel", "sueldo" => 1600]);
array_push($empleados, ["nombre" => "Javier", "sueldo" => 1900]);

echo "<br>" . "Empleados después de agregar dos más: " . "<br>" . "<br>";

foreach ($empleados as $empleado) {

    echo $empleado["nombre"] . ": $" . $empleado["sueldo"] . "<br>";

}

?>
	
</body>
</html>