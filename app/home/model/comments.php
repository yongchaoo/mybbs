<?php
/**
 * Created by PhpStorm.
 * User: esowa
 * Date: 2017/12/4
 * Time: 10:44
 */


function get_comments($post_id){
    include('../../common/database/config.php');

    $sql = 'SELECT c.id,c.content,c.created_time,u.name FROM comments as c 
            LEFT JOIN users as u on c.user_id = u.id
            where c.post_id = "'.$post_id.'"';
    $res = mysqli_query($conn,$sql);

    $res_array = mysqli_fetch_all($res, MYSQLI_ASSOC);

    return $res_array;
}