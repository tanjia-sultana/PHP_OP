<?php
$AssocArr = ["Bangladesh" => "Dhaka","India" => "New Delhi","Pakistan" => "Islamabad","Nepal" => "Kathmandu","China" => "Beijing"];
ksort($AssocArr);
foreach ($AssocArr as $key => $value) {
    echo "$key => $value <br>";
}
//print_r($AssocArr);



?>