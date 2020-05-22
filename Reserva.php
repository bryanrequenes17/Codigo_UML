<?php


/**
 *
 */
class Reserva
{
    /**
     *
     */
    public function __construct()
    {
    }

    /**
     * @var void
     */
    public $Numero_Dias;

    /**
     * @var void
     */
    public $Fecha;


    /**
     * @var \Cliente
     */
    public $1;



    /**
     * @param void $Numero
     * @param void $string cedula
     * @param void $string Tipo_H
     * @param void $Numero_Dias
     * @param void $date Fecha
     * @param void $double Precio
     */
    public function Agregar_reserva($Numero, $string cedula, $string Tipo_H, $Numero_Dias, $date Fecha, $double Precio):void
    {
        // TODO: implement here
    }

    /**
     * @param void $Numero
     */
    public function Eliminar($Numero):void
    {
        // TODO: implement here
    }

    /**
     * @param void $Estado
     */
    public function Listar($Estado):void
    {
        // TODO: implement here
    }
}
