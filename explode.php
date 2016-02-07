<?php
$arrayStrings = 'viens(seperators)divi(seperators)trīss';
$arrayStrings= explode('(seperators)', $arrayStrings);
echo '<pre>';
print_r( $arrayStrings);
echo '</pre>';
foreach ($arrayStrings as $key => $strings){
    echo  $strings, ' ir pozīcijā ', $key,'<br>';
}