<?php
$access_token = '1XvzTYDBQ/aCf6BZ/0JtbhHzdeAJzgCbTehPsx+n+eyXBiyPJw9tHCd6ktqqUnj0vorYI39lJux/oGfscxvSS72Gln1UO8kUfL1+nthpyj4fZPSCBMkRup7+5pajYZ9Js/Jf16s2vjtIzHEuME6OSwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
