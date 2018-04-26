<!doctype html>
<html lang="en">
<head>
    <title>论坛内容</title>
    <?php
    include('../view/shared/_style.php');
    ?>
</head>
<body>

<!--header-->
<?php
include('../view/shared/_header.php');
?>
<!--/header-->

<!--main-->
<?php

if (!empty($_GET['act'])) {
    $act = $_GET['act'];
} else {
    $act = 'contents';
}
if($act =="contents"){
    include ('../model/posts.php');
    include('../view/forum/contents.php');
}

if($act =="create"){
    include('../view/forum/create.php');
}

else if($act =="comments"){
    include ('../model/posts.php');
    include ('../model/comments.php');
    include ('../model/classifys.php');

//    print_r(get_content('10'));die;
    include('../view/forum/comments.php');
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