<?php
error_reporting(E_ALL); 
ini_set('display_errors',1); 

$rt_start=isset($_POST['rt_start']) ? $_POST['rt_start'] : '';
$rt_end=isset($_POST['rt_end']) ? $_POST['rt_end'] : '';
$latitude=isset($_POST['latitude']) ? $_POST['latitude'] : '';
$longitude=isset($_POST['longitude']) ? $_POST['longitude'] : '';

    $link = mysqli_connect("localhost", "root","", "com_1");
    if (!$link)
    {
        echo "MySQL 접속 에러 : ";
        echo mysqli_connect_error();
        exit();
    }
    mysqli_set_charset($link,"utf8");

    $res = mysqli_query($link, "SELECT * FROM company_info");
    $last = "SELECT * FROM 'company_info' ORDER BY reg_date DESC limit 1";
    $rst = mysqli_query($link, $last);

    if ($rst === null) 
    {
        date_default_timezone_set("Asia/Seoul");
        $now_time = date("Y-m-d H:i:s", time());

        $sql = "insert into company_info(rest_time_start, rest_time_end, latitude, longitude, reg_date) 
        values('h', 'h', '$latitude', '$longitude', '$now_time')";
        mysqli_query($link, $sql);
    }
    else 
    {
        date_default_timezone_set("Asia/Seoul");
        $now_time = date("Y-m-d H:i:s", time());

        $last2 = "SELECT * FROM 'company_info' ORDER BY 'reg_date' DESC limit 1";
        $rst2 = mysqli_query($link, $last2);
        $row = mysqli_fetch_object($rst2);
        $up_date = strtotime($row->reg_date);
        mysqli_query($link,"UPDATE company_info SET rest_time_start='j',rest_time_end='j', latitude='$latitude', longitude='$longitude', reg_date='$now_time' WHERE reg_date='$up_date'");
    }
mysqli_close($link);
