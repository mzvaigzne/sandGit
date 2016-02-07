<?php

$text = 'Viens Divi Trīss';
$atdalitajs = ' ';
$text = explode($atdalitajs, $text);
$arrayCount = count($text);
echo $arrayCount,'<br>';
for ($counter = 1; $counter <= $arrayCount; $counter++) {


}
foreach ($text as $key => $value) {
    if ($value == ' ' || $value == '  ' || $value == '   ') {
        
    } else {
        $key = $key++;
        echo $value . "<br>", $key, '<br/>';
    }
}
echo '<pre>';

echo '</pre>';
