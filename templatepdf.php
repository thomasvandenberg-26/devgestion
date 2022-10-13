<?php


include 'views/page/templatepdf.php';


/*  
require_once __DIR__ . '/../../php/vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML(render_php('views/page/templatepdf.php'));
$mpdf->Output();

function render_php($path)
{
    ob_start();
    include($path);
    $var=ob_get_contents(); 
    ob_end_clean();
    return $var;
}
*/