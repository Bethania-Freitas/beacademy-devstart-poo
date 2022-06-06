<?php

include 'Validar.php';
include 'ValidarBr.php';
include 'ValidarUs.php';

$cpf ='12312312312';
$doc = '12312312312345';

$br = new ValidarBr();

$br->validarDocumento($cpf);

$us = new ValidarUS();

$us->validarDocumento($doc);
