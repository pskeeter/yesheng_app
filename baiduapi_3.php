<?php
    $ch = curl_init();
    $url = 'http://apis.baidu.com/showapi_open_bus/showapi_joke/joke_text?page='.$_GET["page"];
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