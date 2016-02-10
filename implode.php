<?php

$names = array('matīss', 'Čaks Noriss', 'Maikls');
print_r($names);
echo '<br>', implode(', ', $names);


// GARAIS CELSH
//$names_str = null;
//foreach ($names as $key => $name) {
//            $names_str .= $name . ',';
//
//    if ($key != (count($names) - 1)) {
//        $names_str .= ',';
//    }
//}
//echo '<br>', $names_str;

echo '<hr>';
$name = 'Matīss';
$email = 'matiss@digilagoon.lv';
$message = 'Paldies par kūkām un boršču';

$data = array(
    'name'             => $name,
    'email'             => $email,
    'message'       => $message
);

print_r ($data);
$fields_sql = '`' . implode('`, `' , array_keys($data)) . '`';
$fields_data = '`' . implode('`, `' , $data) . '`';

$sql = "INSERT INTO ($fields_sql) VALUES ($fields_data)";
echo '<br>';
print_r($sql);