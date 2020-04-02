<?php

$file = "user.json";
$data = file_get_contents($file);

$obj = json_decode($data);
$arr = json_decode($data, true);

print_r($obj);
