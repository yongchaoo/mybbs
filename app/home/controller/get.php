<?php

include('../../common/database/config.php');
$sql ="select * from users where id=8";
$res = mysqli_query($conn,$sql);
$res_array = mysqli_fetch_assoc($res);

echo json_encode($res_array);