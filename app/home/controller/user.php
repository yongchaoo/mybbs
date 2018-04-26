<?php
/**
 * Created by PhpStorm.
 * User: esowa
 * Date: 2017/12/1
 * Time: 21:01
 */
header("content-type:text/html;charset=utf-8");
include('../../common/database/config.php');
include('../../common/function/function.php');

if (!empty($_GET['act'])) {
    $act = $_GET['act'];
} else {
    $act = 'signup';
}

if ($act == 'signup') {
    include '../view/user/signup.php';
}
elseif($act == 'store'){
    $datas = $_POST;
    if(empty($datas['name'])){
        setcookie("errors","用户名不能为空",time()+3);
        header('location:user.php');
    }
    elseif(empty($datas['password'])){
        setcookie("errors","密码不能为空",time()+3);
        header('location:user.php');
    }
    elseif(empty($datas['email'])){
        setcookie("errors","邮箱不能为空",time()+3);
        header('location:user.php');
    }
    elseif(empty($datas['mobile'])){
        setcookie("errors","手机号不能为空",time()+3);
        header('location:user.php');
    }

    elseif($datas['password'] != $datas['repassword']){
        setcookie("errors","确认密码错误",time()+3);
        header('location:user.php');
    }else{
        $datas['password'] = encodePassword($datas['password']);

        $sql = 'insert into users (name,email,password,mobile) VALUES ("'.$datas['name'].'","'.$datas['email'].'",
    "'.$datas['password'].'","'.$datas['mobile'].'")';

        $res = mysqli_query($conn,$sql);

        if($res){
            session_start ();

            $_SESSION['email'] = $datas['email'];
            $_SESSION['user'] = $datas['name'];
            $_SESSION['login_status'] = 1;

            setcookie("msg","注册成功,自动为您登录~",time()+3);

            header("location:index.php");
        }
    }
}
elseif($act == 'ajax_user'){
    if($_POST){
        
    }

}
