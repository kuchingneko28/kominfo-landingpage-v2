<?php

function getJson($url)
{
    $ch = curl_init();

    curl_setopt_array($ch, [
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
    ]);

    $res = curl_exec($ch);
    $hasil = json_decode($res, true);
    curl_close($ch);

    return $hasil;
}
