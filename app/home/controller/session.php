<?php
/**
 * Created by PhpStorm.
 * User: esowa
 * Date: 2017/12/2
 * Time: 10:28
 */
header("content-type:text/html;charset=utf-8");
include('../../common/database/config.php');
include('../../common/function/function.php');
session_start ();


if (!empty($_GET['act'])) {
    $act = $_GET['act'];
} else {
    $act = 'login';
}

if ($act == 'login'){
    include '../view/session/login.php';
}elseif ($act == 'store'){
    $datas = $_POST;
    if(empty($datas['email'])){
        setcookie("errors","未填邮箱",time()+3);
        header('location:session.php');
    }
    else if(empty($datas['password'])){
        setcookie("errors","未填密码",time()+3);
        header('location:session.php');
    }else{
        $sql ="select id,email,password,name from users where email='".$datas['email']."'";

        $res = mysqli_query($conn,$sql);
        $res_array = mysqli_fetch_assoc($res);
//        echo password_hash('000000',PASSWORD_DEFAULT);
//var_dump($res_array);die;
        if(!$res_array){
            setcookie("errors","该邮箱未注册",time()+3);
            header('location:session.php');
        }else{

            if(password_verify($datas['password'],$res_array['password'])){

                $_SESSION['name'] = $res_array['email'];
                $_SESSION['email'] = $res_array['email'];
                $_SESSION['user_id'] = $res_array['id'];
                $_SESSION['login_status'] = 1;

                setcookie("msg","欢迎回来~",time()+3);
                header('location:index.php');
            }else{
                setcookie("errors","密码错误",time()+3);
                header('location:session.php');
            }
        }

    }

}else if($act == 'logout'){

    $_SESSION['name'] = null;
    $_SESSION['email'] = null;
    $_SESSION['user_id'] = null;
    $_SESSION['login_status'] = null;
    header('location:index.php');
}
