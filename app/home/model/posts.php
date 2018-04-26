<?php
/**
 * Created by PhpStorm.
 * User: esowa
 * Date: 2017/12/4
 * Time: 10:44
 */


function get_post($classify,$status,$post_id){
    include('../../common/database/config.php');

    if($post_id !=''){
        $sql = 'SELECT p.id,p.content,p.user_id FROM posts as p 
            where p.id ='.$post_id;
    }else{
        if($status==1){

            $sql = 'SELECT p.id,p.content,p.user_id FROM posts as p 
            LEFT JOIN classifys as c on p.classify_id = c.id
            where p.status > 0 AND c.content = "'.$classify.'"';

        }else{

            $sql = 'SELECT p.id,p.content,p.user_id FROM posts as p 
            LEFT JOIN classifys as c on p.classify_id = c.id
            where p.status='.$status;

        }
    }

    $res = mysqli_query($conn,$sql);
    if($res){
        $res_array = mysqli_fetch_all($res, MYSQLI_ASSOC);
    }else{
        $res_array = '';
    }

    return $res_array;
}