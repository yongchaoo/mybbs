<?php
/**
 * Created by PhpStorm.
 * User: esowa
 * Date: 2017/12/2
 * Time: 18:49
 */
function encodePassword($val){
    return $data = password_hash($val,PASSWORD_DEFAULT );

//    password_verify('123456',$data);
//    return md5($val);
}

function error($error){
    return setcookie('errors',$error,time()+3);
}

function success($success){
    return setcookie('msg',$success,time()+3);
}
