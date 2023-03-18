<?php

namespace Src\Api;

class PayPalApi
{
    public function getClientInfo()
    {
        var_dump('Ejecutando Regla de Negocio para obtener informacion del cliente de PayPal...');
    }

    public function clientPayment()
    {
        var_dump('Ejecutando Regla de Negocio para cobrar al cliente de PayPal...');
    }
}
