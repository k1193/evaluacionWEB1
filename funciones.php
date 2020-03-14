<?php
//funcion 8 y la reutilizamos para la 10
function calcularEdad($nacimiento,$actual){
    $edad=$actual-$nacimiento;
    return($edad);

}


//funcion de la pregunta 9 y la reutilizamos para la 10
function biotipo($estatura){
    $biotipo="";
    if($estatura<1.70){
        $biotipo="Bajo";
    }
    else {
        if ($estatura>=1.70 && $estatura<=1.80) {
            $biotipo="Promedio";
        }
        else{
            $biotipo="Superior";
        }
    }
    return $biotipo;
}










?>