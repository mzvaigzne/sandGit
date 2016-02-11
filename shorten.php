<?php
$age = 18;
//$old_enought = false;
//if($age >= 18){
//    $old_enought=true;
//}
//if($old_enought === true){
//    echo 'Ir pilngadīgs';
//}else{
//    echo 'Nav pilngadīgs';
//}
// something () ? te ir darbība ja nosacījums ir patiess : Te ja nosacījums nav patiess ;
$old_enought = ($age >= 18) ? (true): (false);
echo ($old_enought===true) ?  "Ir pilngadīgs" :  "Nav pilngadīgs";