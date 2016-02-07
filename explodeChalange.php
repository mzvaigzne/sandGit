<?php

$text = 'Viens Divi  Trīss';
$atdalitajs = ' ';
$text = explode($atdalitajs, $text);
$arrayCount = count($text);
echo $arrayCount,'<br>';
$number = 1;
while($number<=$arrayCount){
    foreach ($text as $key => $value){
    if ($value != ' '&& $value != NULL) {
        echo '<pre>';
        echo  $number, $value;
        echo '</pre>';
        $number++;

    }else{
        echo " kkas nav ";
    }
}
}
