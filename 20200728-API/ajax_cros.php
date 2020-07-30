<?php

$curl= curl_init();

curl_setopt($curl, CURLOPT_USERAGENT,"Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.71 Safari/537.36");

curl_setopt($curl, CURLOPT_SSL_VERIFYPEER,false);

curl_setopt($curl,CURLOPT_URL,"https://data.ntpc.gov.tw/api/datasets/71CD1490-A2DF-4198-BEF1-318479775E8A/json/preview");

$result=curl_exec($curl);

// var_dump($result);

curl_close($curl);

// echo $result;