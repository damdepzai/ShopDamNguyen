<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $table= 'ratings';
    protected $guarded=[''];
    public function user(){
        return $this->belongsTo('App\User','user_id');
    }
    function getTimeDistance($timePost)
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $timeNow = time() + 1;
        $timePost = strtotime($timePost);
        $timeDistance = $timeNow - $timePost;
        $minute = 60;
        $hour = $minute * 60;
        $day = $hour * 24;
        $week = $day * 7;
        $month = date("t") * $day; // date("t") lấy ra số ngày trong tháng hiện tại
        $year = $day * 365;
        switch ($timeDistance) {
            case ($timeDistance < $minute):
                $result = ($timeDistance == 1) ? $timeDistance . " giây trước" : $timeDistance . " giây trước";
                break;
            case($timeDistance >= $minute && $timeDistance < $hour):
                $timeDistance = round($timeDistance / $minute);
                $result = ($timeDistance == 1) ? $timeDistance . " phút trước" : $timeDistance . " phút trước";
                break;
            case($timeDistance >= $hour && $timeDistance < $day):
                $timeDistance = round($timeDistance / $hour);
                $result = ($timeDistance == 1) ? $timeDistance . " giờ trước" : $timeDistance . " giờ trước";
                break;
            case($timeDistance >= $day && $timeDistance < $week):
                $timeDistance = round($timeDistance / $day);
                $result = ($timeDistance == 1) ? $timeDistance . " ngày trước" : $timeDistance . " ngày trước";
                break;
            case($timeDistance >= $week && $timeDistance < $month):
                $timeDistance = round($timeDistance / $week);
                $result = ($timeDistance == 1) ? $timeDistance . " tuần trước" : $timeDistance . " tuần trước";
                break;
            case($timeDistance >= $month && $timeDistance < $year):
                $timeDistance = round($timeDistance / $month);
                $result = ($timeDistance == 1) ? $timeDistance . " năm trước" : $timeDistance . " năm trước";
                break;
            default:
                $result = date('H:i d-m-Y', time());
        }
        return $result;
    }
}
