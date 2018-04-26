<!doctype html>
<html lang="en">
<head>
    <title>首页</title>
    <?php
    include('../view/shared/_style.php');
    ?>
</head>
<body>

<!--header-->
<?php
    session_start ();
    include('../view/shared/_header.php');
?>
<!--/header-->

<!--main-->
    <?php

    if (!empty($_GET['act'])) {
        $act = $_GET['act'];
    } else {
        $act = 'index';
    }

    if($act =="contents" || @$_SESSION['login_status']){

        include ('../model/posts.php');
        include('../view/forum/contents.php');

    }
    else if($act=='index'){

        include('../view/shared/_home.php');

    }
    ?>
<!--/main-->

<!--footer-->
<?php
    include('../view/shared/_footer.php');
?>
<!--/footer-->
</body>
</html>