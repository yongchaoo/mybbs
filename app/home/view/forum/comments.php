<div class="container">

    <nav class="navbar navbar-default">
        <p class="navbar-text comments-header" >
            <?php
                if(isset($_GET['post_id'])){
                $post_id = $_GET['post_id'];
                $post_content = get_post('','',$post_id);

                    if(!empty($post_content)){
                        echo  $post_content[0]['content'];
                    }
                }
            ?>
        </p>
    </nav>
    <?php
        if(!empty($_COOKIE['msg'])){
            echo '<div class="alert alert-success">'.$_COOKIE['msg'].'</div>';
        }
    ?>
    <ul class="list-group">
        <?php
            $datas ="";
            if(isset($_GET['post_id'])){
                $post_id = $_GET['post_id'];
                $datas = get_comments($post_id);
//                print_r($datas);die;
            foreach($datas as $k => $v){
                echo '<li class="list-group-item "><p>#'.($k+1).
                    '<span class="glyphicon glyphicon-user"></span> <span class="user_name">'.$v['name'].
                    '</span></p><div class="well"><p class="content">'.$v['content'].
                    '</p></div><p class="comt-date">'.$v['created_time'].'</p> </li>';
            }
            }
        ?>
    </ul>

    <div class="panel panel-default signup-box">
        <div class="panel-heading">
            <h1 class="panel-title" style="font-size: 16px">发布评论</h1>
        </div>
        <div class="panel-body ">
            <?php
                if(!empty($_COOKIE['errors'])){
                    echo '<div class="alert alert-danger">'.$_COOKIE['errors'].'</div>';
                }
            ?>
    <form class="" method="post" action="forum.php?act=com_store">

        <div class="form-group">
            <div class="col-md-12">
                <textarea class="form-control" name="content" id=""  rows="10" placeholder="输入评论"></textarea>
            </div>
        </div>
        <div class="form-group " >
            <div class="col-sm-10 submit-btn-create">
                <button type="submit" class="btn btn-success ">发布</button>
            </div>
        </div>
        <?php
            if(isset($_GET['post_id'])){
                echo '<input type="hidden" name="post_id" value="'.$_GET['post_id'].'">';
            }
        ?>
    </form>

        </div>
        </div>


