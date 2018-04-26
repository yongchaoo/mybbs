
<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h1 class="panel-title" >发帖子</h1>
        </div>
        <div class="panel-body ">

            <div class="col-md-12">
                <?php
                if(!empty($_COOKIE['errors'])){
                    echo '<div class="alert alert-danger">'.$_COOKIE['errors'].'</div>';
                }
                ?>
            </div>
                    <form class="" method="post" action="forum.php?act=store">
                        <div class="form-group" style="margin-bottom: 20px;padding:26px 0;">
                            <label for="inputEmail3" class="col-sm-1 control-label" style="font-size: 18px;padding-left:10px;padding-right:0px">选择话题:</label>
                            <div class="col-sm-8">
                                <select name="classify" id="inputEmail3" class="btn btn-default">
                                    <option value="考试">考试</option>
                                    <option value="选课">选课</option>
                                    <option value="电影">电影</option>
                                    <option value="失物招领">失物招领</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                            <textarea class="form-control" name="content" id=""  rows="10" placeholder="输入话题"></textarea>
                            </div>
                        </div>
                        <div class="form-group " >
                            <div class="col-sm-10 submit-btn-create">
                                <button type="submit" class="btn btn-success ">发布</button>
                            </div>
                        </div>
                    </form>
        </div>
        <div class="panel-footer"></div>
    </div>
</div>