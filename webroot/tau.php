<?php
//$url = "http://dsvn.vn/api/banveweb/SearchTauByGaDiGaDenNgayXP";
//$host = "dsvn.vn";

//curl 'http://dsvn.vn/api/banveweb/SearchTauByGaDiGaDenNgayXP' -X POST -H 'Host: dsvn.vn' -H 'User-Agent: Mozilla/5.0 (Windows NT 10.0; WOW64; rv:41.0) Gecko/20100101 Firefox/41.0' -H 'Accept: application/json, text/plain, */*' -H 'Accept-Language: en-US,en;q=0.5' -H 'Accept-Encoding: gzip, deflate' -H 'Content-Type: application/json;charset=utf-8' -H 'ClientLang: vi' -H 'ClientId: Wm1JaWPO0kgzi2dwbV0mTYsXEn62FLTd' -H 'ApiToken: Wm1JaWPO0kgzi2dwbV0mTYsXEn62FLTd;1444149511164;e12e2f1bbbcbcadde19c918e98109f2d;a33045f66f49b958cd3a9d2336b66649' -H 'Referer: http://www.dsvn.vn/' -H 'Content-Length: 77' -H 'Origin: http://www.dsvn.vn'

$url = "http://dsvn.vn/api/banveweb/GetClientId";
$headers = array(            
            "Content-type: application/json;charset=utf-8",
            "Accept: application/json, text/plain, */*",
            "Cache-Control: no-cache",
            "Pragma: no-cache",
            //"SOAPAction: \"run\"",
            "Content-length: 41",
            //"Authorization: Basic " . base64_encode($credentials)
        ); 
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$output = curl_exec($ch);      
print_r($output);
curl_close($ch);