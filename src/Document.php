<?php

namespace Src;

class Document
{
    public function open()
    {
        var_dump('El documento está abierto');
    }

    public function close()
    {
        var_dump('El documento está cerrado');
    }

    public function save()
    {
        var_dump('El documento se ha guardado');
    }
}
