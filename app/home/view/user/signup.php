<!doctype html>
<html lang="en">
<head>
    <?php
    include('../view/shared/_style.php');
    ?>
    <title>注册</title>
</head>
<body>
<?php

    include('../view/shared/_header.php')
?>

<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="panel panel-default signup-box">
                        <div class="panel-heading">
                            <h1 class="panel-title text-center" style="font-size: 20px">欢迎注册</h1>
                        </div>
                        <div class="panel-body ">
                    <div class="col-sm-12">
                        <?php
                            if(!empty($_COOKIE['errors'])){
                                echo '<div class="alert alert-danger" role="alert">'.$_COOKIE['errors'].'</div>';
                            }
                        ?>
                    </div>
                    <form class="form-horizontal form-box" method="post" action="user.php?act=store">

                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">用户名</label>
                            <div class="col-sm-10">
                                <input type="text" name="name" class="form-control" id="name" placeholder="name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail4" class="col-sm-2 control-label">手机号</label>
                            <div class="col-sm-10">
                                <input type="text" name="mobile" class="form-control" id="inputEmail4" placeholder="mobile">
<!--                                <span class="prompt text-center" style="display: inline-block; text-align: center;line-height: 14px;font-size: 12px"></span>-->
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail5" class="col-sm-2 control-label">邮箱</label>
                            <div class="col-sm-10">
                                <input type="text" name="email" class="form-control" id="inputEmail5" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">密码</label>
                            <div class="col-sm-10">
                                <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword4" class="col-sm-2 control-label">确认密码</label>
                            <div class="col-sm-10">
                                <input type="password" name="repassword" class="form-control" id="inputPassword4" placeholder="rePassword">
                            </div>
                        </div>
                        <!--<div class="form-group">
                            <div class="col-sm-8"></div>
                            <div class="col-sm-4">
                                <span>已有账号？<a href="session.php">现在登录</a></span>
                            </div>
                        </div>-->
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-success text-center">注册</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>

        </div>
        <div class="col-md-3"></div>
    </div>
</div>
<?php
include('../view/shared/_footer.php')
?>
<script>

    // $.get('./get.php',function(data){
    //     console.log(data)
    // })

    $(function){
        $('#name').onblur(function(){

            let val = $('#name').val();
            let reg = /^[0-9a-zA-Z\_]+$/;
            let flag =reg.test();

            if(val == ""){
                $('#name').next('.prompt').html('');
                return;
            }

            if(flag){
                let data = {
                    name:val;
                }
                $.ajax({
                    data:data,
                    url:,
                    async:true,
                    dataType:'json',
                    success:function(res){


                    }

                })
            }






        })
    }
</script>
</body>
</html>