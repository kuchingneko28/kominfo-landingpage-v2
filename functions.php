<?php

function getJson($url){
$ch = curl_init();

curl_setopt_array($ch, [
CURLOPT_URL => $url,
CURLOPT_RETURNTRANSFER => 1,
]);

$res = curl_exec($ch);
$hasil = json_decode($res,true);


return $hasil;

curl_close($ch);
}