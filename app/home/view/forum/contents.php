<div class="container">
    <div class="row">
<div class="col-md-12">
    <?php
        if(!empty($_COOKIE['msg'])){
            echo '<div class="alert alert-success" role="alert">'.$_COOKIE['msg'].'</div>';
        }
    ?>
</div>

    </div>
</div>

<?php
    include('../view/forum/_part_header.php');
?>
<div class="container">

    <div class="panel panel-primary" id="hot">
        <div class="panel-heading">
            <h3 class="panel-title">热帖</h3>
        </div>
        <div class="panel-body">
            <ul class="list-group">
                <?php
                $datas = get_post('热帖',4,'');

                foreach ($datas as $k => $v){

                    echo '<li class="list-group-item"><a href="forum.php?act=comments&status=4&classify=热帖&post_id='
                        .$v['id'].'">'.$v['content'].'</a></li>';
                }
                ?>
            </ul>
        </div>
    </div>

    <div class="panel panel-danger" id="best">
        <div class="panel-heading">
            <h3 class="panel-title">精选帖</h3>
        </div>
        <div class="panel-body">
            <ul class="list-group">
                <?php
                    $datas = get_post('精选帖',3,'');

                    foreach ($datas as $k => $v){

                        echo '<li class="list-group-item"><a href="forum.php?act=comments&status=3&classify=精选帖&post_id='
                            .$v['id'].'">'.$v['content'].'</a></li>';

                    }
                ?>
            </ul>
        </div>
    </div>

    <div class="panel panel-info" id="class">
        <div class="panel-heading">
            <h3 class="panel-title">选课</h3>
        </div>
        <div class="panel-body">
            <ul class="list-group">
                <?php
                $datas = get_post('选课',1,'');

                foreach ($datas as $k => $v){

                        echo '<li class="list-group-item"><a href="forum.php?act=comments&status=1&classify=选课&post_id='
                            .$v['id'].'">'.$v['content'].'</a></li>';

                    }
                ?>
            </ul>
        </div>
    </div>

    <div class="panel panel-success" id="movie">
        <div class="panel-heading">
            <h3 class="panel-title">电影</h3>
        </div>
        <div class="panel-body">
            <ul class="list-group">
                <?php
                    $datas = get_post('电影',1,'');
                    foreach ($datas as $k => $v){

                        echo '<li class="list-group-item"><a href="forum.php?act=comments&status=1&classify=电影&post_id='
                            .$v['id'].'">'.$v['content'].'</a></li>';
                    }
                ?>
            </ul>
        </div>
    </div>

    <div class="panel panel-danger" id="exam">
        <div class="panel-heading">
            <h3 class="panel-title">考试</h3>
        </div>
        <div class="panel-body">
            <ul class="list-group">
                <?php
                    $datas = get_post('考试',1,'');
                    foreach ($datas as $k => $v){
                        echo '<li class="list-group-item"><a href="forum.php?act=comments&status=1&classify=考试&post_id='
                            .$v['id'].'">'.$v['content'].'</a></li>';
                    }
                ?>
            </ul>
        </div>
    </div>

    <div class="panel panel-success" id="found">
        <div class="panel-heading">
            <h3 class="panel-title">失物招领</h3>
        </div>
        <div class="panel-body">
            <ul class="list-group">
                <?php
                $datas = get_post('失物招领',1,'');
                foreach ($datas as $k => $v){

                    echo '<li class="list-group-item"><a href="forum.php?act=comments&status=1&classify=失物招领&post_id='
                        .$v['id'].'">'.$v['content'].'</a></li>';
                }
                ?>
            </ul>
        </div>
    </div>

</div>