<?php
//사용자 근태 입력

/*
date_default_timezone_set("Asia/Seoul");
$d_date = strtotime("2018-06-21 17:46:00"); //이전시간
$dd_date = strtotime(date('Ymd H:i:s')); //현재시간
$total_time = $dd_date - $d_date; // 시간계산

$years = floor($total_time/31536000);
$days = floor($total_time/86400);
$date = ($days - (365 * $years)) -1;
$time = $total_time - ($days * 86400);
$hours = floor($time/3600);
$time = $time - ($hours*3600);
$min = floor($time/60);
$sec = $time - ($min * 60);

//if ($years == 0 and $date == 0) echo $hours."시간 ".$min."분 경과";

if ($data != 0) echo ($date*24) $hours."시간 ".$min."분 경과";
*/

/*
$d_date = strtotime("2018-06-21 22:01:00"); //이전시간
$dd_date = strtotime("2018-06-22 22:13:00"); //현재시간
$diff_hour = (int)(($dd_date- $d_date)/3600);
$diff_min = (int)(($dd_date - $d_date - ($diff_hour * 3600))/60);
print($diff_hour);
echo '<br/>';
print($diff_min);


$today_y = date('Y'); $today_m = date('m');
$today_d = date('d');
$check_week = $today_y ."-".$today_m ."-".$today_d;
$mk_date = strtotime($check_week);
$today_week = date("W", $mk_date);
//하면 이번년도의 몇주차인지 나옴.
//이번 년도의 총 주차를 구하려면
$total_week = date($today_y."-12-31");
$total_date = strtotime($total_week); 
$total_week = date("W", $total_date);
$a_date = strtotime("2017-01-02");
$a_week = date("W", $a_date);
echo '<br/>';
echo $today_week; //오늘은 몇번째 주?
echo '<br/>';
echo $a_week; //해당 날짜의 주차

//
$this_week = date('w', strtotime("2018-07-06"));
$this_month = date('m', strtotime("2018-07-07"));
$this_year = date ('Y', strtotime("2018-07-07"));
echo '<br/>';
//echo $this_week;
echo $this_year;
echo '<br/>';
echo '<br/>';
echo '<br/>';
$select_day = strtotime("2018-07-07");
$cur_year = date('Y', $select_day);
$cur_month = date('m', $select_day);
$start_day = date("Y-m-d", mktime(0,0,0, $cur_month, 1, $cur_year));
$end_day = date("Y-m-d", mktime(0,0,0, $cur_month+1, 1, $cur_year));

/*
echo $start_day;
echo '<br/>';
echo $end_day;
*/

date_default_timezone_set("Asia/Seoul");
$rev_time = date("Y-m-d", time())." 13:00:00";
echo $rev_time;
echo '</br>';
$timea = date("Y-m-d H:i:s", time());
echo $timea;


//echo $this_week;



?>