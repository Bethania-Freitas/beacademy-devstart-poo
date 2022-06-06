<?php

include 'Usuario.php';
include 'Cliente.php';

include 'Gestor.php';
include 'GestorGeral.php';

$c1 = new Cliente('chiquim@email.com.br', '123456');
$c1->setNome('Chiquinho');
$c1->setDataCadastro('01/01/2019');

$g1 = new Gestor('zezim@email.com.br', '654321', 6000);
$g1->setNome('Zezinho');

$gg1 = new GestorGeral('maria@email.com', '1w2e3r', 9000);

// $us = new Usuario('hacker@email.com', '111111');



var_dump($c1);
var_dump($g1);
var_dump($gg1);

