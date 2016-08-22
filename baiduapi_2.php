<?php
    $ch = curl_init();
    $url = 'http://apis.baidu.com/bbtapi/constellation/constellation_query?consName='.$_GET["name"].'&type='.$_GET["time"];
    $header = array(
        'apikey: e16d0d4739955b34050e93a24f687e11',
    );
    // 添加apikey到header
    curl_setopt($ch, CURLOPT_HTTPHEADER  , $header);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // 执行HTTP请求
    curl_setopt($ch , CURLOPT_URL , $url);
    $res = curl_exec($ch);

//  var_dump(json_decode($res));
echo $res;
?>