<?php
    //cau hinh ket noi
    $db_localhost="localhost";
    $db_user="root";
    $db_pass="";
    $db_data="basic_php";

    $cookie_name = 'siteAuth';
    $cookie_time = 30; // 30 days

    $dbconect=mysqli_connect($db_localhost,$db_user,$db_pass,$db_data) or die('ket noi khong thanh cong');
    mysqli_set_charset($dbconect,'utf8');

?>