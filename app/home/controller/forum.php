<?php
/**
 * Created by PhpStorm.
 * User: esowa
 * Date: 2017/12/2
 * Time: 11:57
 */

include '../../common/database/config.php';
include '../../common/function/function.php';
if(isset($_GET['act'])){
    $act = $_GET['act'];
}else{
    $act = 'other';
}

if($act =='other'||$act =='comments'||$act =='create'){
    include('../view/forum/index.php');

}
else if($act =='store'){

    $datas = $_POST;
    if(empty($datas['content'])){
        setcookie('errors','内容 不能为空',time()+3);
        header('location:forum.php?act=create');
    }elseif(empty($datas['classify'])){
        setcookie('errors','未选分类',time()+3);
        header('location:forum.php?act=create');
    }else {

        $sql_cla = 'select * from classifys where content="'.$datas['classify'].'"';
        $res_cla = mysqli_query($conn,$sql_cla);
        $res_array_cla = mysqli_fetch_assoc($res_cla);

        if(!empty($_COOKIE['user_id'])){
            $user_id = $_COOKIE['user_id'];
        }else{
            $sql_user = 'select id,name from users where name="'.$_COOKIE['user'].'"';

            $res_user = mysqli_query($conn,$sql_user);
            $res_array_user = mysqli_fetch_assoc($res_user);

            if($res_array_user){
                $user_id = $res_array_user['id'];
            }else{
                setcookie('errors','用户不存在',time()+3);
                header('location:forum.php?act=create');
            }
        }

        if($res_array_cla){
            $sql_post = 'insert into posts (content,classify_id,user_id)
                 VALUES ("'.$datas['content'].'","'.$res_array_cla['id'].'","'.$user_id.'")';

            $res_post = mysqli_query($conn,$sql_post);

            if($res_post){
                setcookie('msg','发布成功',time()+3);
                header('location:forum.php');
            }else{
                setcookie('errors','发布失败',time()+3);
                header('location:forum.php?act=create');
            }

        }else{
            setcookie('errors','分类不存在',time()+3);
            header('location:forum.php?act=create');
        }
    }

}
else if($act == 'com_store'){
    $datas = $_POST;
    if(empty($datas['content'])){
        setcookie('errors','内容 不能为空',time()+3);
        header('location:forum.php?act=comments'.$datas['post_id']);
    }else{

        if(!empty($_COOKIE['user_id'])){
            $datas['user_id'] = $_COOKIE['user_id'];
        }else{
            include('../model/users.php');
            $user_name = $_COOKIE['user'];
            $datas['user_id'] = get_user($user_name);
        }

        $datas['created_time'] = date('Y-m-d H:i:s',time());
        $sql ='insert into comments (content,user_id,post_id,created_time)
              VALUES("'.$datas['content'].'","'.$datas['user_id'].'","'.$datas['post_id'].'","'.$datas['created_time'].'")';

        $res = mysqli_query($conn,$sql);
        if(!$res){
            setcookie('errors','发布失败',time()+3);
            header("location:forum.php?act=comments&post_id=".$datas['post_id']."'");
        }else{
            success('发布成功');
            header('location:forum.php?act=comments&post_id='.$datas['post_id']);
        }
    }
}
