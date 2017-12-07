<?php

//require 'functions.php';

$ch = curl_init("https://api.instagram.com/v1/users/self/media/recent?access_token=609193608.0cebd38.a1404636d6064f009730a01bba53103d");
$fileName = "feed.json";
$fp = fopen($fileName, "w");

curl_setopt($ch, CURLOPT_FILE, $fp);
curl_setopt($ch, CURLOPT_HEADER, 0);

curl_exec($ch);
curl_close($ch);
fclose($fp);

/*
$keywords = ['pattern', 'sewing', 'knitting'];
$content = file_get_contents($fileName);

$keywords = count_words($keywords, $content);

foreach ($keywords as $keyword => $amount) {
    display_search_results($keyword, $amount);
}


curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.instagram.com/v1/users/self/media/recent?access_token=609193608.0cebd38.a1404636d6064f009730a01bba53103d",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_FILE => $fp,
    CURLOPT_HEADER => 0,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
        "Cache-Control: no-cache",
        "Postman-Token: 85bf6a13-a260-ae1c-aefc-cf9014b7dd00"
    ),
));
*/

