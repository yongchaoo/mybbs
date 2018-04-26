<?php
/*
 * connect to the database;
 * date:2017-12-2
 * author:yongchaoo
 * 
 * */

$host = "127.0.0.1";
$user = 'root';
$password = "root";
$database = "forum";
$conn = mysqli_connect($host,$user,$password,$database);

if(!$conn){
	echo '<div class="alert alert-danger" role="alert">数据库连接失败</div>';
}
mysqli_query($conn,'set names utf8');

