<?php

$serijos_pavadinimas = $_POST['serijos_pavadinimas'];
$serijos_numeris = $_POST['serijos_numeris'];
$data = $_POST['data'];
$pardavejas = $_POST['pardavejas'];
$pirkejas = $_POST['pirkejas'];
$saskaita_israse = $_POST['saskaita_israse'];
$papildoma_informacija = $_POST['papildoma_informacija'];

$pavadinimas = $_POST['pavadinimas'];
$matas = $_POST['matas'];
$kiekis = $_POST['kiekis'];
$kaina = $_POST['kaina'];
$suma = $_POST['suma'];

$tipas = $_POST['tipas'];
$pvm_pasirinkimas = $_POST['pvm_pasirinkimas'];
// somewhere early in your project's loading, require the Composer autoloader
// see: http://getcomposer.org/doc/00-intro.md
require 'vendor/autoload.php';

// include autoloader
require_once 'dompdf/autoload.inc.php';

// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();

$html = '
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<style>
* {
    box-sizing: border-box;
   }
  body { font-family: DejaVu Sans, sans-serif; }
  .column {
    float: left;
    width: 50%;
  }
  .column-1 {
    width: 7%;
    text-align: left;
  }
  .column-5 {
    width: 33%;
  }
  .column-2 {
    width: 15%;
    text-align: right;
  }
  /* Clear floats after the columns */
  .row:after {
    content: "";
    display: table;
    clear: both;
  }
  .pavadinimas-row h6 {
      margin: 5px;
  }
</style>
';
if(!empty($tipas) && $tipas == "true") {
    $html .= '<title>PVM Sąskaita faktūra</title>';
} else {
    $html .= '<title>Sąskaita faktūra</title>';
}

$html .='</head>
<body>';

if(!empty($tipas) && $tipas == "true") {
    $html .= '<h2 style="text-align: center; margin-bottom: 10px;">PVM SĄSKAITA FAKTŪRA</h2>';
} else {
    $html .= '<h2 style="text-align: center; margin-bottom: 10px;">SĄSKAITA - FAKTŪRA</h2>';
}

$html .='
  <h3 style="margin-top: 0; font-size: .8rem; text-align: center;">Serija ' . $serijos_pavadinimas . ' Nr. ' . $serijos_numeris . '</h3>
  <p style="text-align: center;">' . $data . '</p>

  <div class="row" style="margin-top: 3rem; margin-bottom: 2rem;">
        <div class="column">
            <h4 style="margin:0 !important; padding:0 !important;">Pardavėjas:</h4>
            <p style="margin-top: 5px; white-space: pre-wrap;">' . $pardavejas . '</p>
        </div>
        <div class="column">
            <h4 style="margin:0 !important; padding:0 !important;">Pirkėjas:</h4>
            <p style="margin-top: 5px; white-space: pre-wrap;">' . $pirkejas . '</p>
        </div>
  </div>

  <div class="row pavadinimas-row">
        <div class="column column-1">
            <h6>Nr.</h6>
        </div>
        <div class="column column-5">
            <h6>Paslaugos ar prekės pavadinimas</h6>
        </div>
        <div class="column column-2">
            <h6>Mato vnt.</h6>
        </div>
        <div class="column column-2">
            <h6>Kiekis</h6>
        </div>
        <div class="column column-2">
            <h6>Kaina (€)</h6>
        </div>
        <div class="column column-2">
            <h6>Suma (€)</h6>
        </div>
  </div>
  <hr/>';
  
  $i=0;
  $j=1;
  foreach ($pavadinimas as $pavadinim) { 
    $html.= '
    <div class="row pavadinimas-row">
        <div class="column column-1">
            <p style="font-size: 10px;">' . $j . '</p>
        </div>
        <div class="column column-5">
            <p style="font-size: 10px;">' . $pavadinim . '</p>
        </div>
        <div class="column column-2">
            <p style="font-size: 10px;">' . $matas[$i] . '</p>
        </div>
        <div class="column column-2">
            <p style="font-size: 10px;">' . $kiekis[$i] . '</p>
        </div>
        <div class="column column-2">
            <p style="font-size: 10px;">' . $kaina[$i] . '</p>
        </div>
        <div class="column column-2">
            <p style="font-size: 10px;">' . $suma[$i] . '</p>
        </div>
    </div>
    '; 
    $i++;
    $j++;
  }
  $html .= '<hr/>';

  $is_viso = 0;
  foreach($suma as $numberis) {
    $is_viso+=$numberis;

  }

  if(is_numeric( $is_viso ) && floor( $is_viso ) != $is_viso) {

  } else {
      $is_viso = $is_viso . ".00"; 
  }


if(!empty($tipas) && $tipas == "true") {
    if($pvm_pasirinkimas == 21) {
        $pvm_dydis = $is_viso / 1.21;
    } else if($pvm_pasirinkimas == 9) {
        $pvm_dydis = $is_viso / 1.09;
    } else if($pvm_pasirinkimas == 5) {
        $pvm_dydis = $is_viso / 1.05;
    }
    $pvm_dydis_galutinis = $is_viso - $pvm_dydis;
    $pvm_dydis_galutinis = number_format((float)$pvm_dydis_galutinis, 2, '.', '');
    $html .='
<div class="row pavadinimas-row">
    <div class="column column-1">
        
    </div>
    <div class="column column-5">
        
    </div>
    <div class="column column-2">
      
    </div>
    <div class="column column-2">
    
    </div>
    <div class="column column-2">
        <h6>PVM('.$pvm_pasirinkimas.'%)</h6>
    </div>
    <div class="column column-2">
        <h6>'.$pvm_dydis_galutinis.'</h6>
    </div>
</div>
'; }

$html .='
  <div class="row pavadinimas-row">
        <div class="column column-1">
            
        </div>
        <div class="column column-5">
            
        </div>
        <div class="column column-2">
          
        </div>
        <div class="column column-2">
        
        </div>
        <div class="column column-2">
            <h6>Iš viso</h6>
        </div>
        <div class="column column-2">
            <h6>'.$is_viso.'</h6>
        </div>
  </div>
  ';
  
$html.='
  <p style="margin-top: 2rem; white-space: pre-wrap;">Papildoma informacija: ' . $papildoma_informacija . '</p>
  <p>Sąskaitą išrašė: ' . $saskaita_israse . '</p>

</body>
</html>
';

$dompdf->loadHtml($html);

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();

?>