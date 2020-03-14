<?php

include('funciones.php');

// Evaluacion Web1 presentado por ksandra pimienta
// Respuesta 1
echo("preguna#1 <br>");

$variable1=  400;
$variable2= 80;


$suma=$variable1 + $variable2;
$resta =$variable1 - $variable2;
$multiplicacion =$variable1 * $variable2;
$division =$variable1 / $variable2;



  echo ("la suma de:".$variable1."+".$variable2."=".$suma."<br>");
  echo ("la resta de:".$variable1."-".$variable2."=".$resta."<br>");
  echo ("la summultiplicacion de:".$variable1."*".$variable2."=".$multiplicacion."<br>");
  echo ("la division de:".$variable1."/".$variable2."=".$division."<br>");

  
  echo("<br>");
  //Respuesta 2
  echo("preguna#2 <br>");
  echo("<br>");
 
  $peso =85;echo("<br>");
  $altura= 1.78;
  $imc = $peso /($altura*$altura);
  echo("<br>");

 

  
  if ($imc <= 18.4){
      echo( "su estatura es:".$altura." su peso es:".$peso);
      echo( "<br> su indice de masa corporal es:".$imc."  insuficiencia de peso");}
  
    else if($imc <= 18.5 && $imc <=24.9){
      echo("<br> su indice de masa corporal es" .$imc."peso normal <br> ");}
    else if($imc<=25 && $imc<=29.9){
      echo("<br> su indice de masa corporal es" .$imc."Sobrepeso <br>");}
    else  if($imc<=30&&$imc<=34.9){
      echo("<br> su indice de masa corporal es" .$imc."Obecidad1 <br>");}
    else   if($imc<=35&& $imc<= 39.9){
      echo("<br> su indice de masa corporal es" .$imc."Obesidad2 <br>");}       
    else  if ($imc>=40){
      echo("<br> su indice de masa corporal es" .$imc."esta muy gordito <br>");}

    

echo("<br>..................................");
echo("<br>");
// Respuesta 3
echo("preguna#3 <br>");
$cantidadZapatos = 5 ;
$costoneto = 150000 ;
$totalCompra = ($cantidadZapatos * $costoneto) ;
$valordescuento=150000;
$descuento = 0.20;
$valorPagar = ($cantidadZapatos * $costoneto)-$valordescuento;


if ( $cantidadZapatos == 3 ) {
  $valordescuento = $totalCompra * 0.10 ;
    $descuento = 10 ;
} else  if ( $cantidadZapatos > 3 && $cantidadZapatos <= 5 ) {
  $valordescuento = $totalCompra * 0.20 ;
    $descuento = 20 ;
} else  if ( $cantidadZapatos > 5 ) {
  $valordescuento = $totalCompra * 0.40 ;
    $descuento = 40 ;
}
echo ( "Cantidad Vendida:" . $cantidadZapatos .  "<br> Costo Neto:" . $totalCompra .
"<br> Descuento es:" . $descuento . "% <br> Valor del Descuento:" . $valordescuento . "<br> Valor a Pagar es:" . $valorPagar );

// respuesta 4 
echo("<br>..................................");
echo ( "<br>" );
echo ( "pregunta 4 <br>" );
echo ( "<br>" );

$CantidadHoras = 36 ;
$valorHora = 20000 ;
$salario = $CantidadHoras * $valorHora ;
$valorHoraExtra = 25000 ;
$salarioExtra = $CantidadHoras * $valorHoraExtra ;

if ( $CantidadHoras = 36 ) {
    echo ( "Para un total de 36 horas trabajadas, se obtiene un valor de hora de:" . $valorHora );
    echo ( "<br>" );
    echo ( "El salario devengado a la semana es de:" . $salario );
        
} elseif( $CantidadHoras > 40 ) {
    echo ( "Para un total de 36 horas trabajadas, se obtiene un valor de hora de:" . $valorHoraExtra );
    echo ( "<br>" );
    echo ( "El salario devengado a la semana es de:" . $salario );
}

echo ( "<br>" );

// respuesta 5
echo ( "pregunta 5 <br>" );
echo("<br>.................................");
echo ( "<br>" );
echo  "Los usuarios registrados en la sucursal : <br> <br>" ;
$usuario1 = "Jimin -" ;
$usuario2 = "carolina meza -" ;
$usuario3 = "Pablo alboran -" ;

$usuario4 = "Aron marquez -" ;
$usuario5 = "San pedro bolibar -" ;
$telefono1 = "3112345656 -" ;
$telefono2 = "3034563421 -" ;
$telefono3 = "9999999 -" ;
$telefono4 = "3115673212 -" ;
$telefono5 = "3124564534 -" ;

$direccion1 = "Cll 50  sur # 10B-12 -" ;
$direccion2 = "Cll 100B # 10-23 -" ;
$direccion3 = "Cll 6 # 123-65 -" ;
$direccion4 = "Cll 35 sur # 355-27 -" ;
$direccion5 = "Cr 37 # 7-20 -" ;

$salario1 = 4320000 ;
$salario2 = 3580000 ;
$salario3 = 2250000 ;
$salario4 = 3800000 ;
$salario5 = 5490000 ;

echo  $usuario1 . $telefono1 . $direccion1 . "$" . $salario1 . "<br>" ;
echo  $usuario2 . $telefono2 . $direccion2 . "$" . $salario2 . "<br>" ;
echo  $usuario3 . $telefono3 . $direccion3 . "$" . $salario3 . "<br>" ;
echo  $usuario4 . $telefono4 . $direccion4 . "$" . $salario4 . "<br>" ;
echo  $usuario5 . $telefono5 . $direccion5 . "$" . $salario5 . "<br>" ;

$sumatoriaSalarios = $salario1 + $salario2 + $salario3 + $salario4 + $salario5 ;
$salariosSucursalB = 20000000 ;
$salariosSucursalC = 15000000 ;
echo  "<br>" ;
if ( $sumatoriaSalarios > $salariosSucursalB && $sumatoriaSalarios > $salariosSucursalC ) {
    echo  "El mayor ingreso lo tiene la sucursal A" ;
}
else if ( $salariosSucursalB > $sumatoriaSalarios && $salariosSucursalB > $salariosSucursalC ){
    echo  "El mayor ingreso lo tiene la sucursal B" ;
}
else
{
    echo  "El mayor ingreso lo tiene la sucursal C" ;
}
     
echo("<br>..................................");
echo("<br>");
//respuesta 6
echo("preguna#6 <br>");
echo("<br>..................................");
echo("<br>");

 $arreglo=array(2,4,6,8,10,12,14,16,18,20);
 foreach($arreglo as $clave=>$valor){
 echo("<br> el numero:".$clave.".par es:".$valor);}

echo("<br>..................................");
echo("<br>");
// Respuesta 7.
echo("preguna#7 <br>");


echo("<br>  El salpicon esta Compusto por:");
$arreglo=array('Dulce 1'=>"Banano",'Dulce 2'=>"Manzana",'Dulce 3'=>"Durazno",'Acido 1'=>"Piña",
'Acido 2'=>"Naranja",'Acido 3'=>"lulo");
 echo("<br>");
 print_r($arreglo);
 echo("<br>..................................");
 echo("<br>");





//Respuesta 8.

echo("<br>");
echo("pregunta 8 <br>");
echo("<br>");

$edad=calcularEdad(1991,2020);
echo("usted nacio en 1991 usted tiene: ".$edad. " años");
echo("<br>");
$edad=calcularEdad(1995,2020);
echo(" usted nacio en 1995 usted tiene: ".$edad. " años");
echo("<br>");
$edad=calcularEdad(1987,2020);
echo("usted nacio en 1987 usted tiene: ".$edad. " años");
 

 // Respuesta 9
 
 echo ( "<br>" );
 echo ( "pregunta 9 <br>" );
 echo ( "<br>" );
 $biotipo = biotipo ( 1.65 );
 echo ( "Para una altura de 1.65 su biotipo es:" . $biotipo );
 echo ( "<br>" );
 $biotipo = biotipo ( 1.79 );
 echo ( "Para una altura de 1.79 su biotipo es:" . $biotipo );
 echo ( "<br>" );
 $biotipo = biotipo ( 1.95 );
 echo ( "Para una altura de 1.95 su biotipo es:" . $biotipo );
 echo ( "<br>" );

 // Respuesta 10



 echo ( "<br>" );
 echo ( "pregunta 10 <br>" );
 echo ( "<br>" );
 echo ( "<br>" );
$jugadores = array (
    'jugador1' => array ( 'nombre' => "Radamel Falcao" ,calcularEdad(1986,2020), 'Posicion' => "delantero" , biotipo(1.76)),
        
    'jugador2' => array ( 'nombre' => "James Rodriguez" ,calcularEdad(1991,2020), 'Posicion' => "Medio Campista" ,biotipo(1.81)),
        
    'jugador3' => array ( 'nombre' => "Juan Cuadrado" , calcularEdad(1988,2020) , 'Posicion' => "delantero" , biotipo(1.78)),
        
    'jugador4' => array ( 'nombre' => "Yerri Mina" , calcularEdad(1994,2020) , 'Posicion' => "Defensor" , biotipo(1.95)),
        
    'jugador5' => array ( 'nombre' => "David Ospina" ,calcularEdad(1988,2020), 'Posicion' => "Arquero" ,biotipo(1.83)),
        
    'jugador6' => array ( 'nombre' => "Davinson sanchez",calcularEdad(1996,2020) , 'Posicion' => "Defensor" , biotipo(1.87)),
        
    'jugador7' => array ( 'nombre' => "Duvan Zapata" ,calcularEdad(1991,2020) , 'Posicion' => "Delantero" ,  biotipo(1.86)),
        
    'jugador8' => array ( 'nombre' => "Wilmar Barrios" ,calcularEdad(1993,2020), 'Posicion' => "Medio Campista" , biotipo(1.78)),
        
    'jugador9' => array ( 'nombre' => "Mateos Uribe" , calcularEdad(1991,2020), 'Posicion' => "Medio Campista" , biotipo(1.80)),
        
);

    foreach( $jugadores as $clavesArreglosUnidimencionales => $arreglosUnidimencionales ) {
    echo  ( "<br>" );
    echo ( $clavesArreglosUnidimencionales );
    
    echo ( "<br>" );
    
    

    foreach( $arreglosUnidimencionales  as $clavesArreglosUnidimencionales=>  $valor ) {
        
        echo ( $valor );
        echo ( "<br>" );
        

       
        
        

    }

}

 
 
 
 


 


  
 


