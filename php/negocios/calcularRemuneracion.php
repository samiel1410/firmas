<?php  
require_once  ("../../php/clases/calculo.php");
//Tipo de remuneracion 
// 1 = horas
//2= dias
//3=semana
$tipo_remuneracion=1;
$dias = 0;
$horas=0;
$semana=1;
$limite = 2;
$sueldo_basico=500;
$comision =0;
$dec_tercero=0;
$dec_cuarto=0;
$fondo_reserva =41.65;
$otros=0;
$tipo_remuneracion=1;
$dias = 0;
$horas=0;
$semana=1;
$limite = 2;
$sueldo_basico=500;
$comision =0;
$dec_tercero=0;
$dec_cuarto=0;
$fondo_reserva =41.65;
$otros=0;




$ver= new metodosRemuneracion();
$ver->calcularRemuneracion($tipo_remuneracion,$dias,$horas,$semana,$limite,$sueldo_basico,$comision,$dec_tercero,$dec_cuarto,$fondo_reserva,$otros);
?>
