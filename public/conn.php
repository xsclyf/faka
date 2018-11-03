<?php
$con = @mysqli_connect("139.199.157.103", "faka", "zhangjun", "faka");//连接数据库   数据库地址，用户名，用户密码，数据
if (!($con)){
    echo "服务器无响应，请联系管理员";
    exit();
}
?>