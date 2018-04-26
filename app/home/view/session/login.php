<!doctype html>
<html lang="en">
<head>
    <?php
    include('../view/shared/_style.php');
    ?>
    <title>登录</title>
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
                    <h1 class="panel-title text-center" style="font-size: 20px">欢迎登录</h1>
                </div>
                <div class="panel-body ">
                    <div class="col-sm-12" style="padding: 0">
                        <?php
                            if(!empty($_COOKIE['errors'])){
                                echo '<div class="alert alert-danger" role="alert">'.$_COOKIE['errors'].'</div>';
                            }
                        ?>
                    </div>

                    <form class="form-horizontal form-box" method="post" action="session.php?act=store">

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
                        <!--<div class="form-group">
                            <div class="col-sm-8"></div>
                            <div class="col-sm-4">
                                <span>还没有账号？<a href="user.php">现在注册</a></span>
                            </div>
                        </div>-->
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-success text-center">登录</button>
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
</body>
</html>