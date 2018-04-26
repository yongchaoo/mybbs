<?php
/**
 * Created by PhpStorm.
 * User: esowa
 * Date: 2017/12/4
 * Time: 15:02
 */

function get_classify($post_id){
    include('../../common/database/config.php');

    $sql = 'SELECT c.content FROM classifys as c 
            LEFT JOIN posts as p on c.id = p.classify_id
            where p.id = "'.$post_id.'"';
    $res = mysqli_query($conn,$sql);

    $res_array = mysqli_fetch_assoc($res);

    return $res_array;
}