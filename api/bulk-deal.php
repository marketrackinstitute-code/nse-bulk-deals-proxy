<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://www.nseindia.com/api/block-deals");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64)",
    "Accept: application/json",
    "Referer: https://www.nseindia.com/"
]);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
