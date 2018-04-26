<?php
/**
 * Created by PhpStorm.
 * User: esowa
 * Date: 2017/12/4
 * Time: 14:15
 */

function get_user($user_name){
    include('../../common/database/config.php');

    $sql = 'SELECT id,name from users where name ="'.$user_name.'"';
    $res = mysqli_query($conn,$sql);
    $res_array = mysqli_fetch_assoc($res, MYSQLI_ASSOC);

    return $res_array;
}