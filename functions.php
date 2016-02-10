<?php
function firstFunction($param) {
    echo "Čau  $param";
}

firstFunction('Matīss');
echo "<hr>";

function divuCiparuSumma($num1, $num2){
    $summa = $num1 + $num2;
    return $summa;
}
echo divuCiparuSumma('1','3');
echo "<hr>";
function resetNumbersToZerro($var){  // & -> Nozīmē ka $x vērtība tiek piešķirta pēc funkcijas izpildes, cik saprotu tiek izmainīta vērtība pasam $x nevis pēc tam (Ja godīgi tad neiepraucu īsti)
    $var = 0;
    }
    $x = 900;
    resetNumbersToZerro($x);
    echo $x;
echo "<hr>";
$gads = date('Y') + 4; 
$menesis = date('F') ;
$dienas = cal_days_in_month(CAL_GREGORIAN, $menesis, $gads);
echo $gads.' gada '. $menesis .' ir '. $dienas .' dienas';