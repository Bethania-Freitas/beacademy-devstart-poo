<?php


declare(strict_types=1);

class ValidarUs implements Validar
{
    public function validarDocumento(string $documento): void
    {
        if (strlen($documento) !== 14){
            die('Documento Inválido');
        }
    }
}
