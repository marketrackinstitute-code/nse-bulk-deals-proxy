<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

// Fetch data from NSE India API
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://www.nseindia.com/report-detail/display-bulk-and-block-deals");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36",
    "Accept: application/json"
]);

$response = curl_exec($ch);
curl_close($ch);

echo $response;
