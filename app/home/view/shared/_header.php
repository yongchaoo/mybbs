
    <nav class="navbar  navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <a href="index.php" class="navbar-brand logo">
                    MyBBS
                </a>
            </div>

            <ul class="nav navbar-nav navbar-right">
                <li>
                    <?php
                    if(!empty($_SESSION['login_status'])){
                            echo '<a href="">欢迎 '.$_SESSION['email'].'</a>';
                            echo '<a href="session.php?act=logout">退出登录</a>';
                        }else{
                            echo '<a href="session.php">登录</a>';
                        }
                    ?>
                </li>
            </ul>
        </div>
    </nav>
