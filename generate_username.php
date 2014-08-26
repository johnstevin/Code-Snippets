<?php
//===========================
//PHP随机生成用户名和随机密码
//===========================

//自动为用户随机生成用户名(长度6-13) 

function create_password($pw_length = 4){ 

    $randpwd = ''; 

    for ($i = 0; $i < $pw_length; $i++){ 

        $randpwd .= chr(mt_rand(33, 126)); 

    } 

    return $randpwd; 

} 

function generate_username( $length = 6 ) { 

    // 密码字符集，可任意添加你需要的字符 

    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_ []{}<>~`+=,.;:/?|'; 

    $password = ''; 

    for ( $i = 0; $i < $length; $i++ ) 

    { 

        // 这里提供两种字符获取方式 

        // 第一种是使用substr 截取$chars中的任意一位字符； 

        // 第二种是取字符数组$chars 的任意元素 

        // $password .= substr($chars, mt_rand(0, strlen($chars) - 1), 1); 

        $password .= $chars[ mt_rand(0, strlen($chars) - 1) ]; 

    } 

    return $password; 

} 

// 调用该函数 

$userId = 'user'.generate_username(6); 

$pwd = create_password(9); 

?>
