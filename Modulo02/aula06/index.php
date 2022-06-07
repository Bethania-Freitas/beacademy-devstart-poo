<?php


include 'vendor/autoload.php';


use Dompdf\Dompdf;

$html = '';

for ($n = 0; $n < 10; $n++){
    $html .= 'ó o pente <br>';
}


// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml('<h1>Este é meu primeiro PDF gerado com PHP :) </h1>' . $html);

$dompdf->render();
$dompdf->stream();