<?php


class metodosRemuneracion
{

    public function calcularRemuneracion($tipo_remuneracion,$dias,$horas,$semana,$limite,$sueldo_basico,$comision,$dec_tercero,$dec_cuarto,$fondo_reserva,$otros)
    
    {
        
        //semana
        if( $tipo_remuneracion){
            

        }
       
        $insertar=0;

        if ($insertar) {
            $resp = "Alumno Insertado";
            $arry = array(
                "success" => true,
                "respuesta" => $resp,
                "tipo" => 0
            );
        } else {
            $resp = "No Insertado";

            $arry = array(
                "success" => False,
                "respuesta" => $resp,
                "tipo" => 0
            );
        }
        echo json_encode($arry);
    }

    
}

?>